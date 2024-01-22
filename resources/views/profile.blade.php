<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/profile.css') }}" />   
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
   
    {{@View::make('components/navbar')}}
   
    <!-- ------------------------------------------ -->
    <!-- background Image -->
    <div id="background-image">
        <img src="../../images/default-tile-2.png" alt="">
    </div>

    <!-- Profile info -->
    <div id="profile-info">
        <!-- Profile Picture -->
        <div id="profile-picture">
            <img src="../../images/default-tile-4.png" alt="">
        </div>
        
        <div class="details">
            <!-- Personal Info -->
            <div id="personal-info">
                <h1 style="font-size: 28px; line-height: 28px;">Emily Pierson</h1>
                <p style="font-size: 16px; line-height: 0px;">@Emily_person</p>
            </div>
        
            <!-- Add New -->
            <div id="add-new">
                <button>
                    <img style="margin-right: 10px;" src="../../icons/plus.svg" alt="add">
                    Add New
                </button>
            </div>
        </div>
    </div>

    <!-- --------------------------------------------------- -->
    <!-- All users wallpapers -->
    
    <!-- Use Searched Wallpapers -->
    <!-- Use Image-Clicked -->
    
  
    <div id="all-wallpapers">
        
        <!-- Use Searched Wallpapers -->
         <!-- Use Image-Clicked -->
        
        

        <div id="wallpaper-col-1">
            @foreach ($allImages as $key => $image)
                @if ($key % 3 === 0)
                    @include('components/profile_tile_image', [
                        'image_url' => 'images/' . $image->imageUrl,
                        'title' => $image->title, 
                        'description' => $image->description,
                        'dimension' => $image->dimension,    
                        'dateAdded' => $image->dateAdded,
                        'downloadLink' => $image->downloadLink
                    ])
            
                @endif
            @endforeach
        </div>

        <div id="wallpaper-col-2">
            @foreach ($allImages as $key => $image)
                @if ($key % 3 === 1)
                     @include('components/profile_tile_image', [
                        'image_url' => 'images/' . $image->imageUrl,
                        'title' => $image->title, 
                        'description' => $image->description,
                        'dimension' => $image->dimension,    
                        'dateAdded' => $image->dateAdded,
                        'downloadLink' => $image->downloadLink
                    ])
                @endif
            @endforeach
        </div>

        <div id="wallpaper-col-3">
            @foreach ($allImages as $key => $image)
                @if ($key % 3 === 2)                    
                    @include('components/profile_tile_image', [
                        'image_url' => 'images/' . $image->imageUrl,
                        'title' => $image->title, 
                        'description' => $image->description,
                        'dimension' => $image->dimension,    
                        'dateAdded' => $image->dateAdded,
                        'downloadLink' => $image->downloadLink
                    ])
                @endif
            @endforeach
        </div>
    </div>
    
    <!-- 0-------------------- -->

    <!-- Search bar -->
    <div id="search-bar">
        <input type="text" name="title" id="title" placeholder="Search wallpapers">                
        <img onclick="closeSearchBar()" src="../../icons/cancel.svg" alt="search">
    </div>


    </body>
    <script src="{{ asset('js/profile.js') }}"></script>     
    <script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clq3cpijt001tpxb3u0btq17z"></script>    
</html>