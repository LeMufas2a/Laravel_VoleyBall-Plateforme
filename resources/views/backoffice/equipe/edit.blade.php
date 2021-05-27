@extends('layout.app')

@section('content')
@include('partials.nav')
<main>
    <div class="container w-100  text-white">
        <h1 class="text-center my-5">Edit Equipes</h1>

        <form class=" d-flex w-100 justify-content-around pt-5" action={{ route('equipe.update', $equipe->id) }}
            method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="w-25">
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" value="{{$equipe->nom}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Continent</label>
                    <select name="continent_id" class="form-control">
                        <option value="{{$equipe->continent->id}}">{{$equipe->continent->nom}}</option>
                        @foreach ($continents as $continent)
                        <option value="{{$continent->id}}">{{$continent->nom}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pays</label>
                    <input type="text" class="form-control" name="pays" value="{{$equipe->pays}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Ville</label>
                    <input type="text" class="form-control" name="ville" value="{{$equipe->ville}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombre de joueur : </label>
                    <select name="max" class="form-control">
                        <option value="{{$equipe->max}}">{{$equipe->max}}/7</option>
                        <option value="1">1/7</option>
                        <option value="2">2/7</option>
                        <option value="3">3/7</option>
                        <option value="4">4/7</option>
                        <option value="5">5/7</option>
                        <option value="6">6/7</option>
                        <option value="7">7/7</option>
                    </select>
                </div>
            </div>

            <div class="w-25">
                <div class="mb-3">
                    <label class="form-label">ATT</label>
                    <select name="ATT" class="form-control">
                        <option value="{{$equipe->ATT}}">{{$equipe->ATT}}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">CT</label>
                    <select name="CT" class="form-control">
                        <option value="{{$equipe->CT}}">{{$equipe->CT}}</option>
                        <option value="1">1</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">DC</label>
                    <select name="DC" class="form-control">
                        <option value="{{$equipe->DC}}">{{$equipe->DC}}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">RP</label>
                    <select name="RP" class="form-control">
                        <option value="{{$equipe->RP}}">{{$equipe->RP}}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>


                <button type="submit" class="btn validate fs-1 shadow none" style="margin-top: 20px"><i
                        class="fas fa-check"></i></button>
            </div>
        </form>
    </div>
</main>
@endsection