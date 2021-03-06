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
                <p>RivalsDB is a website with (at the moment) information about Commanders, Factions and Units found in the mobile game <a href="https://www.ea.com/games/command-and-conquer/command-and-conquer-rivals" target="_blank">Command and Conquer: Rivals</a>.</p>
                <p>The project is still in early development, and the layout which you see is an initial draft, which is subject to change in the future.</p>
                <p>New features have been discussed and brainstormed. Ideas include:</p>
                <ul>
                    <li>Information about leagues, rewards and maps,</li>
                    <li>Data tables for crate convoys and unit training scaling costs,</li>
                    <li>Highscore list of the top 100 players and their decks,</li>
                    <li>User accounts, with the ability to link your in-game profile to view your game statistics,</li>
                    <li>News section, with official updates, patch notes etc,</li>
                    <li>Dedicated sections for content creators, including links to (and embeds) for YouTube, Twitch and podcasts, including a showcase system,</li>
                    <li>Deck builder system, where you can compose your own and rate each others' decks,</li>
                    <li>Map creation system, where you can create custom maps (as suggestions to the devs)</li>
                    <li>A better layout/theme, including dark mode!</li>
                </ul>
                <p>RivalsDB is open source software and can be found on GitHub: <a href="https://github.com/WaveHack/RivalsDB" target="_blank">https://github.com/WaveHack/RivalsDB</a></p>
            </div>
        </div>
    </div>
@endsection
