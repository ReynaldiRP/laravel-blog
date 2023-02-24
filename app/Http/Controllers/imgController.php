<?php

namespace App\Http\Controllers;

use App\Models\artikelModel;
use Illuminate\Http\Request;

class imgController extends Controller
{
    public function store(Request $request)
    {
        $article = new artikelModel();
        $article->title = $request->input('title');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);
            $article->image = $filename;
        }

        $article->save();

        return redirect('/articles')->with('success', 'Article created');
    }
}
