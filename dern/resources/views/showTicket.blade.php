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
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 m-auto">
    <table class="table">

        <thead>
<th>
    ticket
</th>
            <th>

            customer
            </th>

        <th>
            description
        </th>
        <th>status</th>
        <th>created at</th>

        <th>action</th>




        </thead>
@foreach ($ticket as $tickets)




@endforeach

<tbody>

    <tr>
<td>{{$tickets->id}}</td>

<td>{{$tickets->CustomerID}}</td>
<td>{{$tickets->IssueDescription}}</td>
<td>{{$tickets->status}}</td>
<td>{{$tickets->created_at}}</td>
<td><a href="{{route('tickets.edit',$tickets->id)}}" class="btn btn-primary">edit</a></td>
<td>
    <form method="POST" action="{{route('tickets.destroy',$tickets)}}">
        @method('DELETE')
        @csrf
<input class="btn btn-primary" type="submit" value="delete">

</td>

    </tr>
</tbody>

</table>
            </div>
        </div>
    </div>

</body>
</html>
