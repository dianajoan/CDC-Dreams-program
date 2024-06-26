<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Str;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner=Banner::orderBy('id','ASC')->paginate(57);
        return view('backend.banner.index')->with('banners',$banner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required|max:100',
            'subtitle'=>'string|required|max:100',
            'photo'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'status'=>'required|in:active,inactive',
            'button'=>'string|required|max:100',
            'link'=>'string|required|max:100',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=Banner::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $data['title'] = $request->get('title');
        $data['subtitle'] = $request->get('subtitle');
        $data['status'] = $request->get('status');
        $data['button'] = $request->get('button');
        $data['link'] = $request->get('link');
        // return $slug;
        $path = $request->file('photo')->store('public/images');
        $data['photo'] = $path; 
        $status=Banner::create($data);
        if($status){
            request()->session()->flash('success','Slider successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding slider');
        }
        return redirect()->route('banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner=Banner::findOrFail($id);
        return view('backend.banner.edit')->with('banner',$banner);
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
        $banner = Banner::findOrFail($id);

        $this->validate($request, [
            'title' => 'string|required|max:100',
            'subtitle' => 'string|required|max:100',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
            'button' => 'string|required|max:100',
            'link' => 'string|required|max:100',
        ]);

        $data = $request->all();
        $data['title'] = $request->get('title');
        $data['subtitle'] = $request->get('subtitle');
        $data['status'] = $request->get('status');
        $data['button'] = $request->get('button');
        $data['link'] = $request->get('link');

        // Handle photo update
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        } else {
            unset($data['photo']); // Remove the 'photo' key if it is not provided in the request
        }

        $status = $banner->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'Slider successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating slider');
        }

        return redirect()->route('banner.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner=Banner::findOrFail($id);
        $status=$banner->delete();
        if($status){
            request()->session()->flash('success','Slider successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting slider');
        }
        return redirect()->route('banner.index');
    }
}
