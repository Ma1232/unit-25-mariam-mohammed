<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    {{-- @extends('layout.navbar') --}}
    @extends('layouts.app')
    @section('main')
<Div class="container">
    <div class="row py-3">
        <div class="col">
            <form method="GET" action="{{ route('customers.index') }}" class="form-inline mb-3">
                <input type="search" name="search" class="form-control mr-2 mb-2" placeholder="Search customers">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-md-7 col-sm-9 m-auto">

<a class="btn btn-primary mb-3" href="{{route('customers.create')}}">add new customer</a>

@foreach ($Customer as $Customers)

<ul class="list-group">


    <li>

        <a class="list-group-item btn" href="{{route('customers.show',$Customers->id)}}"> {{$Customers->name}}</a>


        </li>

</ul>



@endforeach


{{$Customer->links()}}
        </div>
</div>


</Div>

@endsection
</body>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"> </script>
</html>
