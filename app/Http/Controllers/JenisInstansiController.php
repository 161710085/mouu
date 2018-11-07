<?php

namespace App\Http\Controllers;

use App\jenis_instansi;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\DataTables;

use Illuminate\Http\Request;
use Session;
class JenisInstansiController extends Controller
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
   $jenis_instansi = jenis_instansi::select(['id', 'name',]);
    return Datatables::of($jenis_instansi)
            ->addColumn('action', function ($jenis_instansi) {  
                return view('datatable._action', [
                'model'=> $jenis_instansi,
                'form_url'=> route('jenisinstansi.destroy', $jenis_instansi->id),
                'edit_url' => route('jenisinstansi.edit',$jenis_instansi->id),
                'confirm_message' => 'Yakin mau menghapus ' .$jenis_instansi->name . '?'

            ]);
            })->make(true);
}
$html = $builder
    ->addColumn(['data' => 'name', 'name'=>'name','title'=>'Jenis Instansi'])

    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false,
                 'searchable'=>false]);
return view('jenis_instansi.index', compact('html'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis_instansi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|']);
        $jenis_instansi = jenis_instansi::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $jenis_instansi->name"
            ]);
        return redirect()->route('jenisinstansi.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jenis_instansi  $jenis_instansi
     * @return \Illuminate\Http\Response
     */
    public function show(jenis_instansi $jenis_instansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jenis_instansi  $jenis_instansi
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $jenis_instansi = jenis_instansi::find($id);
return view('jenis_instansi.edit')->with(compact('jenis_instansi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jenis_instansi  $jenis_instansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, ['name' => 'required|unique:jenis_instansis,name,'. $id,
        'status' => 'required|unique:jenis_instansis,status,'. $id]);
$jenis_instansi = jenis_instansi::find($id);
$jenis_instansi->update($request->only('name'));

Session::flash("flash_notification", [
"level"=>"success",
"message"=>"Berhasil menyimpan $jenis_instansi->name"
]);
return redirect()->route('jenisinstansi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jenis_instansi  $jenis_instansi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        jenis_instansi::destroy($id);
Session::flash("flash_notification", [
"level"=>"success",
"message"=>"Jenis Instansi berhasil dihapus"
]);
return redirect()->route('jenisinstansi.index');
    }
}
    