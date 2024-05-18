<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Customer;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $tickets = Ticket::where('IssueDescription', 'like', "%{$search}%")->paginate();


        return view('ticket',['Ticket'=>$tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 $customers= Customer::all();
$tickets=Ticket::all();
        return view('addTicket',['customer'=>$customers,'ticket'=>$tickets]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
try {
    Ticket::create([
        'CustomerID'=>$request->customer_id,
        'IssueDescription'=>$request->desc,
        'status'=>$request->status

      ]);} catch (\Exception $th) {
 throw $th;
}

return redirect('tickets');
// return ($request);


    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        // return($ticket);
        $tickets=Ticket::where('id',$ticket->id)->get();
        // return($ticket);
        return view('showTicket',['ticket'=>$tickets]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        $Customers=Customer::all();
        $tickets=Ticket::where("id",$ticket->id)->get();
        return view('editTicket',['customer'=>$Customers,'ticket'=>$tickets]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        Ticket::where('id',$ticket->id)->update([
            'id'=>$ticket->id,
            'CustomerID'=>$request->customer_id,

            'IssueDescription'=>$request->desc,
            'status'=>$request->status,
            'created_at'=>$request->created_at,
            'updated_at'=>now()
        ]);
        return redirect('tickets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        Ticket::where('id',$ticket->id)->delete();
        return redirect('tickets');
    }
}
