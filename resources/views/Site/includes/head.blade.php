<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>

	<!--- basic page needs
   ================================================== -->
	<meta charset="utf-8">
	<title>{{ env('APP_NAME') }}</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1,">

	<!-- CSS
   ================================================== -->
   	<link rel="stylesheet" href="{{ asset('css/base.css') }}">
	<link rel="stylesheet" href="{{asset('css/vendor.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="{{asset('/richtexteditor/rte_theme_default.css')}}" />
    @yield('styles')


	<!-- script
   ================================================== -->
	<script src="{{asset('js/modernizr.js')}}"></script>
	<script src="{{asset('js/pace.min.js')}}"></script>

	<!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
	
</head>

<body id="top">
