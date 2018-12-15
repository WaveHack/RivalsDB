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
                <h1>Commanders</h1>
                @foreach ($commanders->chunk(2) as $commandersChunked)
                    <div class="card-deck">
                        @foreach ($commandersChunked as $commander)
                            <div class="card">
                                @php($imgPath = "assets/images/logos/commanders/{$commander->slug}.png")

                                @if (file_exists(public_path($imgPath)))
                                    <div class="card-img-top" style="background: url('/{{ $imgPath }}') center; background-size: cover; height:128px"></div>
                                @endif

                                <div class="card-body text-left">
                                    <h5 class="card-title">
                                        <img src="/assets/images/icons/factions/{{ $commander->faction->slug }}.png" style="width: 24px;" class="float-right">
                                        {{ $commander->name }}
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        Rare Commander
                                        <span class="float-right">Level {{ $commander->unlocked_at_level }}</span>
                                    </h6>
                                    <p class="card-text">
                                        {{ $commander->description }}
                                    </p>
                                    {{--<p class="card-text">
                                        <strong>Commander Power:</strong> {{ $commander->commander_power_name }}<br>
                                        Tiberium Cost: {{ $commander->commander_power_cost }}
                                    </p>
                                    <p class="card-text">
                                        <em>{{ $commander->commander_power_description }}</em>
                                    </p>--}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
