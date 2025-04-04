<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/huebee@2/dist/huebee.min.css" />
    <link rel="shortcut icon" href="{{asset('images/logo.png') }}" type="image/x-icon"/>

    <script src="https://unpkg.com/huebee@2/dist/huebee.pkgd.min.js"></script>

    <title>Kidemia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>