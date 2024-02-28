@include('home.navbar')
<section class="section-padding bg-light-white booking-form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="tabs">
          <div class="tab-content bg-custom-white bx-wrapper padding-20">
            <div class="tab-pane fade active show">
              <div class="tab-inner">
                <form method="post" action="{{route('reservation.store',$voiture)}}" id="bookingForm">
                  @csrf
                <div class="row">
                  <div class="col-lg-8">
                    <h5 class="text-custom-black">Information Personnel</h5>
                    <div class="row mb-md-80">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">Nom</label>
                          @error('nom')
                          {{$message}}
                          @enderror
                          <input type="text" name="nom" class="form-control form-control-custom" placeholder="Nom" value="{{ old('nom') }}" >

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">Prenom</label>
                          @error('prenom')
                          {{$message}}
                          @enderror
                          <input type="text" name="prenom" class="form-control form-control-custom" placeholder="Prenom" value="{{ old('prenom') }}" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">Email </label>
                          @error('email')
                          {{$message}}
                          @enderror
                          <input type="email" name="email" class="form-control form-control-custom" placeholder="Email" value="{{ old('email') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">adresse </label>
                          @error('adresse')
                          {{$message}}
                          @enderror
                          <input type="text" name="adresse" class="form-control form-control-custom" placeholder="Adresse" value="{{ old('adresse') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">Numero telephone</label>
                          @error('numtelephone')
                          {{$message}}
                          @enderror
                          <input type="telephone" name="numtelephone" class="form-control form-control-custom" placeholder="Numero telephone" value="{{ old('numtelephone') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">date de Naissance</label>
                          @error('date_naissance')
                          {{$message}}
                          @enderror
                          <input type="date" name="date_naissance" class="form-control form-control-custom "  value="{{ old('date_naissance') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">date de permis</label>
                          @error('date_permis')
                          {{$message}}
                          @enderror
                          <input type="date" name="date_permis" class="form-control form-control-custom " value="{{ old('date_permis') }}" >
                        </div>
                      </div>

                      <div class="col-12">
                        <hr>
                      </div>
                      <div class="col-12">
                        <hr class="mt-0">
                        <h5 class="text-custom-black">Date De Reservation</h5>
                      </div>
                      <div class="col-md-6">
                        
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">date de debut</label>
                          @error('dateDebut')
                          {{$message}}
                          @enderror
                          <input type="date" name="dateDebut" class="form-control form-control-custom" value="{{ old('dateDebut',Session('dateDebut')) }}" >
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">Date de Retour</label>
                          @error('dateRetour')
                          {{$message}}
                          @enderror
                          <input type="date" name="dateRetour" class="form-control form-control-custom " value="{{ old('dateRetour',Session('dateRetour')) }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">lieu prise</label>
                          @error('lieu_prise')
                          {{$message}}
                          @enderror
                          <input type="text"  class="form-control form-control-custom" placeholder="lieu_prise"  name="lieu_prise"value="{{ old('lieu_prise',Session('lieu_prise')) }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-black fw-500">lieu de retour</label>
                          @error('lieu_rest')
                          {{$message}}
                          @enderror
                          <input type="text" name="lieu_rest" class="form-control form-control-custom" placeholder="Lieu_rest" value="{{ old('lieu_rest',Session('lieu_rest')) }}">
                        </div>
                      </div>
                      <div class="col-12">
                        <hr class="mt-0">
                        <button type="submit" class="btn-first btn-submit">Confirmer</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="row">
                      <div class="col-12">
                        <div class="car-grid mb-xl-30">
                          <div class="car-grid-wrapper bx-wrapper">
                            <div class="image-sec animate-img"> <a href="#"> <img src="{{asset('storage/'.$voiture->imgV)}}" class="full-width" alt="img"> </a> </div>
                            <div class="car-grid-caption padding-20 bg-custom-white p-relative">
                              <h4 class="title fs-16"><a href="#" class="text-custom-black">{{$voiture->marque}}<small class="text-light-dark">{{$voiture->modele}}</small></a></h4>
                              <span class="price"><small>Prix/Jour</small>{{$voiture->tarif}}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="total-price-container">
                                         <h1><p>Total : <span class="total-price">0.00DNT</span></p></h1>
                      </div>
                    </div>
                  </div>
                </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to calculate and update total price
        function updateTotalPrice() {
            // Get selected dates
            var startDate = new Date($('input[name="dateDebut"]').val());
            var endDate = new Date($('input[name="dateRetour"]').val());

            // Calculate number of days
            var numberOfDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));

            // Get room prices
            var tarif = parseFloat("{{$voiture->tarif}}");


            // Calculate total price
            var totalPrice = tarif* numberOfDays;

            // Update total price in the form
            $('.total-price').text(totalPrice.toFixed(2) + 'DNT');
        }

        // Attach event listeners to date inputs and room selects
        $('input[name="dateDebut"], input[name="dateRetour"], select').change(function() {
            updateTotalPrice();
        });

        // Initial calculation on page load
        updateTotalPrice();
    });
</script>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@include('home.footer')