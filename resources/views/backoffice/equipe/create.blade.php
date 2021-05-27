@extends('layout.app')

@section('content')
@include('partials.nav')
<main>
    <div class="container w-100  text-white">
        <h1 class="text-center my-5">Create Equipes</h1>
        <ul class="w-100">
            @foreach ($errors->all() as $message)
            <li class="text-white  text-center" style="list-style: none"><i
                    class="fas fa-exclamation-triangle"></i>{{$message}}</li>
            @endforeach
        </ul>
        <form class=" d-flex w-100 justify-content-around pt-5" action={{ route('equipe.store') }} method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="w-25">
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom">
                </div>

                <div class="mb-3">
                    <label class="form-label">Continent</label>
                    <select name="continent_id" class="form-control">
                        @foreach ($continents as $continent)
                        <option value="{{$continent->nom}}">{{$continent->nom}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pays</label>
                    <input type="text" class="form-control" name="pays">
                </div>

                <div class="mb-3">
                    <label class="form-label">Ville</label>
                    <input type="text" class="form-control" name="ville">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombre de joueur : </label>
                    <select name="max" class="form-control">
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
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>


                <button type="submit" class="btn validate fs-1" style="margin-top: 20px"><i
                        class="fas fa-check"></i></button>
            </div>
        </form>
    </div>
</main>
@endsection