<?php

namespace App\Http\Controllers;

use App\mou;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\DataTables;
use Session;
class MouController extends Controller
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
   $mou = mou::select(['id', 'jenismou','moulevel','pjk','nopjk','pji','nopji',
   'pejabatpenandatangan','mulai','berakhir','manfaat','kerjasama']);
    return Datatables::of($mou)
            ->addColumn('action', function ($mou) {  
                return view('datatable._action', [
                'model'=> $mou,
                'form_url'=> route('mou.destroy', $mou->id),
                'edit_url' => route('mou.edit',$mou->id),
                'confirm_message' => 'Yakin mau menghapus ' .$mou->name . '?'

            ]);
            })->make(true);
}
$html = $builder
    ->addColumn(['data' => 'jenismou', 'name'=>'jenismou','title'=>'Jenis Mou'])
    ->addColumn(['data' => 'moulevel', 'name'=>'moulevel','title'=>'Mou Level'])
    ->addColumn(['data' => 'pjk', 'name'=>'pjk','title'=>'Penanggung Jawab Kampus'])
    ->addColumn(['data' => 'nopjk', 'name'=>'nopjk','title'=>'No Hp Penanggung Jawab Kampus'])
    ->addColumn(['data' => 'pji', 'name'=>'pji','title'=>'Penanggung Jawab Instansi'])
    ->addColumn(['data' => 'nopji', 'name'=>'nopji','title'=>'No Hp Penanggung Jawab Instansi'])
    ->addColumn(['data' => 'pejabatpenandatangan', 'name'=>'pejabatpenandatangan','title'=>'Pejabat Penandatangan'])
    ->addColumn(['data' => 'mulai', 'name'=>'mulai','title'=>'Mulai'])
    ->addColumn(['data' => 'berakhir', 'name'=>'berakhir','title'=>'Berakhir'])
    ->addColumn(['data' => 'manfaat', 'name'=>'manfaat','title'=>'Manfaat'])
    ->addColumn(['data' => 'kerjasama', 'name'=>'kerjasama','title'=>'Kerjasama'])
    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false,
                 'searchable'=>false]);
return view('mou.index', compact('html'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mou.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['jenismou' => 'required|',
        'moulevel' => 'required|',
        'pjk' => 'required|',
        'nopjk' => 'required|',
        'pji' => 'required|',
        'nopji' => 'required|',
        'pejabatpenandatangan' => 'required|',
        'mulai' => 'required|',
        'berakhir' => 'required|',
        'manfaat' => 'required|',
        'kerjasama' => 'required|'
        ]);
        $mou = mou::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $mou->name"
            ]);
        return redirect()->route('mou.index');
        
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mou  $mou
     * @return \Illuminate\Http\Response
     */
    public function show(mou $mou)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mou  $mou
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $mou = mou::find($id);
        return view('mou.edit')->with(compact('mou'));
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mou  $mou
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, ['jenismou' => 'required|unique:mous,jenismou,'. $id,
        'moulevel' => 'required|unique:mous,moulevel,'. $id,
        'pjk' => 'required|unique:mous,pjk,'. $id,
        'nopjk' => 'required|unique:mous,nopjk,'. $id,
        'pji' => 'required|unique:mous,pji,'. $id,
        'nopji' => 'required|unique:mous,nopji,'. $id,
        'pejabatpenandatangan' => 'required|unique:mous,pejabatpenandatangan,'. $id,
        'mulai' => 'required|unique:mous,mulai,'. $id,
        'berakhir' => 'required|unique:mous,berakhir,'. $id,
        'manfaat' => 'required|unique:mous,manfaat,'. $id,
        'kerjasama' => 'required|unique:mous,kerjasama,'. $id]);
$mou = mou::find($id);
$mou->update($request->only('jenismou'));
$mou->update($request->only('moulevel'));
$mou->update($request->only('pjk'));
$mou->update($request->only('nopjk'));
$mou->update($request->only('pji'));
$mou->update($request->only('nopji'));
$mou->update($request->only('pejabatpenandatangan'));
$mou->update($request->only('mulai'));
$mou->update($request->only('berakhir'));
$mou->update($request->only('manfaat'));
$mou->update($request->only('kerjasama'));
Session::flash("flash_notification", [
"level"=>"success",
"message"=>"Berhasil menyimpan $mou->name"
]);
return redirect()->route('mou.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mou  $mou
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        mou::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Jenis Instansi berhasil dihapus"
        ]);
        return redirect()->route('mou.index');
                 //
    }
}
