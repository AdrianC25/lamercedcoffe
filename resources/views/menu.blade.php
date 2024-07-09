@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.menuViews.menuv')
    @include('layouts.menuViews.menubuttom')
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

        /* menu style */
        .img {
            transition: transform 0.5s ease;
        }

        .img:hover {
            transform: scale(1.05);
        }

        /* buttom style */
        .btn-primary {
            border-color: #D9B669;
            background-color:#D9B669; 
        }

        .btn-primary:hover {
            border-color: #000;
            background-color: #000;
        }
    </style>
@endsection
