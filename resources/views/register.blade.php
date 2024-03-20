@extends('app')
@section('content')
<section class="vh-100" style="background-color: #531573;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
          
<div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="Knowledge.jpg" alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;">
          </div>


            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form method="POST" action="{{ route('register') }}" class="mt-3">
                  @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">  QUIZEEE</span>
                  </div>

                  <div class="mb-3">
                    <label for="profile_picture" class="form-label">Profile Picture</label>
                    <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                  </div>

                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>

                  <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                  </div>

                  <div class="d-grid">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">REGISTER</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="#!"
                      style="color: #393f81;">Login here</a></p>
               
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
