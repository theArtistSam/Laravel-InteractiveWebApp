<?php

namespace App\Models;

class WallpaperModel {

     public $userName;
     public $userProfileImage;
     public $userInstagramLink;
     public $imageUrl;
     public $title;
     public $description;
     public $totalLikes;
     public $wallpaperColor;
     public $dimension;    
     public $dateAdded;
     public $downloadLink;

    //  Constructor to initialize properties directly
     public function __construct(
         $userName = null,
         $userProfileImage = null,
         $userInstagramLink = null,
         $imageUrl = null,
         $title = null,
         $description = null,
         $totalLikes = null,
         $wallpaperColor = null,
         $dimension = null,
         $dateAdded = null,
         $downloadLink = null,
     ) {
         $this->userName = $userName ?? '';
         $this->userProfileImage = $userProfileImage ?? '';
         $this->userInstagramLink = $userInstagramLink ?? '';
         $this->imageUrl = $imageUrl ?? '';
         $this->title = $title ?? '';
         $this->description = $description ?? '';
         $this->totalLikes = $totalLikes ?? '';
         $this->wallpaperColor = $wallpaperColor ?? '';
         $this->dimension = $dimension ?? '';
         $this->dateAdded = $dateAdded ?? '';
         $this->downloadLink = $downloadLink ?? '';        
     }
    
}

