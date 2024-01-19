<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgamaController extends Controller
{
    public function index()
    {
        $agama = Agama::all();
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

        $agama = Agama::create($request->all());
        return redirect('agama')->with('status', 'Agama berhasil ditambahkan');
    }

    public function edit($slug)
    {
        $agama = Agama::where('slug', $slug)->first();
        return view('edit-agama', ['agama' => $agama]);
    }

    public function update(Request $request, $slug)
    {
        // $validated = $request->validate([
        //     'name' => 'required|unique:agama|max:100',
        // ]);

        $agama = Agama::where('slug',$slug)->first();
        $agama->slug = null;
        $agama->update($request->all());  
        return redirect('agama')->with('status', 'agama Updated Successful');      
    }

    public function delete($slug)
    {
        $agama = Agama::where('slug',$slug)->first();
        return view('delete-agama', ['agama' => $agama]);

        $agama = Agama::where('slug',$slug)->first();
        $agama->delete();
        return redirect('agama')->with('status', 'agama Deleted Successful');  
    }

    public function destroy($slug)
    {
        $agama = Agama::where('slug',$slug)->first();
        $agama->delete();
        return redirect('agama')->with('status', 'Agama berhasil dihapus');  
    }
}
