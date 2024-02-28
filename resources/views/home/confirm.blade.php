@include('home.navbar')
<section class="section-padding bg-light-white">
  <div class="container">
    <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
      Votre Reservation Est Validee
    </div>
    <div class="d-grid gap-2 mt-3">
     <a href="{{route('home.home')}}" >
    <button class="btn btn-danger" type="button" >ok</button>
</a>
    </div>
    
</section>



