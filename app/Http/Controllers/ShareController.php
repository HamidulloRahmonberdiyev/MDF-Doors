<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function share()
    {
        $share = \Share::page(
            'https://rahmonberdiyev.uz/',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp();
        
        return view('frontend.products.show')->with([
            'share' => $share,
        ]);
    }
}
