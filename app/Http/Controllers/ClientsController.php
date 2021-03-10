<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index',compact('clients'));
    }
    public function store()
    {
        $data = request()->validate([
            'name'=>'required|min:5',
            'age'=> 'required'
        ]);
       Client::create($data);
        return back();
    }
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }
    public function edite(Client $client)
    {
        return view('clients.edite', compact('client'));
    }
    public function update(Client $client)
    {
        $data = request()->validate([
            'name'=>'required|min:5',
            'age'=> 'required'
        ]);
        $client->update($data);
        return redirect('client/' .$client->id);
    }
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('client');
    }
}
