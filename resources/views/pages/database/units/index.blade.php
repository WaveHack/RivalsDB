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
                <h1>Units</h1>

                @if ($units->isEmpty())
                    <p>No results found.</p>
                @endif

                @foreach ($units->chunk(4) as $unitsChunked)
                    <div class="card-deck mb-4">
                        @foreach ($unitsChunked as $unit)
                            <div class="card card-rarity-{{ $unit->rarity }}">
                                @php($portraitPath = "assets/images/portraits/units/{$unit->slug}-card.png")

                                @if (file_exists(public_path($portraitPath)))
                                    <a href="{{ route('db.units.show', $unit->slug) }}">
                                        <img src="/{{ $portraitPath }}" alt="Portrait of unit {{ $unit->name }}" class="card-img-top">
                                    </a>
                                @endif

                                <div class="card-body text-left">
                                    <h5 class="card-title">
                                        <img src="/assets/images/icons/factions/{{ $unit->faction->slug }}.png" style="width: 24px;" class="float-right">
                                        <a href="{{ route('db.units.show', $unit->slug) }}">
                                            {{ $unit->name }}
                                        </a>
                                    </h5>

                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <span class="rarity-{{ $unit->rarity }}">
                                            {{ ucfirst($unit->rarity) }}
                                            {{ ucfirst($unit->type) }}
                                        </span>
                                        {{--<span class="float-right">Level {{ $unit->unlocked_at_level }}</span>--}}
                                    </h6>

                                    <p class="card-text">
                                        <em>{{ $unit->flavor_description }}</em>
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
