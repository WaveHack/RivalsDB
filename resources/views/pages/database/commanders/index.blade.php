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
                @else
                    <div class="row">
                        @foreach ($commanders as $commander)
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-rarity-{{ $commander->rarity }} mb-3">
                                    @php($portraitPath = "assets/images/portraits/commanders/{$commander->slug}-card.jpg")

                                    @if (file_exists(public_path($portraitPath)))
                                        <a href="{{ route('db.commanders.show', $commander->slug) }}">
                                            <img src="/{{ $portraitPath }}" alt="Portrait of commander {{ $commander->name }}" class="card-img-top">
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
                                            <span class="rarity-{{ $commander->rarity }}">
                                                {{ ucfirst($commander->rarity) }}
                                                Commander
                                            </span>
                                            {{--<span class="float-right">Level {{ $commander->unlocked_at_level }}</span>--}}
                                        </h6>

                                        <p class="card-text">
                                            <em>{{ $commander->flavor_description }}</em>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
