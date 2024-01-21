<?php

namespace App\Http\Controllers;

use id;
use App\Models\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    public function index(){
        $agama = Agama::all();
        return view('agama.index',compact(['agama']));
    }

    public function create()
    {
        return view('agama.create');
    }

    public function store(Request $request)
    {
        Agama::create($request->except(['_token','submit']));
        return redirect('/agama');
        
    }

    public function edit($id)
    {
        $agama = Agama::find($id);
        return view('agama.edit',compact(['agama']));
    }

    public function update($id, Request $request)
    {
        $agama = Agama::find($id);
        $agama->update($request->except(['_token','submit']));
        return redirect('/agama');
    }

    public function destroy($id)
    {
        $agama = Agama::find($id);
        $agama->delete();
        return redirect('/agama');
    }
}
