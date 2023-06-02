<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        
        $pages = config('comics_info.pages');
        $dcComics = config('comics_info.dcComics');
        $shop = config('comics_info.shop');
        $dc = config('comics_info.dc');
        $sites = config('comics_info.sites');
        $socials = config('comics_info.socials');
        $info = config('comics_info.info');

        return view('welcome', compact('comics', 'pages', 'dcComics', 'shop', 'dc', 'sites', 'socials', 'info'));
    }
}
