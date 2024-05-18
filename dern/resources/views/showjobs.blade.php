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
            <th>job id</th>

            <th>

            job name
            </th>

        <th>
ticket id

        </th>
        <th>time of job</th>

        <th colspan="2">action</th>
<th></th>



        </thead>
@foreach ($job as $jobs)
@endforeach

<tbody>

    <tr>
        <td>{{$jobs->id}}</td>

        <td>{{$jobs->JobName}}</td>
        <td>{{$jobs->TicketID}}</td>

<td>{{$jobs->Scheduled}}</td>
<td><a href="{{route('jobs.edit',$jobs)}}" class="btn btn-primary">edit</a></td>
<td><form method="POST" action="{{route('jobs.destroy',$jobs)}}">
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
