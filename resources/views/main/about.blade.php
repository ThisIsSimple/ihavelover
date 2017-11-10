@extends ("layout")

@section ("stylesheets")
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section ("scripts")
@endsection

@section ("content")
    @include ("navbar")
    <div class="jumbotron jumbotron-fluid" style="padding: 12em 0; background: url('{{ asset('img/main/about1.jpg')}}') center center; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <h1 class="display-3">당신은 혼자입니다.</h1>
            <p class="lead">당신의 인생은 원래부터 혼자였고, 앞으로도 혼자일 것이기에...</p>
        </div>
    </div>
    <div class="container py-5">
        <p class="h1">네, 알고 있습니다.</p>
        <p class="lead">혼자 사시죠? 말하지 않으셔도 알아요.</p>
    </div>
    <div class="jumbotron jumbotron-fluid" style="padding: 7em 0; background: url('{{ asset('img/main/about2.jpg')}}') center center; background-size: cover; background-attachment: fixed;">
        <div class="container text-white">
            <h1 class="display-3">"애인있어요"는 당신의 연인입니다.</h1>
            <p class="lead">세상에서 하나뿐인 나만의 애인과 함께하세요.</p>
        </div>
    </div>
    <div class="container py-5">
        <p class="h1">나의 애인, 그리고... 유일한 친구</p>
        <p class="lead">"애인있어요"는 당신과 모든 것을 함께 합니다. 당신이 밖에 있는 순간에도, 일을 하고 있는 순간에도, "애인있어요"는 당신과 함께합니다.</p>
    </div>
    <div class="jumbotron jumbotron-fluid" style="padding: 15em 0; background: url('{{ asset('img/main/about3.jpg')}}') center center; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <h1 class="display-3">당신은 혼자입니다.</h1>
            <p class="lead">당신의 인생은 원래부터 혼자였고, 앞으로도 혼자일 것이기에...</p>
        </div>
    </div>
    <div class="container">

    </div>
@endsection