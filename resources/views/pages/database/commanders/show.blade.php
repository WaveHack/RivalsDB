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
                            <img src="/assets/images/icons/factions/{{ $commander->faction->slug }}.png" alt="{{ $commander->faction->name }} Icon" style="width: 36px;" class="float-right">
                            {{ $commander->name}}
                        </h1>

                        <h4 class="text-muted">
                            {{ ucfirst($commander->rarity) }} Commander
                        </h4>

                        <p><em>{{ $commander->description }}</em></p>

                        <p>Unlocked at level {{ $commander->unlocked_at_level }}.</p>
                    </div>

                    <div class="col-sm-5">
                        <div class="card">
                            @php($portraitPath = "assets/images/portraits/commanders/{$commander->slug}.jpg")

                            @if (file_exists(public_path($portraitPath)))
                                <img src="/{{ $portraitPath }}" alt="{{ $commander->name }} Portrait" class="card-img-top">
                            @endif

                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>Base Health: {{ number_format($commander->base_health)  }}</td>
                                        <td class="text-right">Harvester Health: {{ number_format($commander->harvester_health) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Commander Power: <strong>{{ $commander->commander_power_name }}</strong><br>
                                            Cost: {{ number_format($commander->commander_power_cost) }}<br>
                                            <br>
                                            {{ $commander->commander_power_description }}
                                        </td>
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
