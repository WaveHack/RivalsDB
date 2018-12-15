@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
                @include('partials.global-search', ['placeholder' => $query])
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-2">
                <h1>Search Results</h1>

                @if (empty($result))
                    <p>No results found for '{{ $query }}'.</p>
                @else
                    <div class="card">

                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                @foreach (array_keys($result) as $entityGroup)
                                    <li class="nav-item">
                                        <a href="#{{ $entityGroup }}"
                                           class="nav-link {{ $loop->first ? 'active' : null }}"
                                           data-toggle="tab"
                                           role="tab"
                                           aria-controls="{{ $entityGroup }}"
                                           aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                            {{ ucfirst($entityGroup) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="tab-content">
                            @foreach (array_keys($result) as $entityGroup)
                                <div class="tab-pane {{ $loop->first ? 'active' : null }}"
                                     id="{{ $entityGroup }}"
                                     role="tabpanel"
                                     aria-labelledby="{{ $entityGroup }}-tab">
                                    <div class="table-responsive">
                                        @switch ($entityGroup)
                                            @case('commanders')
                                                @include('partials.search-results.commanders', compact('entityGroup', 'result'))
                                                @break

                                            @case('factions')
                                                @include('partials.search-results.factions', compact('entityGroup', 'result'))
                                                @break

                                            @case('units')
                                                @include('partials.search-results.units', compact('entityGroup', 'result'))
                                                @break
                                        @endswitch
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
