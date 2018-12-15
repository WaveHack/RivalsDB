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
                <h1>Factions</h1>
                <div class="card-deck">

                    @foreach ($factions as $faction)
                        <div class="card">
                            <img class="card-img-bottom" src="/assets/images/logos/factions/{{ $faction->slug }}.png" alt="{{ $faction->name }} logo">
                            <div class="card-body text-left">
                                <h5 class="card-title">
                                    <img src="/assets/images/icons/factions/{{ $faction->slug }}.png" style="width: 24px;">
                                    {{ $faction->name }}
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $faction->full_name }}</h6>
                                <p class="card-text">{{ $faction->description }}</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#">Commanders</a>
                                    <a href="#">Decks</a>
                                    <a href="#">Units</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{--<div class="card">
                        <img src="/assets/images/gdi.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">GDI</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Global Defense Initiative</h6>
                            <p class="card-text">The Global Defense Initiative is the global government of Earth. It was founded in accordance with the United Nations Global Defense Act (UNGDA), on the date of 12 October 1995, as a united military force for global peacekeeping.</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#">Commanders</a>
                                <a href="#">Decks</a>
                                <a href="#">Units</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="/assets/images/nod.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nod</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Brotherhood of Nod</h6>
                            <p class="card-text">The Brotherhood of Nod was a popular, global, religiously developed movement devoted to the guidance of the elusive and charismatic figure of Kane, and the extraterrestrial Tiberium substance that arrived on Earth in 1995.</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#">Commanders</a>
                                <a href="#">Decks</a>
                                <a href="#">Units</a>
                            </div>
                        </div>
                    </div>--}}

                </div>
            </div>
        </div>
    </div>
@endsection
