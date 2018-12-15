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
                @php($logoPath = "assets/images/logos/factions/{$faction->slug}.png")

                @if (file_exists(public_path($logoPath)))
                    <img src="/{{  $logoPath }}" alt="{{ $faction->name }} Logo" style="width: 128px;" class="rounded float-right ml-3">
                @endif

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
