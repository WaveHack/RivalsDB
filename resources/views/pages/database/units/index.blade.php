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
                @else
                    <div class="row">
                        @foreach ($units as $unit)
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-rarity-{{ $unit->rarity }} mb-3">
                                    @php($portraitPath = "assets/images/portraits/units/{$unit->faction->slug}/{$unit->slug}.png")

                                    @if (file_exists(public_path($portraitPath)))
                                        <a href="{{ route('db.units.show', $unit->slug) }}">
                                            <img src="/{{ $portraitPath }}" alt="Portrait of unit {{ $unit->name }}" class="card-img-top">
                                        </a>
                                    @endif

                                    <div class="card-body text-left">
                                        <h5 class="card-title">
                                            <img src="/assets/images/icons/factions/{{ $unit->faction->slug }}.png" alt="{{ $unit->faction->name }} Logo" title="{{ $unit->faction->name }}" style="width: 24px;" class="float-right">
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
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
