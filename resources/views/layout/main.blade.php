<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>LAARRAGUE Zakarya Landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{url('assets/vendors/themify-icons/css/themify-icons.css')}}">
    <!-- Bootstrap + Meyawo main styles -->
	<link rel="stylesheet" href="{{url('assets/css/meyawo.css')}}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

<@include('layout.header')
<@include('layout.nav')

<main>
    @yield('content')
</main>


<@include('layout.footer')


<!-- core  -->
<script src="{{url('assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
<script src="{{url('assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

<!-- bootstrap 3 affix -->
<script src="{{url('assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

<!-- Meyawo js -->
<script src="{{url('assets/js/meyawo.js')}}"></script>

</body>
</html>
