@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.contactoViews.contactos')
    @include('layouts.contactoViews.mapa')
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

        /* Contact Styles */
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-outline-primary {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            padding: 0;
            border-radius: 50%;
            border-color: #D9B669;
        }

        .btn-outline-primary:hover {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            padding: 0;
            border-radius: 50%;
            border-color: #000;
            background-color: #D9B669;
        }

        .btn-outline-primary i:hover {
            font-size: 1.25rem;
            color: #000;
        }

        .btn-outline-primary i {
            font-size: 1.25rem;
            color: #D9B669;
        }

        .btn-primary {
            background-color: #D9B669;
            border-color: #D9B669;
        }

        .btn-primary:hover {
            background-color: #000;
            border-color: #000;
        }

        .form-label {
            font-weight: bold;
        }
    </style>
@endsection
