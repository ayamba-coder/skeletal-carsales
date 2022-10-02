<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}  </title>

        <!-- scripts -->
             <!-- Scripts -->

    <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @notifyCss
        <!-- Fonts -->
       <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">-->
    </head>
    <body class="py-0">
        @include('layouts.header')
        @yield('content')
        <x:notify-messages/>
        @notifyJs
    </body>