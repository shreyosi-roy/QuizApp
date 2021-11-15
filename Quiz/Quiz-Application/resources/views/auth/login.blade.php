<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quiz Application</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/mystyle.css">

</head>

<body>
  <div class="d-md-flex h-md-100 align-items-center">

    <!--  Left Panel  -->
    <div class="col-md-6 p-0 bg-indigo h-md-100">
      <div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
        <div class="logoarea pt-5 pb-5">
          <center><img id="l-img" src="assets/img/landing-image.jpg"></center>
        </div>
      </div>
    </div>

    <!-- Right Panel -->
    <div class="col-md-6 p-0 bg-white h-md-100 loginarea">
      <div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
        <form class="mx-1 mx-md-4" method="POST" action="{{ route('login-submit')}}">
        @csrf

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" value="{{ old('email')}}" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
            <span class="text-danger">@error('email'){{"email Cannot be Blank"}} @enderror</span>

          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input  type="password" autocomplete="new-password" value="{{ old('password')}}" name="password"  id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>

          </div>



          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/registration" class="link-danger">Register</a></p>
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