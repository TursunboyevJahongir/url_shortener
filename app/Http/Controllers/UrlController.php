<?php

namespace App\Http\Controllers;

use App\Models\UrlShort;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index(Request $request ,$short = '')
    {
        if (!empty($short)) {
            $url = UrlShort::where('short', $short)->first();
            if ($url === null) {
                return abort(404);
            }

            return redirect($url->url);
        }
        $links = UrlShort::orderBy('created_at','desc')->get();

        return view('/index', compact('links','request'));
    }

    public function shortener(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            ]);
        $url = UrlShort::where('url', $request->url)->first();

        if (is_null($url)) {
            $short = UrlShort::generetShortUrl();
            $url = UrlShort::create([
                'url' => $request->url,
                'short' => $short
            ]);
        }
            
        
        return redirect()->back()->with(['message'=> '', 'short' => $url->short]);
    }
}
