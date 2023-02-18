
@extends("layouts.master")

@section("contenu")
    <section class="liste_etu">
        <H3>Ajout d'un nouvel etudiant</H3>

        <div>
            @if(session()->has("success"))
              <h3 class="msg_success"> {{ session()->get('success') }}</h3>  
            @endif
        </div>
        <ul class="erreur">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>

        <form class="form" action="{{route('etudiant.add')}}"  method="POST" enctype="multipart/form-data" autocomplete="off" >
        @csrf
            <div class="inputs">
                <label class="form-group has-error" for="">Nom : </label><input class="form-control " type="text" name="nom" placeholder="Entrez votre nom" ><br>
                <label class="form-group has-error" for="">Prénom : </label><input class="form-control" type="text" name="prenom" placeholder="Entre votre prénom" ><br>
                <label class="form-group has-error" for="">Classe </label>
                <Select class="form-control" name="classe_id">
                    <option value="">Selectionner une classe</option>
                    @foreach($classes as $classe)
                        <option  value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                    @endforeach
                </Select>
                
            </div>
            <button class="btn btn-primary btn_ajouter" type="submit" name="submit" >Ajouter</button>
            <a class="btn btn-danger" href="{{route('etudiant')}}" >Annuler</a>
            
        </form>
    </section>
@endsection