<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosManageController extends Controller
{
    public static function testedBy()
    {
        return VideosManageController::class;
    }
    public function index()
    {
        return view('videos.manage.index',[
            'videos' => Video::all()
        ]);
    }

    public function store(Request $request)
    {
        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
        ]);

        session()->flash('status', 'Successfully created');

        return redirect()->route('manage.videos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Video::find($id)->delete();
        session()->flash('status', 'Successfully removed');
        return redirect()->route('manage.videos');
    }
}
