@include('admin.dashboard.navdash')
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Tableau des Voitures</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                  <th>id</th>
                    <th>marque</th>
                    <th>modele</th>
                 <th>tarif</th>
                    <th>nombre de voiture</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($voitures as $voiture)
                  <tr>
                    <th scope="row">{{$voiture->id}}</th>
                    <td>{{$voiture->marque}}</td>
                    <td>{{$voiture->modele}}</td>
                    <td>{{$voiture->tarif}}</td>
                    <td>{{$voiture->nb_voiture}}</td>
                    <td>
                            <a href="/updatevoiture/{{ $voiture->id }}" class="btn btn-info">Modifier</a>
                            <a href="/deletevoiture/{{ $voiture->id }}" class="btn btn-danger">supprimer</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

@include('admin.dashboard.footerdash')