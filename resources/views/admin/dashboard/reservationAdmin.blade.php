@include('admin.dashboard.navdash')
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Tableau des Reservations</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                  <th>id_Reservation</th>
                  <th>nom client</th>
                  <th>prenom client</th>
                    <th>Telephone</th>
                    <th>Marque voiture</th>
                    <th>Modele voiture</th>
                    <th>Date Debut</th>
                    <th>Date_Fin</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                  <tr>
                    <th scope="row">{{$reservation->id}}</th>
                    <td>{{ $reservation->client->nom }}</td>
                    <td>{{ $reservation->client->prenom }}</td>
                    <td>{{ $reservation->client->numtelephone }}</td>
                    <td>{{ $reservation->voiture->marque }}</td>
                    <td>{{ $reservation->voiture->modele }}</td>
                    <td>{{$reservation->dateDebut}}</td>
                    <td>{{$reservation->dateRetour}}</td>
                    <td>{{$reservation->total}}</td>
                    <td>
                            <a href="/deleteReservation/{{ $reservation->id }}" class="btn btn-danger">supprimer</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

@include('admin.dashboard.footerdash')