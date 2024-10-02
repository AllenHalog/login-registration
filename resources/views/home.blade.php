<!-- resources/views/home.blade.php -->
@extends('layouts.layout')

@section('title', 'Roman Catholic Cemetery')

@section('content')
    <!-- Fullscreen Banner with Image -->
    <div class="fullscreen-banner" style="background-image: url('{{ asset('images/cemetery.jpeg') }}');">
        <div class="content">
            <h1>Roman Catholic Cemetery Website</h1>
            <p>“Welcome to the Roman Catholic Cemetery website, your gateway to a variety of cemetery services.
                Explore our features, including tomb cleaning, flower delivery, remains updates, cost estimation, and
                more. Manage your needs and stay informed with ease.”</p>
            <!-- Latest News & Updates Button -->
            <a href="#news-updates" class="latest-news-button">Latest News & Updates <i class="fa-regular fa-circle-down"></i></a>
            <br>
            <hr>
        </div>
    </div>

    <br>
    <hr>

    
@endsection