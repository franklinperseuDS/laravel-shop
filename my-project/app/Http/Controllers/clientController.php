<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Clients;
class clientController extends Controller
{
   
    protected $model;

    public function __construct(Clients $clients)
    {
        $this->model = $clients;    
    }

    public function index()
    {
        $clients = $this->model::all();
        // dd($clients);
        return view('clients.index',compact('clients'));

        // return response()->json($clients);
    }

    public function getById(Request $request)
    {
        $clients = $this->model::find($request->id);

       return view('clients.clientsEdit')->with('client', $clients);
        // return $client ? response()->json($client) : abort(404);
    }
    public function stores(Request $request)
    {
        
        return $request->name;
    }
    public function store(Request $request)
    {
        // dd($request);
        $this->model::create([
            'nomecliente' => $request->nomecliente,
            'cpf' =>$request->cpf,
            'email' =>$request->email
            // 'password' => $request->password,
        ]);
        $clients = $this->model::all();
        // dd($clients);
        return view('clients.index',compact('clients'));
        // return view('clients.index');
    }

    public function edit(Request $request, $id)
    {
        if(!$clients = $this->model::find($id))
        {
            return redirect()->route('clients.index');
        }

        // $data = $request->all();
        return view('clients.edit',compact('clients'));


    }

    public function update(Request $request, $id)
    {
        // dd($id);
        if(!$clients = $this->model::find($id))
        {
            return redirect()->route('clients.index');
        }
       
        
        // dd($request);
        $clients->update($request->all());
        return redirect()->route('clients.index');
    }

    public function create()
    {
        return view('clients.create');
    }
}
