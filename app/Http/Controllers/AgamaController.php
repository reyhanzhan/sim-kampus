<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agama = DB::table('agama')->get();
        // dd($agama);
        return view('crudAgama.index', ['agama' => $agama]);
    }

    public function tampil()
    {
        $agama = DB::table('agama')->get();
        // dd($agama);
        return view('crudAgama.index', ['agama' => $agama]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudAgama.tambah');
        // $agama = DB::table('agama')->get();
        // // dd($agama);
        // return view('crudAgama.tambah', ['agama' => $agama]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'kodeAgama' => 'required',
            'namaAgama' => 'required|min:3',
        ]);

        // tambah
        DB::table('agama')->insert([
            'id' => $request->input('kodeAgama'),
            'nama_agama' => $request->input('namaAgama'),
        ]);

        return redirect('/agama');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($id);
        $agama = DB::table('agama')->find($id);
        return view('crudAgama.detail', ['agama' => $agama]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         // dd($id);
         $agama = DB::table('agama')->find($id);
         return view('crudAgama.edit', ['agama' => $agama]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        // validasi
        $request->validate([
            'kodeAgama' => 'required',
            'namaAgama' => 'required|min:3'
        ]);
        // update
        DB::table('agama')
            ->where('id', $id)
            ->update(
                [
                    'id' => $request->input('kodeAgama'),
                    'nama_agama' => $request->input('namaAgama'),
                ]
            );

        return redirect('/agama');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('agama')->where('id', $id)->delete();

        return redirect('/agama');
    }
}
=======
use PDF;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use App\Models\Religion;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class AgamaController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Agama::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Agama::paginate(5);
           
            Session::put('halaman_url', request()->fullUrl());
        }

        
        return view('datapegawai',compact('data'));
    }

    public function tambahpegawai(){
        $dataagama = Religion::all();
        return view('tambahdata',compact('dataagama'));
    }

    public function insertdata(Request $request){
        //dd($request->all());
        $this->validate($request,[
                'nama' => 'required|min:7|max:20',
                'notelpon' => 'required|min:11|max:12',
         ]);

        $data = Employee::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pegawai')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        
        $data = Employee::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Agama::find($id);
        $data->update($request->all());
        if(session('halaman_url')){
            return Redirect(session('halaman_url'))->with('success',' Data Berhasil Di Update');
        }

        return redirect()->route('pegawai')->with('success',' Data Berhasil Di Update');

    }

    public function delete($id){
        $data = Agama::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success',' Data Berhasil Di Hapus');
    }

    public function exportpdf(){
        $data = Agama::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('datapegawai-pdf');
        return $pdf->download('data.pdf');
    }

    public function exportexcel(){
        return Excel::download(new AgamaExport, 'datapegawai.xlsx');
    }

    public function importexcel(Request $request){
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('EmployeeData', $namafile);

        Excel::import(new AgamaImport, \public_path('/AgamaData/'.$namafile));
        return \redirect()->back();
    }
}
>>>>>>> origin/dev_andyegh
