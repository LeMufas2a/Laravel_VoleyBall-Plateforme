@extends('layout.app')

@section('content')
@include('partials.nav')
<main>
    <h1 class="text-center my-5 text-white">Equipes</h1>
    <div class="w-100 d-flex justify-content-center">
        <a class="btn shadow-none create fs-1   px-4 create" href={{ route("joueur.create") }}><i
                class="fas fa-plus"></i></a>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($joueurs as $joueur)
            <div class="col-4">
                <div class="profile-card-6">
                    @if ($joueur->photo)
                    <img src="{{$joueur->photo->url}}" class="img img-responsive">
                    @else
                    Pas de photo
                    @endif
                    {{-- <img src="" class="img img-responsive"> --}}
                    <div class="profile-name">{{$joueur->nom . ' ' . $joueur->prenom }}
                        <br>{{$joueur->age}} </div>
                    <div class="profile-position">{{$joueur->pays}}</div>
                    <div class="profile-overview">
                        <div class="profile-overview">
                            <div class="row text-center">
                                <div class="col-xs-4">
                                    <div>
                                        <p>Numéro</p>
                                        <h3>{{$joueur->numero}}</h3>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div>
                                            <p>Genre</p>
                                            <h3>{{$joueur->genre->type}}</h3>
                                        </div>
                                        <div>
                                            <p>Poste</p>
                                            <h3>{{$joueur->role->nom}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div>
                                        <p>Equipe</p>
                                        <h3>{{$joueur->equipe->nom}}</h3>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="d-flex w-100 justify-content-center">
                                        <a class="btn shadow-none fs-2  show"
                                            href={{ route("joueur.show", $joueur->id) }}><i class="fas fa-eye"></i></a>
                                        <a class="btn edit mx-1 shadow-none fs-2"
                                            href={{ route("joueur.edit", $joueur->id) }}><i
                                                class="fas fa-user-edit"></i></a>
                                        <form action={{ route("joueur.destroy", $joueur->id) }} method="post">
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
            {{-- <div class="paginate">{{ $joueurs->links() }}</div> --}}
    </div>
    </div>
    </div>
    </div>
</main>
@endsection