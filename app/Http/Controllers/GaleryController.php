<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Galery;
use DataTables;
use Image;

class GaleryController extends Controller
{
    public function dataTable(){
        $data = Galery::query();
        return DataTables::of($data)
        ->addColumn('action', function($data){
            return view('layouts.action', [
                'model' => $data,
                'url_show' => route('galery.show', $data->id),
                'url_edit' => route('galery.edit', $data->id),
                'url_destroy' => route('galery.destroy', $data->id),
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

        return view('admin.galery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'galeri' => 'required',
            'galeri.*' => 'image|mimes:jpg,png,jpeg,gif,svg,|max:2048',
        ]);

        $data = new Galery();
        $data->title = $request->title;
        $slug = $data->title;
        if($request->file('galeri')){
            $foto = $request->file('galeri');
            $filename = str_slug($slug) . '.' . $foto->getClientOriginalExtension();
            $location = public_path('/storage/uploads/galeri/' .$filename);
            Image::make($foto)->resize(800, 400)->save($location);
            $data->galeri = $filename;
        }
        // if($request->hasFile('galeri'))
        // {
        //     foreach($request->file('galeri') as $image)
        //     {
        //         $filename = $image->getClientOriginalName();
        //         $location = public_path('/storage/uploads/' .$filename);
        //         Image::make($image)->resize(800, 400)->save($location);
        //         $data[] = $filename;
        //     }
        // }

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
    public function show($id)
    {
        $galeri = Galery::findOrFail($id);
        return view('admin.galery.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galery::findOrFail($id);
        return view('admin.galery.edit', compact('galeri'));
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
        // $this->validate($request, [
        //     'galeri' => 'required',
        //     'galeri.*' => 'image|mimes:jpg,png,jpeg,gif,svg,|max:2048',
        // ]);

        $data = Galery::findOrFail($id);
        $data->title = $request->title;
        $slug = $data->title;
        if($request->file('galeri')){
            $foto = $request->file('galeri');
            $filename = str_slug($slug) . '.' . $foto->getClientOriginalExtension();
            $location = public_path('/storage/uploads/galeri/' .$filename);
            Image::make($foto)->resize(800, 400)->save($location);
            $data->galeri = $filename;
        }

        if(!$data->save()){
            App::abort(500, 'Error');
        }else{
            return redirect()->back()->with('message','Data Berhasil Diupdate');
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
        $model = Galery::findOrFail($id);
        $model->delete();
    }
}
