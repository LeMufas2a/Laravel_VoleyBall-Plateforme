@extends('layout.app')

@section('content')
@include('partials.nav')
<main>
    <h1 class="text-center my-5 text-white">Equipes</h1>
    <div class="w-100 d-flex justify-content-center">
        <a class="btn shadow-none create fs-1   px-4 create" href={{ route("equipe.create") }}><i
                class="fas fa-plus"></i></a>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($equipes as $equipe)
            <div class="col-4">
                <div class="profile-card-6"><img
                        src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-6.jpg"
                        class="img img-responsive">
                    <div class="profile-name">{{$equipe->nom}}
                        <br>{{$equipe->ville}} in {{$equipe->pays}}</div>
                    <div class="profile-position">{{$equipe->continent->nom}}</div>
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
                                <div class="col-xs-4">
                                    <div class="d-flex w-100 justify-content-center">
                                        <a class="btn shadow-none fs-2  show"
                                            href={{ route("equipe.show", $equipe->id) }}><i class="fas fa-eye"></i></a>
                                        <a class="btn edit mx-1 shadow-none fs-2"
                                            href={{ route("equipe.edit", $equipe->id) }}><i
                                                class="fas fa-user-edit"></i></a>
                                        <form action={{ route("equipe.destroy", $equipe->id) }} method="post">
                                            @csrf
                                            @method("delete")
                                            <button class="btn shadow-none  mx-1 fs-2  delete" type="submit"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
    
</main>
@endsection