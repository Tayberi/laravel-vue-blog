<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laravel</title>

</head>
<body>
<div id="app">
    <posts-index></posts-index>
</div>

{{--<script src="{{ mix('js/app.js') }}?time={{ time() }}"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
