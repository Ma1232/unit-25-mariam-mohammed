

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
            <th>name</th>

            <th>

            email
            </th>

        <th>
password

        </th>
        <th>created at</th>

        <th colspan="2">action</th>
<th></th>



        </thead>
@foreach ($customer as $customers)
@endforeach

<tbody>

    <tr>

        <td>{{$customers->name}}</td>
        
        <td>{{$customers->email}}</td>

<td>{{$customers->password}}</td>
<td>{{$customers->created_at}}</td>

<td><a href="{{route('customers.edit',$customers)}}" class="btn btn-primary">edit</a></td>
<td><form method="POST" action="{{route('customers.destroy',$customers)}}">
        @method('DELETE')
        @csrf
<input class="btn btn-primary"  type="submit" value="delete">

</td>

    </tr>
</tbody>

</table>
            </div>
        </div>
    </div>

</body>
</html>
