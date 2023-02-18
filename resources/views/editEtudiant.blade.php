
@extends("layouts.master")

@section("contenu")
<section class="liste_etu">
    <H3>Editer un nouvel etudiant</H3>

    <div>
        @if(session()->has("success"))
            <h4 class="msg_success">{{ session()->get('success') }}</h4>
        @endif
    </div>
    <ul class="erreur">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    </ul>

    <form action="{{route('etudiant.update', ['etudiant'=>$etudiant->id])}}"  method="post" enctype="multipart/form-data" autocomplete="off" >
    @csrf
    <input type="hidden" name="" value="put">
        <div class="inputs">
            <label class="form-group has-error" for="">Nom : </label><input  class="form-control " type="text" name="nom" placeholder="Entrez votre nom" value="{{$etudiant->nom}}" ><br>
            <label class="form-group has-error" for="">Prénom : </label><input  class="form-control " type="text" name="prenom" placeholder="Entrez votre prénom" value="{{$etudiant->prenom}}"><br>
            <label class="form-group has-error" for="">Classe : </label>
            <Select  class="form-control " name="classe_id">
                <option value=""></option>
                @foreach($classes as $classe)
                @if($classe->id == $etudiant->classe_id)
                <option value="{{ $classe->id }}" selected>{{ $classe->libelle }}</option>
                @else
                <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                @endif
                @endforeach
            </Select>

        </div>
        <div class="field button">
            <button class="btn btn-primary btn_ajouter" type="submit" name="submit">Enrégistre</button>
            <a class="btn btn-danger" href="{{route('etudiant')}}" >Annuler</a>
        </div>
    </form>
</section>

@endsection
