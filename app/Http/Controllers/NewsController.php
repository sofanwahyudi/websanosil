<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News;
use Image;
use Alert;
use Session;
use DataTables;

class NewsController extends Controller
{
    public function dataTable(){
        $data = News::query();
        return DataTables::of($data)
        ->addColumn('waktu', function($model) {
            return $model->created_at->diffForHumans();
        })
        ->addColumn('action', function($data){
            return view('layouts.action', [
                'model' => $data,
                'url_show' => url('news', $data->id),
                'url_edit' => route('news.edit', $data->id),
                'url_destroy' => route('news.destroy', $data->id),
            ]);
    })
    ->addIndexColumn()
    ->rawColumns(['action','waktu'])
        ->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::all();
        return view('admin.news.index')->withData($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new News();
        return view('admin.news.create')->withModel($model);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->title, $request->subtitle, $request->description, $request->images);
       $this->validate($request,[
        'title' => 'required|string|min:10',
        ]);
       
        $data = new News();
        $data->title = $request->title;
        $data->slug = str_slug($data->title);
        $slug = $data->slug;
        $data->subtitle = $request->subtitle;
        $data->description = $request->description;
        if($request->file('image')){
            $image = $request->file('image');
            $filename = str_slug($slug) . '.' . $image->getClientOriginalExtension();
            $location = public_path('/storage/uploads/' .$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $data->image = $filename;
        }
        $data->save();

        return redirect()->back()->with('message','Data Berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
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
        $request->validate([
     //       'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
//       dd($request->image);
       $data = News::findOrFail($id);
       $data->title = $request->title;
       $data->slug = str_slug($data->title);
       $slug = $data->slug;
       $data->subtitle = $request->subtitle;
       $data->description = $request->description;
       if($request->file('image')){
           $image = $request->file('image');
           $filename = str_slug($slug) . '.' . $image->getClientOriginalExtension();
           $location = public_path('/storage/uploads/' .$filename);
           Image::make($image)->resize(800, 400)->save($location);
           $data->image = $filename;
       }
       $data->save();

       return redirect()->back()->with('message','Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = News::findOrFail($id);
        $model->delete();
    }
}
