@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
                @include('partials.global-search')
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-8 offset-md-2">
                <img src="/assets/images/portraits/units/{{ $unit->slug }}.jpg" alt="{{ $unit->name }} Portrait" style="width: 256px;" class="rounded float-right ml-2">
                <h1>
                    <img src="/assets/images/icons/factions/{{ $unit->faction->slug }}.png" alt="{{ $unit->faction->name }} Icon" style="width: 36px;">
                    {{ $unit->name}}
                </h1>
                <p>{{ $unit->description }}</p>
            </div>
        </div>
    </div>
@endsection
