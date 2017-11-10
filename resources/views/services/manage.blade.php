@extends ("layout")

@section ("stylesheets")
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

@section ("scripts")
@endsection

@section ("content")
    @include ("navbar")
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        asdf
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">

            </div>
        </div>
    </div>
@endsection