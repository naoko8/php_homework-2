<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>POST BY ID</title>
</head>
<body>
@foreach($Post as $helper)
<b> {{$helper->post_text}} </b>
@endforeach
</body>
</html>
