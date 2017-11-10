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
    <div class="container py-5">
        <p class="h1">Search Recipes</p>
        <p class="lead">Put your ingredients</p>
        <form method="post">
            <input type="text" id="ingredients" name="ingredients" aria-describedby="ingredientsHelp"
                   class="form-control" placeholder="ex) Shrimp, Onion, Egg">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <small id="ingredientsHelp" class="form-text text-muted">Add ingredients by ,</small>
        </form>
    </div>
    <div class="container pb-5">
        <div class="card-columns">
            @if(!empty($recipes))
                @foreach($recipes as $recipe)
                    <div class="card">
                        <img class="card-img-top" src="{{ $recipe->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{ $recipe->title }}</h4>
                            <p class="card-text"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;{{ $recipe->likes }}</p>
                            <a href="https://spoonacular.com/recipes/{{ $recipe->title }}-{{ $recipe->id }}" target="_blank" class="btn btn-primary">Recipe Detail</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection