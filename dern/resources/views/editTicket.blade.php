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

@foreach ($ticket as $tickets )

@endforeach
<div class="container">
    <div class="row py-5">
        <div class="col-md-5 m-auto">
<form class=" p-5 mt-5 text-white" method="POST" action="{{route('tickets.update',$tickets)}}">
    @method('PUT')
@csrf

<div class="form-group">
    <label for="customer">customer</label>
    <Div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>

        <select class="form-control" name="customer_id">

@foreach ($customer as $customers)

<option value="{{$customers->id}}">
    {{$customers->name}}

</option>

@endforeach

</select>



    </Div>



<div class="form-group">
<label for="desc">ticket description</label>

<textarea type="text" name="desc" id="desc" class="form-control" required></textarea>
</div>


</div>
<div class="form-group">
<label for="status">password</label>
<div class="input-group">
<span class="input-group-text"><i class="fa-solid fa-lock"></i></span>

<select class="form-control" name="status"><option>Open</option>

    <option>Closed</option>
    </select>

</div>
</div>
<div class="form-group">
    <label for="created_at"></label>
    <div class="input-group">
    <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
        <input type="datetime-local" name="created_at" id="created_at" class="form-control" required>
    </div>
    </div>
<div class="form-group py-4 text-center ">

<input class="btn btn-success form-control" type="submit" value="Create">
</div>
</form>
        </div>
    </div>
</div>
</body>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
</html>
