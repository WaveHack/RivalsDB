@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
                @include('partials.global-search')
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-8 offset-md-2 text-center">
                <h1>Factions</h1>
                <div class="card-deck">
                    @foreach ($factions as $faction)
                        <div class="card">
                            <div class="card-img-top" style="background: url('/assets/images/logos/factions/{{ $faction->slug }}.png') center; background-size: cover; height:128px"></div>
                            <div class="card-body text-left">
                                <h5 class="card-title">
                                    <img src="/assets/images/icons/factions/{{ $faction->slug }}.png" style="width: 24px;">
                                    {{ $faction->name }}
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $faction->full_name }}</h6>
                                <p class="card-text">{{ $faction->description }}</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#">Commanders</a>
                                    <a href="#">Decks</a>
                                    <a href="#">Units</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
