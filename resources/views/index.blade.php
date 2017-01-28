<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- LE META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- LE TITLE -->
        <title>La Cultureta | Tu Agenda de Eventos de Donostia</title>

        <!-- LE STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Raleway|Neucha" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

    </head>

    <body draggable="false">

        <div class="container">

            <div class="margin-breaker"></div>

            <!-- HEADER -->
            @include('partials/header');

            <!-- VIEWPORT -->
            <div id="viewport">

                <!-- CARDS -->
                <ul class="cards">

                    <!-- WELCOME CARD -->
                    @include('partials/welcome');

                </ul>

                <!-- NO CARDS -->
                @include('partials/no-cards');

            </div>

            <!-- SINGLE EVENT POPUP -->
            @include('partials/single-event');

            <!-- SETTINGS -->
            @include('partials/settings');

            <script type="text/javascript" src="/js/app.min.js"></script>

        </div>

    </body>

</html>
