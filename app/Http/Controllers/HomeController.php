<?php

namespace App\Http\Controllers;
use App\Models\WallpaperModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function getAPIData(){
        $API_KEY = "YOUR_API_KEY";
        $apiUrl = "https://api.unsplash.com/photos/?client_id=".$API_KEY."&per_page=100";
                
        // Variables for image URLs and potential error handling
        $allImages = [];
        $error = null;
        $orderByValue = '';

        $tempUrl = $apiUrl;
        if ($orderByValue) {
            $tempUrl .= '&order_by=' . $orderByValue;
        }

        try {
            $response = file_get_contents($tempUrl);
            $myJson = json_decode($response, true);

            $imageArrays = $myJson;
            foreach ($myJson as $element) {
                // public $userName;
                // public $userProfileImage;
                // public $userInstagramLink;
                // public $title;
                // public $description;
                // public $totalViews;
                // public $dimension;            
                // public $dateAdded;
                // public $downloadLink;
                $originalDate = $element['created_at'];
                $formattedDate = date("d-m-Y", strtotime($originalDate));

                $allImages[] = new WallpaperModel(
                    $element['user']['name'],  
                    $element['user']['profile_image']['small'],
                    $element['user']['instagram_username'],
                    $element['urls']['small'],
                    $element['alt_description'], // title
                    $element['description'], // description
                    $element['likes'], // likes
                    $element['color'], // color
                    $element['width']."x".$element['height'],
                    $formattedDate,
                    $element['links']['download'],  
                );
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
        
        return view('Home', ['allImages' => $allImages]);
    
    }

    public function getSearchData(Request $request)
    {
        try {
            $inputData = $request->input('inputData');
    
            $API_KEY = "YOUR_API_KEY";
            $searchUrl = "https://api.unsplash.com/search/photos/?client_id=" . $API_KEY . "&query=" . $inputData;
    
            // Variables for image URLs and potential error handling
            $allImages = [];
            $error = null;
            $orderByValue = '';
    
            $tempUrl = $searchUrl;
            if ($orderByValue) {
                $tempUrl .= '&order_by=' . $orderByValue;
            }
    
            try {
                $response = file_get_contents($tempUrl);
                $myJson = json_decode($response, true);
    
                foreach ($myJson['results'] as $element) {
                    $originalDate = $element['created_at'];
                    $formattedDate = date("d-m-Y", strtotime($originalDate));
    
                    $allImages[] = new WallpaperModel(
                        $element['user']['name'],
                        $element['user']['profile_image']['small'],
                        $element['user']['instagram_username'],
                        $element['urls']['small'],
                        $element['alt_description'], // title
                        $element['description'], // description
                        $element['likes'], // likes
                        $element['color'], // color
                        $element['width'] . "x" . $element['height'],
                        $formattedDate,
                        $element['links']['download'],
                    );
                }
            } catch (Exception $e) {
                $error = $e->getMessage();
            }
            
            // Store index with in the session
            // $request->session()->put('allImages', $allImages);
            
            return response()->json(['success' => true, 'allImages' => $allImages]);
            
            // // Return the view and JSON response
            return view('Home', ['allImages' => $allImages]);
            //     ->with('jsonData', json_encode(['success' => true, 'allImages' => $allImages]));
        
            } 
            catch (\Exception $e) {
            // Log the exception for further investigation
            \Log::error($e->getMessage());
    
            // Return an error response
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    function openImageClicked(Request $request){
        try {
            $index = $request->input('index');        
            
            // Store index with in the session
            $request->session()->put('index', $index);
            
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // Log the exception for further investigation
            \Log::error($e->getMessage());
    
            // Return an error response
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
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
