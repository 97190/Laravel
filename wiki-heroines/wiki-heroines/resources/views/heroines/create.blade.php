@extends('layout')
@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-lg-7 mx-auto">
      <div class="bg-white rounded-lg shadow-sm p-5">
        <div class="tab-content">
          <div id="nav-tab-card" class="tab-pane fade show active">
            <h3> Ajouter une héroine</h3>
            <!-- Message d'information -->
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
                @endif

            <!-- Formulaire -->
            <form method="POST"action="{{ route('heroines.store') }}" >
              @csrf
              <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control">
              </div>
              <div class="form-group">
                <label>Genre</label>
                <input type="text" name="genre" class="form-control">
              </div> 
              <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control">
              </div> 
              <div class="form-group">
                <label>Pouvoir</label>
                <input type="text" name="pouvoir" class="form-control">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label><span class="hidden-xs">Année</span></label>
                    <div class="input-group">
                      <input type="number" name="année" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary  rounded-pill shadow-sm"> Ajouter une héroine </button>
            </form>
            <!-- Fin du formulaire -->
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
