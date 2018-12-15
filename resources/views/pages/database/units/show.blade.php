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

                <div class="row">
                    <div class="col-sm-7">
                        <h1>
                            <img src="/assets/images/icons/factions/{{ $unit->faction->slug }}.png" alt="{{ $unit->faction->name }} Icon" style="width: 36px;" class="float-right">
                            {{ $unit->name}}
                        </h1>

                        <h4 class="text-muted">
                            {{--<span class="float-right text-success">
                                <img src="/assets/images/icons/tiberium.png" alt="Tiberium Cost" style="height: 20px; vertical-align: top;">
                                <strong>{{ $unit->cost }}</strong>
                            </span>--}}
                            {{ ucfirst($unit->rarity) }} {{ ucfirst($unit->type) }}
                        </h4>

                        <p><em>{{ $unit->description }}</em></p>

                        <p>Unlocked at level {{ $unit->unlocked_at_level }}.</p>
                    </div>

                    <div class="col-sm-5">
                        <div class="card">
                            @php($portraitPath = "assets/images/portraits/units/{$unit->slug}.jpg")

                            @if (file_exists(public_path($portraitPath)))
                                <img src="/{{ $portraitPath }}" alt="{{ $unit->name }} Portrait" class="card-img-top">
                            @endif

                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            Strong vs: {{ $unit->strengths()->map(function ($value) { return ucfirst($value); })->implode(', ') }}
                                        </td>
                                        <td class="text-right">Targets: {{ $unit->targets()->map(function ($value) { return ucfirst($value); })->implode(', ') }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">{{ $unit->battle_description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Health: {{ number_format($unit->health) }}</td>
                                        <td class="text-right">DPS: {{ number_format($unit->dps) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Speed: {{ ucfirst($unit->speed) }}</td>
                                        <td class="text-right">Building: {{ ucfirst($unit->building) }} </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Cost: {{ number_format($unit->cost) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
