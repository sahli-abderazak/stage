@include('home.navbar')
<div class="slider p-relative">
    <div class="main-banner arrow-layout-1 ">
      <div class="slide-item"> <img src="assets/images/car-1.jpg" class="image-fit" alt="Slider">
        <div class="transform-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <div class="slider-content">
                  <h1 class="text-custom-white">Jusqu'à 25% de réduction sur la première réservation<span class="text-custom-blue">Voiture</span> 
via votre application !</h1>
                  <ul class="custom">
                    <li class="text-custom-white"> <i class="fas fa-dollar-sign"></i>Meilleur prix garanti </li>
                    <li class="text-custom-white"> <i class="fas fa-car"></i> Ramassage à domicile </li>
                    <li class="text-custom-white"> <i class="fas fa-laptop"></i> Réservations faciles </li>
                    <li class="text-custom-white"> <i class="fas fa-headphones-alt"></i>Service client 24h/24 et 7j/7  </li>
                  </ul>
                  <a href="{{route('vehicule')}}" class="btn-first btn-small">En savoir plus</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="slide-item"> <img src="assets/images/car-1.jpg" class="image-fit" alt="Slider">
        <div class="transform-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <div class="slider-content">
                  <h1 class="text-custom-white">Réservez votre <span class="text-custom-blue">Voiture</span> via votre application !</h1>
                  <p class="text-custom-white"></p>

                  <a href="{{route('vehicule')}}" class="btn-first btn-small">En savoir plus</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
                      <div class="banner-tabs">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="tabs">
            <div class="tab-content">
              <div class="tab-pane active" id="cars">
                <div class="tab-inner">
                  <form method="get" action="{{route('listevoiture.filter')}}">
                    @csrf
                    <div class="row">
                      <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-white fw-600">Lieu de Prise en charge</label>
                          <input type="text" name="lieu_prise" class="form-control form-control-custom" placeholder="ville,airport">
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <label class="fs-14 text-custom-white fw-600">Date de prise</label>
                              <div class="input-group group-form">
                                <input type="date" name="dateDebut" placeholder="mm/dd/yy" >
                                <!-- <span class="input-group-append"> <i class="far fa-calendar"></i> </span>  -->
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <label class="fs-14 text-custom-white fw-600">Date De Retour</label>
                              <div class="input-group group-form">
                                <input type="date" name="dateRetour"  placeholder="dd/mm/yy" >
                                <!-- <span class="input-group-append"> <i class="far fa-calendar"></i> </span>  -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                          <label class="fs-14 text-custom-white fw-600">Lieu Restituion</label>
                          <input type="text" name="lieu_rest" class="form-control form-control-custom" placeholder="ville,airport">
                        </div>
                        <div class="row">
                          
                        <div class="col-12">
                            <div class="form-group">
                              <label class="submit"></label>
                              <button class="btn-first btn-submit full-width btn-height">Rechercher</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-12">
                        <div class="row">
                          
                          
                         
                          <div class="col-6">
                            <!-- <div class="form-group">
                              <label class="fs-14 text-custom-white fw-600">Car Type</label>
                              <div class="group-form">
                                <select class="custom-select form-control form-control-custom">
                                  <option>Economy</option>
                                  <option>Compact</option>
                                </select>
                              </div>
                            </div> -->
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Recommended Cars -->
  <section class="section-padding car-booking">
    <div class="container">
      <div class="section-header text-center">
        <div class="section-heading">
          <h3 class="text-custom-black">Voitures  <span class="text-custom-blue">recommandées</span></h3>
          <div class="section-description">
            <p class="text-light-dark"></p>
          </div>
        </div>
      </div>
      <div class="row">
     
        <div class="col-12">
         
          <div class="car-slider arrow-layout-2 row">
          @foreach ($voitureRecemende as $voiture)
            <div class="slide-item col-12">
              <div class="car-grid">
                <div class="car-grid-wrapper car-grid bx-wrapper">
                  <div class="image-sec animate-img"> <a href="car-detail.html"> <img src="{{asset('storage/'.$voiture->imgV)}}" class="full-width" alt="img"> </a> </div>
                  <div class="car-grid-caption padding-20 bg-custom-white p-relative">
                    <h4 class="title fs-16"><a href="car-detail.html" class="text-custom-black">{{$voiture->marque}}<small class="text-light-dark">{{$voiture->modele}}</small></a></h4>
                    <span class="price"><small>A partir</small>{{$voiture->tarif}} TND</span>
                    <div class="action">  <a class="btn-first btn-submit yellow" href="{{route('reservation',$voiture->id)}}">Reserver</a> </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      
      </div>
    </div>
  </section>
  
  <!-- End Our Team -->
  <!-- Start Why choose Us -->
  <section class="section-padding why-choose-testimonials">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12">
          <div class="why-choose-box">
            <div class="section-header text-center ">
              <div class="section-heading">
                <h3 class="text-custom-black">Pourquoi <span class="text-custom-blue"> nous choisir</span></h3>
                <div class="section-description">
                  <p class="text-light-dark">Notre agence est une agence de location voiture Tunisie depuis 2007, assurant un service sérieux et de qualité sur tous les aéroports tunisiens : location voiture aéroport Tunis Carthage, Enfidha, Monastir, Sfax et Djerba afin de garantir une livraison rapide de votre voiture de location dés votre arrivée en Tunisie</p>
                </div>
              </div>
            </div>
            <div class="why-choose-wrapper">
              <div class="why-choose-img p-relative">
                <div class="row clearfix">
                  <div class="col-6">
                    <div class="choose-item animate-img"> <img src="assets/images/services.png" alt="img" class="full-width">
                      <div class="text-wrapper">
                        <h4 class="text-custom-white">Service personnalisé</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="choose-item animate-img"> <img src="assets/images/support.png" alt="img" class="full-width">
                      <div class="text-wrapper">
                        <h4 class="text-custom-white">24/7 Support</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="choose-item animate-img"> <img src="assets/images/best-price.jpg" alt="img" class="full-width">
                      <div class="text-wrapper">
                        <h4 class="text-custom-white">Meilleur prix</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="choose-item animate-img"> <img src="assets/images/company.png" alt="img" class="full-width">
                      <div class="text-wrapper">
                        <h4 class="text-custom-white">Entreprise de confiance</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 

  
@include('home.footer')