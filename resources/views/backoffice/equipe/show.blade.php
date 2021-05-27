@extends('layout.app')

@section('content')
@include('partials.nav')
<main class="mt-5 pt-5">
    <div class="profile-card-6"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-6.jpg"
            class="img img-responsive">
        <div class="profile-name">{{$equipe->nom}}
            <br>{{$equipe->ville}} in {{$equipe->pays}}</div>
        <div class="profile-position"> </div>
        <div class="profile-overview">
            <div class="profile-overview">
                <div class="row text-center">
                    <div class="col-xs-4">
                        <div>
                            <h3>{{$equipe->max}}/7</h3>
                            <p>Joueurs</p>
                        </div>
                        <div class="d-flex justify-content-around">
                            <div>
                                <h3>{{$equipe->DC}}</h3>
                                <p>DC</p>
                            </div>
                            <div>
                                <h3>{{$equipe->ATT}}</h3>
                                <p>ATT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="d-flex justify-content-around">
                            <div>
                                <h3>{{$equipe->CT}}</h3>
                                <p>CT</p>
                            </div>
                            <div>
                                <h3>{{$equipe->RP}}</h3>
                                <p>RP</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection