@include('home.navbar')
<div class="section-padding contact-form-map">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="section-header style-left">
          <div class="section-heading">
            <h3 class="text-custom-black">Sign In</h3>
            @error('login')
                 <div class="text-danger">{{$message}}</div>
             @enderror
            <div class="section-description">
              <p class="text-light-dark">Partie ADMIN</p>
            </div>
          </div>
        </div>
        <form class="mb-md-80" method="post" action="{{route('signinstore')}}">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <input type="email" name="login" class="form-control form-control-custom" placeholder="Email I'd" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <input type="password" name="password" class="form-control form-control-custom" placeholder="password" required="">

              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
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
@include('home.footer')