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
                <h1>About</h1>
                <p>RivalsDB is a website with (at the moment) information about Commanders, Factions and Units found in the mobile game <a href="https://www.ea.com/games/command-and-conquer/command-and-conquer-rivals">Command and Conquer: Rivals</a>.</p>
                <p>The project is still in early development, but new features have been planned, including:</p>
                <ul>
                    <li>Information about leagues, rewards and maps,</li>
                    <li>Data tables for crate convoys and unit training scaling costs,</li>
                    <li>Highscore list of the top 100 players and their decks,</li>
                    <li>User accounts, with the ability to link your in-game profile to view your game statistics,</li>
                    <li>News section, with official updates, patch notes etc,</li>
                    <li>Deck builder system, where you can create, share, rate and comment decks</li>
                    <li>Map creation system, where you can create, share, rate and comment custom maps (as suggestions to the devs)</li>
                </ul>
                <p>RivalsDB is open source software and can be found on GitHub: <a href="https://github.com/WaveHack/RivalsDB">https://github.com/WaveHack/RivalsDB</a></p>
            </div>
        </div>
    </div>
@endsection
