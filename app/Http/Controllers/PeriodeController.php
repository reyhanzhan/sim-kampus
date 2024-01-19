<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgamaController extends Controller
{
    public function index()
    {
        $periode = Periode::all();
        return view("periode", ['periode' => $periode]);
    }

    public function add()
    {
        return view('add-periode');
    }

    public function store(Request $request)
    {
        $periode = Periode::create($request->all());
        return redirect('periode')->with('status', 'Periode berhasil ditambahkan');
    }

    public function edit($slug)
    {
        $periode = Periode::where('slug', $slug)->first();
        return view('edit-periode', ['periode' => $periode]);
    }

    public function update(Request $request, $slug)
    {
        $periode = Periode::where('slug',$slug)->first();
        $periode->slug = null;
        $periode->update($request->all());  
        return redirect('periode')->with('status', 'Periode Updated Successful');      
    }

    public function delete($slug)
    {
        $periode = Periode::where('slug',$slug)->first();
        return view('delete-periode', ['periode' => $periode]);

        $periode = Periode::where('slug',$slug)->first();
        $periode->delete();
        return redirect('periode')->with('status', 'Periode Deleted Successful');  
    }

    public function destroy($slug)
    {
        $periode = Periode::where('slug',$slug)->first();
        $periode->delete();
        return redirect('periode')->with('status', 'Periode berhasil dihapus');  
    }
}
