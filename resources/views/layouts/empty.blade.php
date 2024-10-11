<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('includes.head')
</head>
@php
	$bodyClass = (!empty($appBoxedLayout)) ? 'boxed-layout ' : '';
	$bodyClass .= (!empty($paceTop)) ? 'pace-top ' : $bodyClass;
	$bodyClass .= (!empty($bodyClass)) ? $bodyClass . ' ' : $bodyClass;
@endphp
<body class="{{ $bodyClass }}">
	@include('includes.component.page-loader')
	
	@yield('content')
			
	@include('includes.page-js')
<<<<<<< HEAD
	
=======
>>>>>>> 19e847e61808a4a254945f11f581edb63c754df5
</body>
</html>
