
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <title>Document</title>
</head>
<body class="bg-dark">


    <div class="container">
        <div class="row py-5">
            <div class="col-md-5 m-auto">
    <form class=" p-5 mt-5 text-white" method="POST" action="{{route('customers.store')}}">
    @csrf
   
    <div class="form-group">
    <label for="email">email</label>
    <Div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
        <input type="email" name="email" id="email" class="form-control" required>
    </Div>
    
    </div>
    <div class="form-group">
    <label for="password">password</label>
    <div class="input-group">
    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    </div>
    <div class="form-group py-4 text-center ">
    <input class="btn btn-success form-control" type="submit" value="Login">
    {{-- <a href="{{ route('password.request') }}" class="btn btn-link">Forgot Password</a> --}}
    <a href="register" class="btn btn-link">Register</a>
    </div>
    </form>
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
</body>
</html>