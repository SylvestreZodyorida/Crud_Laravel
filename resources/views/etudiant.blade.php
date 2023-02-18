
@extends("layouts.master")

@section("contenu")
    


<!--nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form---->





   <section class="liste_etu">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                azerty
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>



        <div>
            @if(session()->has("successDelete"))
                <h4 class="msg_success">{{ session()->get('successDelete') }}</h4>
            @endif
        </div>
        <h3>Liste des étudiants</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"># &nbsp; </th>
                    <th scope="col">Nom &nbsp; </th>
                    <th scope="col">Prénom &nbsp; </th>
                    <th scope="col">Classe &nbsp; </th>
                    <th scope="col">Action &nbsp; </th>
                </tr>
            </thead>
            <tbody>
                @foreach($etudiants as  $etudiant)
                <tr>
                    <th scope="row">{{ $loop->index + 1}} </th>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->classe->libelle }}</td>
                    <td>
                        <a class="btn btn-warning btn-block" href="{{ route('etudiant.edit', ['etudiant'=>$etudiant->id]) }}">Editer</a>
                        <a class="btn btn-primary" href="#" onclick="if(confirm('Confirmer la suppression ?')){document.getElementById('form-{{$etudiant->id}}').submit() }">Supprimer</a>
                    </td>
                    <form id="form-{{$etudiant->id}}" action="{{route('etudiant.delete', ['etudiant'=>$etudiant->id])}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                    </form>
                </tr>
                @endforeach
            </tbody>
            {{ $etudiants->links() }} 
        </table>
    <a class="btn btn-primary aj_etu" href="{{route('etudiant.create')}}">Ajouter un nouvel etudiant</a>
   </section>
@endsection