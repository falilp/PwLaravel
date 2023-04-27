<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/circuitos.css') }}"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<!-- Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection

<body>
<body>
<!-- Bootstrap Static Header -->
<div style="background: url(https://pland-architects.com/wp-content/uploads/2019/11/City-Mall-Karting-Track.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">Circuitos Karting KMB</h1>
        <p class="font-italic mb-0">Using simple jumbotron-style component, create a nice Bootstrap 4 header with a background image.</p>
        <p class="font-italic">Snippe by
            <a href="https://bootstrapious.com" class="text-white">
                <u>Bootstrapious</u>
            </a>
        </p>
        <a href="#" role="button" class="btn btn-primary px-5">See All Features</a>
    </div>
</div>

<!-- For Demo Purpose -->
<div class="container py-5">
    <h2 class="h3 font-weight-bold">Some demo content</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur <strong class="font-weight-bold text-dark">adipisicing elit, sed </strong>do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <strong class="font-weight-bold text-dark">reprehenderit in voluptate </strong>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>
</body> 
    
</body>

<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>