<?php

namespace App\Lib;

use Xinax\LaravelGettext\Facades\LaravelGettext;

class Functions {

	/** ARRAYS **/
	public static function getArrayWithIndexValues($array, $index) {

		$arrayIndexes = array();
		foreach ($array as $element) {
			$arrayIndexes[] = $element[$index];
		}

		return $arrayIndexes;
	}

	public static function strpos_array($haystack, $needles, $offset = 0) {
		if (is_array($needles)) {
			foreach ($needles as $needle) {
				$pos = self::strpos_array($haystack, $needle);
				if ($pos !== false) {
					return $pos;
				}
			}
			return false;
		} else {
			return strpos($haystack, $needles, $offset);
		}
	}

	/** LANGUAGE **/
	public static function setLocale($languageFromBrowserUrl) {

		$language = self::getUserLanguage($languageFromBrowserUrl);

		if ($language == 'eu') {
			LaravelGettext::setLocale('eu_EU');
		} else {
			LaravelGettext::setLocale('es_ES');
		}

		return $language;
	}

	public static function getUserLanguage($languageFromBrowserUrl = 'es') {

		$arrayValidLanguages = array('es', 'eu');
		$language = $languageFromBrowserUrl;

		// If the user has set the language
		if (isset($_COOKIE['language']) && in_array($_COOKIE['language'], $arrayValidLanguages)) {
			$language = $_COOKIE['language'];
		}

		return $language;
	}

}

