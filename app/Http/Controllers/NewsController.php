<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'treePlanted' => 'required|integer',
            'region' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('title', 'treePlanted', 'region', 'content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }

        News::create($data);

        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }
    // public function index()
    // {
    //     return News::all();
    // }
}