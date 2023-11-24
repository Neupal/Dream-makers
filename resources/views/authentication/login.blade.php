<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentication</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <h4>Login</h4>
        <hr>
        <form action="{{route('login-user')}}" method="post">
        @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif

          @if(Session::has('fail'))
          <div class="alert alert-success">{{Session::get('fail')}}</div>
          @endif
          @csrf
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter email">
            <span class="text-danger">@error('email') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="Enter password">
            <span class="text-danger">@error('password') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <button class="btn btn-block btn-primary" type="submit">Login</button>
          </div>
          <br>
          
          <a href="register">New User !! Register Here.</a>
        </form>
      </div>
    </div>
  </div>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</html>