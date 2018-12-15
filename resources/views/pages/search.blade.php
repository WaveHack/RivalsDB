@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
                @include('partials.global-search', ['placeholder' => $query])
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-8 offset-md-2">
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

                        <div class="card-body">
                            <div class="tab-content">
                                @foreach (array_keys($result) as $entityGroup)
                                    <div class="tab-pane {{ $loop->first ? 'active' : null }}"
                                         id="{{ $entityGroup }}"
                                         role="tabpanel"
                                         aria-labelledby="{{ $entityGroup }}-tab">

                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <caption class="pb-0">
                                                    {{ $result[$entityGroup]->count() }} {{ str_plural(str_singular($entityGroup), $result[$entityGroup]->count()) }} found
                                                </caption>
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($result[$entityGroup] as $item)
                                                        <tr>
                                                            <td>
                                                                <a href="#">{{ $item->name }}</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
