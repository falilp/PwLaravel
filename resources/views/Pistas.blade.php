<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/pistas.css') }}"> 
</head>

<!-- Menu de navegacion-->
@extends('layouts.nav')
@section('nav_content')
@endsection

<body>
    <img src="..\public\img\fondoBlanco.png">
    <div class="header_pistas">

    <h1>Pistas</h1>

    <ul class="cards">
    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--f11"></div>
        <div class="card__content">
            <div class="card__title">Pistas Fútbol 11</div>
            <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
            <button class="btn btn--block card__btn">Button</button>
        </div>
        </div>
    </li>
    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--f7"></div>
        <div class="card__content">
            <div class="card__title">Pistas Fútbol 7</div>
            <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
            <button class="btn btn--block card__btn">Button</button>
        </div>
        </div>
    </li>

    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--fs"></div>
        <div class="card__content">
            <div class="card__title">Pistas Fútbol sala</div>
            <p class="card__text">This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property."</p>
            <button class="btn btn--block card__btn">Button</button>
        </div>
        </div>
    </li>

    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--bal"></div>
        <div class="card__content">
            <div class="card__title">Pista Baloncesto</div>
            <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
            <button class="btn btn--block card__btn">Button</button>
        </div>
        </div>
    </li>
    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--padel"></div>
        <div class="card__content">
            <div class="card__title">Pista Pádel</div>
            <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
            <button class="btn btn--block card__btn">Button</button>
        </div>
        </div>
    </li>
    
    <li class="cards__item">
        <div class="card">
        <div class="card__image card__image--tenis"></div>
        <div class="card__content">
            <div class="card__title">Pista Tenis</div>
            <p class="card__text">This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property."</p>
            <button class="btn btn--block card__btn">Button</button>
        </div>
        </div>
    </li>
    
    </ul>
    </div>
</body>

<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection
    
</html>