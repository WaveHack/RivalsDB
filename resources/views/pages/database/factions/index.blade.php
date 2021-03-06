@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
                @include('partials.global-search')
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-2 text-center">
                <h1>Factions</h1>

                @if ($factions->isEmpty())
                    <p>No results found.</p>
                @endif

                <div class="card-deck">
                    @foreach ($factions as $faction)
                        <div class="card">
                            @php($logoPath = "assets/images/logos/factions/{$faction->slug}.png")

                            @if (file_exists(public_path($logoPath)))
                                <a href="{{ route('db.factions.show', $faction->slug) }}">
                                    <div class="card-img-top" style="background: url('/{{ $logoPath }}') center; background-size: cover; height:128px"></div>
                                </a>
                            @endif

                            <div class="card-body text-left">
                                <h5 class="card-title">
                                    <img src="/assets/images/icons/factions/{{ $faction->slug }}.png" alt="{{ $faction->name }} Logo" title="{{ $faction->name }}" style="width: 24px;" class="float-right">
                                    <a href="{{ route('db.factions.show', $faction->slug) }}">
                                        {{ $faction->name }}
                                    </a>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $faction->full_name }}</h6>
                                <p class="card-text">
                                    <em>{{ $faction->description }}</em>
                                </p>
                            </div>

                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('db.commanders') }}?faction={{ $faction->slug }}">
                                        {{ $faction->commanders_count }} {{ str_plural('commander', $faction->commanders_count) }}
                                    </a>
                                    {{--<a href="#">Decks</a>--}}
                                    <a href="{{ route('db.units') }}?faction={{ $faction->slug }}">
                                        {{ $faction->units_count }} {{ str_plural('unit', $faction->units_count) }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
