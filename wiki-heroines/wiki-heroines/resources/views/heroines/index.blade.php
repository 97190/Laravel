@extends('layout')
@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <div class="bg-white rounded-lg shadow-sm p-5">
        <div class="tab-content">
          <div id="nav-tab-card" class="tab-pane fade show active">
            <h3>Liste des produits</h3>
            <!-- Tableau -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Description</th>
                  <th scope="col">Prix</th>
                  <th scope="col">Quantité</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Chemise</td>
                  <td>100% coton</td>
                  <td>30€</td>
                  <td>1000</td>
                  <td>
                    <a href="" class="btn btn-primary btn-sm"">Editer</a>
                    <a href="" class="btn btn-danger btn-sm"">Supprimer</a>
                  </td>
                </tr>
               
              </tbody>
            </table>
            <!-- Fin du Tableau -->
          </div>
      </div>
    </div>
  </div>
</div>
@endsection