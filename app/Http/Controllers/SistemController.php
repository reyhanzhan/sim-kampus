<?php

namespace App\Http\Controllers;

use App\Models\sistem;
use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
class Group extends Model{}


class SistemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $agama = DB::table('agama')->get();
        // return view('sistem.index',['agama'=>$agama]);
        $sistem = DB::table('sistem')->get();
        return view('sistem.index', ['sistem' => $sistem]);
    }

    public function tampil()
    {
        $sistem = DB::table('sistem')->get();
        // dd($agama);
        return view('sistem.index', ['sistem' => $sistem]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sistem.tambah');
        // $sistem = DB::table('sistem')->get();
        // return view('sistem.index', ['sistem' => $sistem]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'sistemmhs' => 'required',
            'namasistem' => 'required|min:3',
        ]);

        // tambah
        DB::table('sistem')->insert([
            'id' => $request->input('sistemmhs'),
            'namasistem' => $request->input('namasistem'),
        ]);

        return redirect('/sistem');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($sistemmhs);
        $sistem = DB::table('sistem')->find($id);
        return view('sistem.detail', ['sistem' => $sistem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $sistem = DB::table('sistem')->find($id);
        return view('sistem.edit', ['sistem' => $sistem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        // validasi
        $request->validate([
            'sistemmhs' => 'required',
            'namasistem' => 'required|min:3'
        ]);
        // update
        DB::table('sistem')
            ->where('id', $id)
            ->update(
                [
                    'id' => $request->input('sistemmhs'),
                    'namasistem' => $request->input('namasistem'),
                ]
            );

        return redirect('/sistem');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('sistem')->where('id', $id)->delete();

        return redirect('/sistem');
    }
}