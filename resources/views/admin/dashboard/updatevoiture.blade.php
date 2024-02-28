@include('admin.dashboard.navdash')

            <form class="row g-3" method="post" action="/updatevoiture/traitement" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $voiture->id }}">
                <h1>Modifier Une Voiture</h1>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Marque</label>
                  @error('marque')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="text" class="form-control" id="inputName5" name="marque" value="{{$voiture->marque}}"
                </div>
                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Modele</label>
                  @error('modele')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="text" class="form-control" id="inputAddres5s" name="modele" value="{{$voiture->modele}}">
                </div>
                <!-- <div class="col-md-12">
                  <label for="inputName5" class="form-label"> image Voiture</label>
                  @error('imgV')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="file" class="form-control" id="inputName5" name="imgV" value="{{$voiture->imgV}}">
                </div> -->
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Couleur</label>
                  @error('couleur')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="text" class="form-control" id="inputName5"  name="couleur" value="{{$voiture->couleur}}">
                </div>
                <!-- <div class="col-md-4">
                  <label for="inputCity" class="form-label">nombre de place</label>
                  @error('nb_place')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="number" class="form-control" id="inputCity"  name="nb_place" value="{{$voiture->nb_place}}">
                </div> -->
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">nombre de Voiture</label>
                  @error('nb_voiture')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="number" class="form-control" id="inputCity"  name="nb_voiture" value="{{$voiture->nb_voiture}}">
                </div>

                <!-- <div class="col-md-4">
                  <label for="inputCity" class="form-label">Disponibilite</label>
                  <input type="number" name="dispo" id="" class="form-control" id="inputCity" value="{{$voiture->dispo}}">
               <select id="inputState" class="form-select" name="dispo">
                    <option selected value="1">1</option>
                    <option>0</option>
                  </select> --> 


                <!-- </div> -->
               
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">tarif par jour</label>
                  @error('tarif')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="number" class="form-control" id="inputCity"  name="tarif" value="{{$voiture->tarif}}">
                </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Modifier</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>




@include('admin.dashboard.footerdash')