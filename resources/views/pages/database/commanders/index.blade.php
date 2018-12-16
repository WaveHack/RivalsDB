@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
                @include('partials.global-search')
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Commanders</h1>

                @if ($commanders->isEmpty())
                    <p>No results found.</p>
                @endif

                @foreach ($commanders->chunk(4) as $commandersChunked)
                    <div class="card-deck mb-4">
                        @foreach ($commandersChunked as $commander)
                            <div class="card">
                                @php($portraitPath = "assets/images/portraits/commanders/{$commander->slug}.png")

                                @if (file_exists(public_path($portraitPath)))
                                    <a href="{{ route('db.commanders.show', $commander->slug) }}">
                                        <div class="card-img-top" style="background: url('/{{ $portraitPath }}') center; background-size: cover; height:128px"></div>
                                    </a>
                                @endif

                                <div class="card-body text-left">
                                    <h5 class="card-title">
                                        <img src="/assets/images/icons/factions/{{ $commander->faction->slug }}.png" style="width: 24px;" class="float-right">
                                        <a href="{{ route('db.commanders.show', $commander->slug) }}">
                                            {{ $commander->name }}
                                        </a>
                                    </h5>

                                    <h6 class="card-subtitle mb-2 text-muted">
                                        Rare Commander
                                        <span class="float-right">Level {{ $commander->unlocked_at_level }}</span>
                                    </h6>

                                    <p class="card-text">
                                        <em>{{ $commander->flavor_description }}</em>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
