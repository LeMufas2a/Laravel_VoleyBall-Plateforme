@extends('layout.app')

@section('content')
@include('partials.nav')
<main>
    @foreach ($equipes as $equipe)

    <div class="col-4">
        <div class="profile-card-6"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-6.jpg"
                class="img img-responsive">
            <div class="profile-name">{{$equipe->nom}}
                <br>{{$equipe->ville}} in {{$equipe->pays}}</div>
            <div class="profile-position">Lorem Ipsum Donor</div>
            <div class="profile-overview">
                <div class="profile-overview">
                    <div class="row text-center">
                        <div class="col-xs-4">
                            <div>
                                <h3>{{$equipe->max}}/7</h3>
                                <p>Joueurs</p>
                            </div>
                        </div>
                        <div class="col-xs-4">
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
    </div>
    @endforeach
    </div>
    </div>
</main>
@endsection

{{-- <h1 class="text-center my-5">equipes</h1>
<div class="w-100 d-flex justify-content-between">
    <a class="btn btn-success" href={{ route("equipe.create") }}>Create</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($equipes as $equipe)
        <tr>
            <th scope="row">{{ $equipe->id }}</th>
            <td>{{ $equipe->nom }}</td>
            <td>{{ $equipe->description }}</td>
            <td>
                <div class="d-flex">
                    <a class="btn text-white mx-1 btn-warning" href={{ route("equipe.show", $equipe->id) }}>Show</a>
                    <a class="btn text-white mx-1 btn-primary" href={{ route("equipe.edit", $equipe->id) }}>Edit</a>
                    <form action={{ route("equipe.destroy", $equipe->id) }} method="post">
                        @csrf
                        @method("delete")
                        <button class="btn text-white mx-1 btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="container">
    <div class="row"> --}}