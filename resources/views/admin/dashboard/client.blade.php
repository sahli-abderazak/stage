@include('admin.dashboard.navdash')
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Tableau des Clients</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                  <th>id_client</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                 <th>NumTel</th>
                    <th>Date_Naissance</th>
                    <th>Date_Permis</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                  <tr>
                    <th scope="row">{{$client->id}}</th>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->numtelephone}}</td>
                    <td>{{$client->date_naissance}}</td>
                    <td>{{$client->date_permis}}</td>
                    <td>{{$client->email}}</td>
                    <td>
                    <a href="/updateclient/{{ $client->id }}" class="btn btn-info">Modifier</a>
                    <a href="/deleteClient/{{ $client->id }}" class="btn btn-danger">supprimer</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

@include('admin.dashboard.footerdash')