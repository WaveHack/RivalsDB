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
                            <span class="float-right text-success">
                                <img src="/assets/images/icons/tiberium.png" alt="Tiberium Cost" style="height: 20px; vertical-align: top;">
                                <strong>{{ $unit->cost }}</strong>
                            </span>
                            {{ ucfirst($unit->rarity) }} {{ ucfirst($unit->type) }}
                        </h4>

                        <h6 class="text-muted mb-3">
                            Unlocked at level {{ $unit->unlocked_at_level }}
                        </h6>

                        <p>
                            <em>{{ $unit->description }}</em>
                        </p>
                    </div>

                    <div class="col-sm-5">
                        <div class="card">
                            <img src="/assets/images/portraits/units/{{ $unit->slug }}.jpg" alt="{{ $unit->name }} Portrait" class="card-img-top">

                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>Strong vs: todo</td>
                                        <td class="text-right">Targets: todo</td>
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
