<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
           $search = $request->get('search');
        $jobs = Job::where('JobName', 'like', "%{$search}%")->paginate();

       return view('jobs',['job'=>$jobs]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tickets= Ticket::all();
        return view('addjobs',['ticket'=> $tickets]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {

        // return($request->JobName);
        Job::create([
            'TicketID'=>$request->ticket_id,
            'JobName'=>$request->jobname,

            'status'=>$request->status,
            'scheduled_at'=>$request->scheduled_at
        ]);
        return redirect('jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        $jobs=Job::where('id',$job->id)->get();
        return view('showjobs',['job'=>$jobs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {

$tickets=Ticket::all();
        return view('editJob',['job'=>$job,'ticket'=>$tickets]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {



        $request->validate([
            'JobName'=>'required|string',
            'TicketID' => 'required|exists:tickets,id',
            'scheduled_at' => 'required|date',
            'status' => 'required|string',
        ]);

     Job::where('id',$job->id)->update([
            'id'=>$job->id,
            'TicketID'=>$request->ticket_id,
            'JobName'=>$request->jobname,

            'status'=>$request->status,
            'scheduled_at'=>$request->scheduled_at
     ]);
     return redirect('jobs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
         Job::where('id',$job->id)->delete();
       return redirect('jobs');

    }
}
