@include('home.navbar')
<div class="section-padding contact-form-map">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="section-header style-left">
          <div class="section-heading">
            <h3 class="text-custom-black">Ajouter Un Autre Admin</h3>
            <div class="section-description">
            </div>
          </div>
        </div>
        <form class="mb-md-80" method="post" action="{{ route('signupstore')}}">
            @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="nom" class="form-control form-control-custom" placeholder="Name" required="">
                @error('nom')
                <div class="text-danger">{{$message}}</div>
                @enderror  
            </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="prenom" class="form-control form-control-custom" placeholder="prenom" required="">
                @error('prenom')
                <div class="text-danger">{{$message}}</div>
                @enderror 
            </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="login" class="form-control form-control-custom" placeholder="Email I'd" required="">
                @error('login')
                <div class="text-danger">{{$message}}</div>
                @enderror   
            </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="password" name="password" class="form-control form-control-custom" placeholder="password" required="">
                @error('password')
                <div class="text-danger">{{$message}}</div>
                @enderror   
            </div>
            </div>
            
            <div class="col-md-12">
              <button type="submit" class="btn-first btn-submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
