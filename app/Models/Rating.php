<?php

namespace App\Models;
use App\Lib\Functions;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

	protected $fillable = ['userId', 'eventId', 'rating'];

	/** ADD RATING **/
	public function rate($params) {

		// If already rated
		if ($previousRating = $this->hasTheUserRatedPreviouslyTheEvent($params['userId'], $params['eventId'])) {

			// We update the rate parameter and save
			$previousRating->rating = $params['rating'];
			$previousRating->save();
		} else {

			// If not previous, we create a new row and save
			$rating = new self();
			$rating->user_id = $params['userId'];
			$rating->event_id = $params['eventId'];
			$rating->rating = $params['rating'];
			$rating->save();
		}

	}

	public function hasTheUserRatedPreviouslyTheEvent($userId, $eventId) {

		return self::where('user_id', '=', $userId)->where('event_id', '=', $eventId)->get()->toArray();
	}

	/** GET RATINGS **/
	public function getRatings($params) {

		// We only will serve ratings of events that are currently available (no past events)
		$eventModel = new Event();
		$events = $eventModel->getAllFutureEvents();
		$eventIds = Functions::getArrayWithIndexValues($events, 'id');

		// Get events rated by user
		$ratings = self::where('user_id', '=', $params['user_id'])->get()->toArray();

		// Now we filter the events with the currently available
		$finalRatings = array();

		foreach ($ratings as $rating) {

			if (in_array($rating['event_id'], $eventIds)) {
				$finalRatings[] = $rating;
			}
		}

		// We prepare them for front end rendering
		$finalRatings = $this->parseRatings($finalRatings);

		return $finalRatings;
	}

	public function parseRatings($ratings) {

		$parsedRatings = array();
		foreach ($ratings as $rating) {

			$parsedRating = array(
				'eventId' => $rating['event_id'],
				'rating' => $rating['rating'],
			);

			$parsedRatings[] = $parsedRating;
		}

		return $parsedRatings;
	}

}