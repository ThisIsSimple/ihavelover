@extends ("layout")

@section ("stylesheets")
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        .navbar {
            background-color: transparent;
            position: absolute;
            top: 0;
            width: 100vw;
            border: 0;
        }

        .navbar * {
            color: #fff !important;
        }
    </style>
@endsection

@section ("scripts")
@endsection

@section ("content")
    @include("navbar")
    <div class="jumbotron jumbotron-fluid" style="margin: 0; padding: 20em 0; background: url('{{ asset('img/main/home1.jpg')}}') center center; background-size: cover; background-attachment: fixed;">
        <div class="container text-white">
            <h1 class="display-3">당신이 느끼는 당신입니다.</h1>
            <p class="lead">혼자 사는 것은 굉장히 외로운 일이죠. 암 그렇고 말고요. "애인있어요"는 당신에게 연인과 같은 존재가 될것입니다. 일단은 사봐요!</p>
        </div>
    </div>
@endsection