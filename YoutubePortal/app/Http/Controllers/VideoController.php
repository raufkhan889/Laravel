<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $videos = Video::where('user_id', Auth::user()->id)->get();

        return view('videos.myvideo', [
            'videos' => $videos
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('videos.upload', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'video' => 'required',
            'title' => 'required|string',
            'active' => 'required',
            'category_id' => 'required'
        ]);

        $video = $request->file('video');
        $videoName = time() . '.' . $video->getClientOriginalExtension();

        $video->move('Uploads/', $videoName);

        $videoPost = Video::create([
            'video' => $videoName,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'active' => $request->input('active'),
            'category_id' => $request->input('category_id'),
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('home')->with('message', 'Video Uploaded, Successfully!');
    }

    public function show($id)
    {
        $video = Video::find($id);

        // views count logic 
        if (Auth::check()) {
            if ($video->user_id != Auth::user()->id) {
                $video->views += 1;
                $video->update();
            }
        }
        return view('videos.show')->with('video', $video);
    }

    public function edit($id)
    {
        $video = Video::find($id);
        $categories = Category::all();
        return view('videos.edit', compact('video', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'active' => 'required',
            'category_id' => 'required'
        ]);

        $video = Video::find($id);

        if ($request->file('video')) {
            $path = 'Uploads/' . $video->video;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('video');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $video->video = $filename;
        }

        $video->title = $request->input('title');
        $video->description = $request->input('description');
        $video->active = $request->input('active');
        $video->category_id = $request->input('category_id');

        $video->save();

        return redirect()->route('home')->with('message', 'Video Updated, Successfully!');
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();

        unlink(public_path('Uploads/' . $video->video));

        return back()->with('message', 'Post Deleted, Successfully!');
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required'
        ]);

        $search = $request->input('search');

        $videos = Video::where('title', 'like', '%' . $search . '%')
            // ->orWhere('description', 'like', '%' . $search . '%')
            ->get();
        return view('videos.search', compact('videos'));
    }

    // public function downloadVid($id)
    // {
    //     $vid = Video::find($id);

    //     return response()->download(public_path('Uploads/' . $vid->video));
    // }
}
