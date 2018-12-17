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
                <h1>Commanders</h1>

                @if ($commanders->isEmpty())
                    <p>No results found.</p>
                @else
                    <div class="row">
                        @foreach ($commanders as $commander)
                            <div class="col-12 col-sm-6 col-lg-3">
                                <card type="commander" :entity="$commander" />
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
