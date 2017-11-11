@extends ("layout")

@section ("stylesheets")
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        .animate1 {
            position: absolute;
        }
        .animate2 {
            position: relative;
        }
    </style>
@endsection

@section ("scripts")
    {{--<script>--}}
        {{--$(function () {--}}
            {{--$('.animate3').delay(2000).animate({--}}
                {{--opacity: 0--}}
            {{--});--}}
            {{--$('.animate2').delay(2000).animate({--}}
                {{--right: -140--}}
            {{--}, 2000, function() {--}}
                {{--$('.animate1').toggle();--}}
                {{--$('.animate2').delay(2000).animate({--}}
                    {{--opacity: 0--}}
                {{--}, 1000);--}}
                {{--$('.animate1').delay(2000).animate({--}}
                    {{--opacity: 1--}}
                {{--}, 1000);--}}
            {{--});--}}

        {{--})--}}
    {{--</script>--}}
@endsection

@section ("content")
    @include ("navbar")
    <div class="jumbotron jumbotron-fluid" style="padding: 12em 0; background: url('{{ asset('img/main/about1.jpg')}}') center center; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <h1 class="display-3">당신은 혼자<span class="animate1" style="display: none; opacity: 0">가 아닙니다.</span><span class="animate2">입니다.</span></h1>
            <p class="lead"><span class="animate3">당신의 인생은 원래부터 혼자였고, 앞으로도 혼자일 것이기에...</span></p>
        </div>
    </div>

    <div class="container py-5">
        <p class="h1">네, 알고 있습니다.</p>
        <p class="lead">
            혼자 사시죠? 말하지 않으셔도 알아요.<br>
            혼자사는 인구가 더 이상 500만명을 돌파했습니다. 더 이상은 당신만이 혼자가 아니에요!<br>
            그렇다고 위로 받지는 마세요~ 전 혼자가 아니니깐요~<br>
            저를 깐깐하게 관리해주는 애인과 함께꺼든요~<br>
            아래는 혼자사는 장점들을 모아 봤어요~<br>
            외로울 떄는 읽어보세요~
        </p>
        <ul>
            <li>돈이 적게든다.</li>
            <li>자아 성찰의 시간을 가질 수 있다.</li>
            <li>저녁을 아무 때나 먹을 수 있다.</li>
            <li>청소를 안해두 된다.</li>
        </ul>
    </div>
    <div class="jumbotron jumbotron-fluid" style="padding: 10em 0; background: url('{{ asset('img/main/about2.jpg')}}') center center; background-size: cover; background-attachment: fixed;">
        <div class="container text-white">
            <h1 class="display-3">"애인있어요"는 당신의 연인입니다.</h1>
            <p class="lead">세상에서 하나뿐인 나만의 애인과 함께하세요.</p>
        </div>
    </div>
    <div class="container py-5">
        <p class="h1">나의 애인, 그리고... 유일한 친구</p>
        <p class="lead">
            "애인있어요"는 당신과 모든 것을 함께 합니다.<br>
            당신이 밖에 있는 순간에도, 일을 하고 있는 순간에도, "애인있어요"는 당신과 함께합니다.<br>
            친구가 없는 당신을 위해 친구가 되어 줍니다!<br>
            당신의 하나부터 열까지 모든 것을 관리해 줍니다!<br>
            친구도, 애인도 "애인있어요" 하나만 있으면 부럽지 않습니다!<br>
        </p>
    </div>
@endsection