<?php

namespace App\Http\Controllers;

use App\Models\agamaa;
use Illuminate\Http\Request;

class agamaController extends Controller
{
    public function index()
    {
        $agama = agamaa::all();
        return view("agama", ['agama' => $agama]);
    }

    public function add()
    {
        return view('add-agama');
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'namaagama' => 'required|unique:agama|max:100',
        // ]);

        $agama = agamaa::create($request->all());
        return redirect('agama')->with('status', 'Agama berhasil ditambahkan');
    }

    public function edit($slug)
    {
        $agama = agamaa::where('slug', $slug)->first();
        return view('edit-agama', ['agama' => $agama]);
    }

    public function update(Request $request, $slug)
    {
        // $validated = $request->validate([
        //     'name' => 'required|unique:agama|max:100',
        // ]);

        $agama = agamaa::where('slug',$slug)->first();
        $agama->slug = null;
        $agama->update($request->all());  
        return redirect('agama')->with('status', 'agama Updated Successful');      
    }

    public function delete($slug)
    {
        $agama = agamaa::where('slug',$slug)->first();
        return view('delete-agama', ['agama' => $agama]);

        $agama = agamaa::where('slug',$slug)->first();
        $agama->delete();
        return redirect('agama')->with('status', 'agama Deleted Successful');  
    }

    public function destroy($slug)
    {
        $agama = agamaa::where('slug',$slug)->first();
        $agama->delete();
        return redirect('agama')->with('status', 'Agama berhasil dihapus');  
    }
}