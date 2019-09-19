<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="icon" href="{{ URL::asset('/images/EverGalax Logo.png') }}" type="image/x-icon">


		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		<!-- Styles -->
         @if (Route::has('login'))
            
            @auth
                 <link type="text/css" href="{{ asset('css/authmain.css') }}" rel="stylesheet">
            @else
                
                <link type="text/css" href="{{ asset('css/guest.css') }}" rel="stylesheet">

            @endauth
        @endif
        <link type="text/css" href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="screen  and (min-width: 400px)" />