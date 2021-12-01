<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function show($id)
    {
        $video = Video::find($id);
        return view('videos.show', [
            'video' => $video
        ]);
    }
}
