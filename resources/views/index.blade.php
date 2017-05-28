<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- LE META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- LE TITLE -->
        <title> {{ __('La Cultureta | Tu Agenda de Eventos de Donostia') }}</title>

        <!-- LE STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Raleway" rel="stylesheet">
        <link href="/css/style.css?v=4" rel="stylesheet">

    </head>

    <body draggable="false">

        <!-- GOOGLE ANALYTICS -->
        @include('partials/ga')

        <!-- HEADER -->
        @include('partials/header')

        <!-- VIEWPORT -->
        <div id="viewport">

            <!-- CARDS -->
            <ul class="cards">

                <!-- WELCOME CARD -->
                @include('partials/welcome')

            </ul>

            <!-- LOADING -->
            @include('partials/loading')

            <!-- NO CARDS -->
            @include('partials/no-cards')

            <!-- FAV/TRASH BUTTONS (DESKTOP) -->
            @include('partials/favtrashbuttons')

        </div>

        <!-- SINGLE EVENT POPUP -->
        @include('partials/single-event')

        <!-- SETTINGS -->
        @include('partials/settings')
        @include('partials/user-settings')

        <!-- FOOTER -->
        @include('partials/footer')

        <script>
            var browserLang = '<?php echo isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : 'es'; ?>';
        </script>

        <script type="text/javascript" src="/js/app.min.js?v=4"></script>

    </body>

</html>
