@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.welcomeViews.caracteristicas')
    @include('layouts.welcomeViews.testimonios')
    @include('layouts.footer')
@endsection

@section('css')
    @parent
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&display=swap" rel="stylesheet');
        /* page style */
        html,
        body{
            font-family: "Playwrite IS", cursive !important;
        }


        /* navbar style */
        .bg-dark {
            background: linear-gradient(90deg, rgba(217, 182, 105, 1) 62%, rgb(244, 226, 226) 100%) !important;
        }

        /* testomonios style */
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
@endsection
