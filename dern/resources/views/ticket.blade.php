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
    @extends('layouts.app')
    @section('main')
<Div class="container">
    <div class="row py-3">
        <div class="col">
            <form method="GET" action="{{ route('tickets.index') }}" class="form-inline mb-3">
                <input type="search" name="search" class="form-control mr-2 mb-2" placeholder="Search tickets">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-md-7 col-sm-9 m-auto">
<a class="btn btn-primary mb-3" href="{{route('tickets.create')}}">add new ticket</a>

@foreach ($Ticket as $Tickets)

<ul class="list-group">


    <li>

        <a class="list-group-item btn" href="{{route('tickets.show',$Tickets->id)}}"> {{$Tickets->IssueDescription}}</a>


        </li>

</ul>



@endforeach
{{$Ticket->links()}}
        </div>
</div>


</Div>

@endsection
</body>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"> </script>
</html>
