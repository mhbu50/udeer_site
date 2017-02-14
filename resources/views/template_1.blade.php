<!DOCTYPE html>
<html lang="@yield('lang')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDEER</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <script src="/javascript/jquery.js"></script>
    <script src="/javascript/bootstrap.min.js"></script>
    <script src="/javascript/wow.min.js"></script>
    <script src="/javascript/bootstrap3-typeahead.js"></script>
    <script src="/javascript/main.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB3WTqSPaoOVVbU6SouYdATOMKsAIgrtGM"></script>

    
    @yield('head')
</head>

@yield('body')

@if($errors->has())
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
@endif
<html>