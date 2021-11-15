
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quiz Application</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/mystyle.css">

</head>

<body>

<!-- include flash msg -->
@include('flash-message')
  <div class="d-md-flex h-md-100 align-items-center">

    <!-- left panel -->
    <div class="col-md-6 p-0 bg-indigo h-md-100">
      <div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
        <div class="logoarea pt-5 pb-5">
          <center><img id="l-img" src="assets/img/landing-image.jpg"></center>
          <center><h1>New Student can register here</h1></center>
        </div>
      </div>
    </div>

    <!-- right panel -->
    <div class="col-md-6 p-0 bg-white h-md-100 loginarea">
      <div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
        <!-- registration form -->
        <form class="mx-1 mx-md-4" method="POST" action="{{ route('register')}}">
        @csrf

          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <label class="form-label"  for="form3Example1c">Your Name</label>
            <input type="text" value="{{ old('name')}}" name="name" id="form3Example1c" class="form-control" />
              <span class="text-danger">@error('name'){{"user name cannot be blank"}} @enderror</span>
          </div>
          <input type="hidden" value="2" name="user_type" id="form3Example1c" class="form-control" />

          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
            <label class="form-label" for="form3Example3c">Your Email</label>

              <input type="email" value="{{ old('email')}}" name="email"  id="form3Example3c" class="form-control" />
              <span class="text-danger">@error('email'){{"email Cannot be Blank"}} @enderror</span>
          </div>

          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
            <label class="form-label" for="form3Example3c">Your Phone Number</label>

              <input type="text" value="{{ old('phone')}}" name="phone"  id="form3Example3c" class="form-control" />
              <span class="text-danger">@error('phone'){{"phone number Cannot be Blank"}} @enderror</span>
          </div>

          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
            <label class="form-label" for="form3Example3c">Your Address</label>

              <input type="text" value="{{ old('address')}}" name="address"  id="form3Example3c" class="form-control" />
              <span class="text-danger">@error('address'){{"address Cannot be Blank"}} @enderror</span>
          </div>

          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
            <label class="form-label"  for="form3Example4c">Password</label>

              <input type="password" value="{{ old('password')}}" name="password" autocomplete="new-password" id="form3Example4c" class="form-control" />
              <span class="text-danger">@error('password'){{ $message }} @enderror</span>
          </div>

          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
            <label class="form-label"  for="form3Example4cd">Repeat your password</label>

              <input value="{{ old('conf-password')}}" name="conf-password" type="password" id="form3Example4cd" class="form-control" />
              <span class="text-danger">@error('conf-password'){{ $message }} @enderror</span>
          </div>


          <div class="d-flex flex-row align-items-center mb-4">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;margin-right:2px">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0"> Already have an account? <a href="/" class="link-danger">Login</a></p>
          </div>


        </form>
      </div>
    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>