@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
                @include('partials.global-search')
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-8 offset-md-2">
                <h1>Search Results</h1>
                <p>There's no news yet. Check back later!</p>
            </div>
        </div>
    </div>
@endsection
