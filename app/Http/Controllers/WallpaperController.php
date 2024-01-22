<?php

namespace App\Http\Controllers;
// namespace App\Models;

use App\Models\WallpaperModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallpaper;
use Illuminate\Support\Facades\DB;
class WallpaperController extends Controller
{
    function profileView(){
        // $allWallpapers = Wallpaper::all();
        $allWallpapers = DB::select('SELECT * FROM wallpapers Join users');
        $allImages = [];
        foreach ($allWallpapers as $element) {
            // Access object properties using -> instead of []
            $allImages[] = new WallpaperModel(
                $element->name,
                $element->profilePictureAddress,
                $element->email,
                $element->imageAddress,
                $element->title, // title
                $element->description, // description
                $element->totalLikes, // likes
                $element->colorCode, // color
                $element->dimmension,
                $element->date,
                $element->imageAddress
            );
        }
        // echo $element -> imageAddress;
        return view('profile', ['allImages' => $allImages]);
    }
}

// class WallpaperModel {

//     public $userName;
//     public $userProfileImage;
//     public $userInstagramLink;
//     public $imageUrl;
//     public $title;
//     public $description;
//     public $totalLikes;
//     public $wallpaperColor;
//     public $dimension;    
//     public $dateAdded;
//     public $downloadLink;

//     // Constructor to initialize properties directly
//     public function __construct(
//         $userName = null,
//         $userProfileImage = null,
//         $userInstagramLink = null,
//         $imageUrl = null,
//         $title = null,
//         $description = null,
//         $totalLikes = null,
//         $wallpaperColor = null,
//         $dimension = null,
//         $dateAdded = null,
//         $downloadLink = null,
//     ) {
//         $this->userName = $userName ?? '';
//         $this->userProfileImage = $userProfileImage ?? '';
//         $this->userInstagramLink = $userInstagramLink ?? '';
//         $this->imageUrl = $imageUrl ?? '';
//         $this->title = $title ?? '';
//         $this->description = $description ?? '';
//         $this->totalLikes = $totalLikes ?? '';
//         $this->wallpaperColor = $wallpaperColor ?? '';
//         $this->dimension = $dimension ?? '';
//         $this->dateAdded = $dateAdded ?? '';
//         $this->downloadLink = $downloadLink ?? '';        
//     }
    
// }

