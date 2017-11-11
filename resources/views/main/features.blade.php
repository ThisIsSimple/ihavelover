@extends ("layout")

@section ("stylesheets")
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section ("scripts")
@endsection

@section ("content")
    @include("navbar")
    <div class="container py-5">
        <p class="h1">New Lifestyle.</p>
        <p class="lead text-muted">WE suggest you a new lifestyle with latest IT technologies</p>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 col-md-12 mb-4">
                        <div class="card card-features text-white">
                            <img class="card-img" src="{{ asset('img/main/features1.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Food</p>
                                <h4 class="card-title">오늘 뭐 먹지?</h4>
                                <p class="card-text">매번 시켜 먹으시겠습니까?</p>
                                <a href="/services/food" class="btn btn-feature">서비스 바로 가기</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card card-features text-white">
                            <img class="card-img" src="{{ asset('img/main/features2.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Travel</p>
                                <h4 class="card-title">이제, 마음 놓고 나가세요!</h4>
                                <p class="card-text">당신이 없을 때도 당신의 집 상태를 실시간으로 알려줍니다!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card card-features text-white">
                            <img class="card-img" src="{{ asset('img/main/features3.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Energy</p>
                                <h4 class="card-title">모든 것을 관리하는 친구</h4>
                                <p class="card-text">가끔 불을 끄고 나가지 못해 천문학적인 돈이 들 때가 있습니다! 이제는 원격으로 불을 끄고 키세요!</p>
                                <a href="/services/manage" class="btn btn-feature">서비스 바로 가기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card card-features text-white">
                            <img class="card-img" src="{{ asset('img/main/features4.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Features</p>
                                <h4 class="card-title">당신만을 위해...</h4>
                                <p class="card-text">"애인있어요"의 모든 기능은 당신 한 사람만을 위해 이루어집니다!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card card-features text-white">
                            <img class="card-img" src="{{ asset('img/main/features5.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Home</p>
                                <h4 class="card-title">행복한 나의 집</h4>
                                <p class="card-text">"애인있어요"와 함께라면 외롭지 않습니다! 이 친구가 당신의 애인이 될 것이기 때문이죠!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 mb-4">
                        <div class="card card-features text-white">
                            <img class="card-img" src="{{ asset('img/main/features6.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Security</p>
                                <h4 class="card-title">랜덤 방범 기능</h4>
                                <p class="card-text">당신이 없을 때! 불을 끄고 키는 등 당신이 있는 것처럼 해줍니다!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection