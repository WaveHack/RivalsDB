@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
                @include('partials.global-search')
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-2">
                <img src="/assets/images/logos/factions/{{ $faction->slug }}.png" alt="{{ $faction->name }} Logo" style="width: 128px;" class="rounded float-right ml-3">
                <h1>
                    <img src="/assets/images/icons/factions/{{ $faction->slug }}.png" alt="{{ $faction->name }} Icon" style="width: 36px;">
                    {{ $faction->full_name }}
                    ({{ $faction->name }})
                </h1>
                <p>{{ $faction->description }}</p>
            </div>
        </div>
    </div>
@endsection
