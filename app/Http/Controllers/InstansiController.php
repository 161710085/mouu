<?php

namespace App\Http\Controllers;

use App\instansi;
use App\jenis_instansi;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\DataTables;
use Session;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */public function __construct()
     {
        $this->middleware('auth');
    }
    
    public function index(Request $request, Builder $builder)
{ if ($request->ajax()) {
    $instansi = instansi::with('jenis_instansi');
    // $instansi = instansi::select(['id','namainstansi','alamat','kota','provinsi','kodepos',
    // 'namapimpinan','jabatan','nope','email','web','fax']);
    return Datatables::of($instansi)
            ->addColumn('action', function ($instansi) {  
                return view('datatable._action', [
                'model'=> $instansi,
                'form_url'=> route('instansi.destroy', $instansi->id),
                'edit_url' => route('instansi.edit',$instansi->id),
                'confirm_message' => 'Yakin mau menghapus ' .$instansi->name . '?'

            ]);
            })->make(true);
}
$html = $builder
    ->addColumn(['data' => 'namainstansi', 'name'=>'namainstansi','title'=>'Nama Instansi'])
    ->addColumn(['data' => 'jenis_instansi.name', 'name'=>'jenis_instansi.name', 'title'=>'Jenis'])
    ->addColumn(['data' => 'alamat', 'name'=>'alamat','title'=>'Alamat'])
    ->addColumn(['data' => 'kota', 'name'=>'kota','title'=>'Kota'])
    ->addColumn(['data' => 'provinsi', 'name'=>'provinsi','title'=>'Provinsi'])
    ->addColumn(['data' => 'kodepos', 'name'=>'kodepos','title'=>'Kode Pos'])
    ->addColumn(['data' => 'namapimpinan', 'name'=>'namapimpinan','title'=>'Nama Pimpinan'])
    ->addColumn(['data' => 'jabatan', 'name'=>'jabatan','title'=>'Jabatan'])
    ->addColumn(['data' => 'nope', 'name'=>'nope','title'=>'No Telepon'])
    ->addColumn(['data' => 'email', 'name'=>'email','title'=>'Email'])
    ->addColumn(['data' => 'web', 'name'=>'web','title'=>'Web'])
    ->addColumn(['data' => 'fax', 'name'=>'fax','title'=>'Fax'])
    ->addColumn(['data' => 'status', 'name'=>'status','title'=>'Status'])
    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false,
                 'searchable'=>false]);
return view('instansi.index', compact('html'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instansi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['namainstansi' => 'required|',
 'jenis_instansi_id' => 'required|exists:jenis_instansis,id',
        'alamat' => 'required|',
        'kota' => 'required|',
        'provinsi' => 'required|',
        'kodepos' => 'required|numeric',
        'namapimpinan' => 'required|',
        'jabatan' => 'required|',
        'nope' => 'required|',
        'email' => 'required|',
        'web' => 'required|',
        'fax' => 'required|',
        'status' => 'required|'

        ]);
        $instansi = instansi::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $instansi->name"
            ]);
        return redirect()->route('instansi.index');
        
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function show(instansi $instansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        
        $instansi = instansi::findOrFail($id);
        $jenis_instansi = jenis_instansi::all();
        $jenis_instansiselect = jenis_instansi::findOrFail($id)->jenis_instansi_id;
        return view('instansi.edit')->with(compact('instansi','jenis_instansi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, ['namainstansi' => 'required',
        'jenis_instansi_id' => 'required',
        'alamat' => 'required',
        'kota' => 'required',
        'provinsi' => 'required',
        'kodepos' => 'required',
        'namapimpinan' => 'required',
        'jabatan' => 'required',
        'nope' => 'required',
        'email' => 'required',
        'web' => 'required',
        'fax' => 'required',
        'status' => 'required',]);
        $instansi = instansi::find($id);
        $instansi->update($request->all());
Session::flash("flash_notification", [
"level"=>"success",
"message"=>"Berhasil menyimpan $instansi->name"
]);
return redirect()->route('instansi.index');
    
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        instansi::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>" Instansi berhasil dihapus"
        ]);
        return redirect()->route('instansi.index');
                
    }
}
