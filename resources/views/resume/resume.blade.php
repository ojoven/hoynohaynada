<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Resume | Resume</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway|Neucha" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body draggable="false">

    <div id="resume">

        <ul class="dates">

            <?php foreach ($events as $date) { ?>

            <li>
                <span class="title"><?php echo $date['date']; ?></span>
                <ul class="events">

                    <?php if ($date['events']) {

                        foreach ($date['events'] as $event) { ?>

                            <li class="event">
                                <?php echo $event['title']; ?>
                            </li>

                        <?php }

                    } else { ?>

                    <?php } ?>

                </ul>
            </li>

            <?php } ?>

        </ul>

</body>

</html>