<?php

namespace App\Http\Controllers;
// namespace App\Models;
use App\Models\WallpaperModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    
    function displayWallpaper(
        string $title, 
        string $description,
        string $imageUrl,
        string $dimension,    
        string $dateAdded,
        string $downloadLink
    ){
        return view('edit', [
            'title' => $title, 
            'description' => $description,
            'imageUrl' => $imageUrl,
            'dimension' => $dimension,    
            'dateAdded' => $dateAdded,
            'downloadLink' => $downloadLink
        ]);
    }
}
