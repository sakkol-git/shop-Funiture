<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  </head>
