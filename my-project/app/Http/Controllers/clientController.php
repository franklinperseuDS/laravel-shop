<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Clients;
class clientController extends Controller
{
    //

    public function showClient()
    {
        $clients = Clients::all();
        return view('clients.index')->with('clients', $clients);
        // return response()->json($clients);
    }

    public function getById(Request $request)
    {
        $client = Clients::find($request->id);

       return view('clients.clientsEdit')->with('client', $client);
        // return $client ? response()->json($client) : abort(404);
    }
    public function stores(Request $request)
    {
        // return 'fudeu-se';
        return $request->name;
    }
    public function store(Request $request)
    {
        Clients::create([
            'nomecliente' => $request->name,
            'cpf' =>$request->cpf,
            'email' =>$request->email
            // 'password' => $request->password,
        ]);
        return response()->json($request->name);
    }
    public function update(Request $request, $id)
    {
        $client = Clients::find($id);
        $input = $request->all();
        $client->update($input);
        return redirect('clients')->with('flash_message','cliente updated');
    }
}
