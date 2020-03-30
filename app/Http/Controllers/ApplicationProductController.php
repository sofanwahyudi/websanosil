<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\KatApp;
use DataTables;
use Image;

class ApplicationProductController extends Controller
{
    public function dataTable(){
        $data = KatApp::query();
        return DataTables::of($data)
        ->addColumn('kategori', function($data){
            return $data->kategori['nama_kategori'];
    })
    ->addColumn('action', function($data){
        return view('layouts.action', [
            'model' => $data,
            'url_show' => route('application.show', $data->id_app),
            'url_edit' => route('application.edit', $data->id_app),
            'url_destroy' => route('application.destroy', $data->id_app),
        ]);
    })
    ->addIndexColumn()
    ->rawColumns(['action'])
        ->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('kategori_application')->paginate(10);
       
        return view('admin.application.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.application.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(
        //     $request->nama_app, 
        //     $request->logo_app, 
        //     $request->kategori_id,
        // );

        $data = new KatApp();
        $data->nama_app = $request->nama_app;
        $slug = $data->nama_app;
        $data->kategori_id = $request->kategori_id;

        if($request->file('logo_app')){
            $logo = $request->file('logo_app');
            $filename = str_slug($slug) . '.' . $logo->getClientOriginalExtension();
            $location = public_path('/uploads/application/' .$filename);
            Image::make($logo)->resize(800, 400)->save($location);
            $data->logo_app = $filename;
        }

        if(!$data->save()){
            App::abort(500, 'Error');
        }else{
            return redirect()->back()->with('message','Data Berhasil Disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_app)
    {
        $app = KatApp::findOrFail($id_app);
        return view('admin.application.view')->withApp($app);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_app
     * @return \Illuminate\Http\Response
     */
    public function edit($id_app)
    {
        $app = KatApp::findOrFail($id_app);
        return view('admin.application.edit')->withApp($app);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = KatApp::findOrFail($id);
        $data->nama_app = $request->nama_app;
        $slug = $data->nama_app;
        $data->slug = str_slug($slug);
        $data->kategori_id = $request->kategori_id;

        if($request->file('logo_app')){
            $logo = $request->file('logo_app');
            $filename = str_slug($slug) . '.' . $logo->getClientOriginalExtension();
            $location = public_path('/uploads/application/' .$filename);
            Image::make($logo)->resize(800, 400)->save($location);
            $data->logo_app = $filename;
        }

        if(!$data->save()){
            App::abort(500, 'Error');
        }else{
            return redirect()->back()->with('message','Data Berhasil DiUpdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = KatApp::findOrFail($id);
        $model->delete();
    }
}
