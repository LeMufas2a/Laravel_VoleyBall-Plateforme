@extends('layout.app')

@section('content')
@include('partials.nav')
<main>
    <div class="container w-25 text-white">
        <h1 class="text-center my-5">Create Equipes</h1>
        <form action={{ route('equipe.store') }} method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Ville</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Pays</label>
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
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">equipe</label>
                <select name="equipe_id" class="form-control">



                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>
@endsection