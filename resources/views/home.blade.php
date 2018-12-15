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
            <div class="col-xs-12 col-md-8 offset-md-2 text-center">
                <h1>Factions</h1>
                <div class="card-deck">

                    <div class="card">
                        <img src="assets/images/gdi.png" class="card-img-top">
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
                        <img src="assets/images/nod.png" class="card-img-top">
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
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
