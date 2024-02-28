@include('admin.dashboard.navdash')

            <form class="row g-3" method="post" action="/updateclient/traitement">
                @csrf
                <input type="hidden" name="id" value="{{ $client->id }}">
                <h1>Modifier coordonne personnel</h1>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">nom</label>
                  @error('nom')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="text" class="form-control" id="inputName5" name="nom" value="{{$client->nom}}"
                </div>
                <div class="col-12">
                  <label for="inputAddress5" class="form-label">prenom</label>
                  @error('prenom')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="text" class="form-control" id="inputAddres5s" name="prenom" value="{{$client->prenom}}">
                </div>
                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Num_telephone</label>
                  @error('numtelephone')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="number" class="form-control" id="inputAddres5s" name="numtelephone" value="{{$client->numtelephone}}">
                </div>
                <div class="col-12">
                  <label for="inputAddress5" class="form-label">date Naissance</label>
                  @error('date_naissance')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="date" class="form-control" id="inputAddres5s" name="date_naissance" value="{{$client->date_naissance}}">
                </div>
                <div class="col-12">
                  <label for="inputAddress5" class="form-label">date Permis</label>
                  @error('date_permis')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="date" class="form-control" id="inputAddres5s" name="date_permis" value="{{$client->date_permis}}">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Adresse</label>
                  @error('adresse')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="text" class="form-control" id="inputName5"  name="adresse" value="{{$client->adresse}}">
                </div>
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Email</label>
                  @error('email')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="email" class="form-control" id="inputCity"  name="email" value="{{$client->email}}">
                </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Modifier</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>




@include('admin.dashboard.footerdash')