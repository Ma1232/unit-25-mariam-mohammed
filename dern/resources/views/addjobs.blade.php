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
<form class=" p-5 mt-5 text-white" method="POST" action="{{route('jobs.store')}}">
@csrf


<div class="form-group">
    <label for="jobname">Job Name</label>

    <input type="text" class="form-control" name="jobname" id="JobName">




</div>


<div class="form-group">
    <label for="ticket">ticket</label>
    <Div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-ticket"></i></span>

        <select name="ticket_id">

@foreach ($ticket as $tickets)

<option value="{{$tickets->id}}">
    {{$tickets->IssueDescription}}

</option>

@endforeach

</select>



    </Div>


    <div class="form-group">
        <label for="status">status</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>

        <select class="form-control" name="status"><option>Scheduled</option>

            <option>Completed</option>
            </select>

        </div>


</div>


</div>

<div class="form-group">
    <label for="scheduled_at">date for jobs</label>
    <div class="input-group">
    <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
        <input type="datetime-local" name="scheduled_at" id="scheduled_at" class="form-control" required>
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
