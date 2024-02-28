@include('admin.dashboard.navdash')

            <form class="row g-3" method="post" action="{{ route('addVoiture.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Marque</label>
                  @error('marque')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="text" class="form-control" id="inputName5" name="marque">
                </div>
                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Modele</label>
                  @error('modele')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="text" class="form-control" id="inputAddres5s" name="modele">
                </div>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label"> image Voiture</label>
                  @error('imgV')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="file" class="form-control" id="inputName5" name="imgV">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Couleur</label>
                  @error('couleur')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="text" class="form-control" id="inputName5"  name="couleur">
                </div>
                <!-- <div class="col-md-4">
                  <label for="inputCity" class="form-label">nombre de place</label>
                  @error('nb_place')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="number" class="form-control" id="inputCity"  name="nb_place" >
                </div> -->
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">nombre de Voiture</label>
                  @error('nb_voiture')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="number" class="form-control" id="inputCity"  name="nb_voiture">
                </div>

                <!-- <div class="col-md-4">
                  <label for="inputCity" class="form-label">Disponibilite</label>
                  <input type="number" name="dispo" id="" class="form-control" id="inputCity" >
                  <!-- <select id="inputState" class="form-select" name="dispo">
                    <option selected value="1">1</option>
                    <option>0</option>
                  </select> -->


                <!-- </div>  -->
               
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">tarif par jour</label>
                  @error('tarif')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  <input type="number" class="form-control" id="inputCity"  name="tarif">
                </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>




@include('admin.dashboard.footerdash')