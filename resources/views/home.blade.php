@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="background-color: #fff; color: #999;">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                    {{--<form action="#" method="get" class="form-inline">--}}
                        <input type="search" class="form-control form-control-lg border-left-0 border" placeholder="Search" aria-label="search" style="padding-left: 0;">
                    {{--</form>--}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h1>header</h1>
                <p>paragraph</p>
            </div>
        </div>
    </div>

    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
