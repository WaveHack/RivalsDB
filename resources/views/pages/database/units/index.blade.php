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
                @foreach ($units->chunk(4) as $unitsChunked)
                    <div class="card-deck">
                        @foreach ($unitsChunked as $unit)
                            <div class="card">
                                @php($imgPath = "assets/images/portraits/units/{$unit->slug}.jpg")

                                @if (file_exists(public_path($imgPath)))
                                    <a href="{{ route('database.units.show', $unit->slug) }}">
                                        <div class="card-img-top" style="background: url('/{{ $imgPath }}') center; background-size: cover; height:128px"></div>
                                    </a>
                                @endif

                                <div class="card-body text-left">
                                    <h5 class="card-title">
                                        <img src="/assets/images/icons/factions/{{ $unit->faction->slug }}.png" style="width: 24px;" class="float-right">
                                        <a href="{{ route('database.units.show', $unit->slug) }}">
                                            {{ $unit->name }}
                                        </a>
                                    </h5>

                                    <h6 class="card-subtitle mb-2 text-muted">
                                        {{ ucfirst($unit->rarity) }} {{ ucfirst($unit->type) }}
                                        <span class="float-right">Level {{ $unit->unlocked_at_level }}</span>
                                    </h6>

                                    <p class="card-text">
                                        {{ $unit->description }}
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
