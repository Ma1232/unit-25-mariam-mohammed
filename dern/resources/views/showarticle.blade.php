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

            title
            </th>

        <th>
            content
        </th>





        </thead>
@foreach ($article as $articles)




@endforeach

<tbody>

    <tr>

<td>{{$articles->title}}</td>
<td>{{$articles->content}}</td>



    </tr>
</tbody>

</table>
            </div>
        </div>
    </div>

</body>
</html>
