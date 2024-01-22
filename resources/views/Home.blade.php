<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/Home.css') }}" />   
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
        integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
   
   {{@View::make('components/navbar')}}
   
    <!-- ---------------------------------------------- -->
    <!-- Error Grid -->
    <!-- when no images are to be fethched* -->
    <div id="error-grid"></div>
    
    <div id="all-wallpapers">
        
        <!-- Use Searched Wallpapers -->
         <!-- Use Image-Clicked -->
        

        <div id="wallpaper-col-1">
            @foreach ($allImages as $key => $image)
                @if ($key % 3 === 0)
                    @include('components/tile_image', [
                        'index' => $key,
                        'background_image_url' => $image->imageUrl,
                        'profile_picture_url' => $image->userProfileImage,
                        'person_name' => $image->userName,
                        'person_instagram' => $image->userInstagramLink,
                        'download_link' => $image->downloadLink,
                    ])
                @endif
            @endforeach
        </div>

        <div id="wallpaper-col-2">
            @foreach ($allImages as $key => $image)
                @if ($key % 3 === 1)
                    @include('components/tile_image', [
                        'index' => $key,
                        'background_image_url' => $image->imageUrl,
                        'profile_picture_url' => $image->userProfileImage,
                        'person_name' => $image->userName,
                        'person_instagram' => $image->userInstagramLink,
                        'download_link' => $image->downloadLink,
                    ])
                @endif
            @endforeach
        </div>

        <div id="wallpaper-col-3">
            @foreach ($allImages as $key => $image)
                @if ($key % 3 === 2)
                    @include('components/tile_image', [
                        'index' => $key,
                        'background_image_url' => $image->imageUrl,
                        'profile_picture_url' => $image->userProfileImage,
                        'person_name' => $image->userName,
                        'person_instagram' => $image->userInstagramLink,
                        'download_link' => $image->downloadLink,
                    ])
                @endif
            @endforeach
        </div>
    </div>
                    
    

    <!-- Use Image-Clicked -->
    <?php
        // Access $index from the session
        $index = 0;
        if (Session::has('index')){
            $index = Session('index');
        }
    ?>

    
    @include('components/wallpaper_tile', [
        'background_image_url' => optional($allImages[$index]) -> imageUrl,
        'profile_pricture_url' => optional($allImages[$index]) -> userProfileImage,
        'person_name' => optional($allImages[$index]) -> userName,
        'person_instagram' => optional($allImages[$index]) -> userInstagramLink,
        'download_link' => optional($allImages[$index]) -> downloadLink,
        'image_title' => optional($allImages[$index]) -> title,
        'image_description' => optional($allImages[$index]) -> description,
        'likes' => optional($allImages[$index]) -> totalLikes,
        'wallpaper_color' => optional($allImages[$index]) -> wallpaperColor,
        'dimension' => optional($allImages[$index]) -> dimension,
        'date_created'=> optional($allImages[$index]) -> dateAdded,        
    ])

    
    <!-- Search bar -->
    <div id="search-bar">
        <input type="text" name="title" id="title" placeholder="Search wallpapers">                
        <img onclick="closeSearchBar()" src="{{ asset('icons/search_wallpaper.svg') }}" alt="search">
    </div>

    <!-- Voice -->
    <button id="voice" onclick="voiceNavigate()">
        <img src="{{ asset('icons/microphone.svg') }}" alt="voice">
    </button>


    <!-- <div class="test">

    </div> -->
    <script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clq3cpijt001tpxb3u0btq17z"></script> 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/Home.js') }}"></script>     
                        <!-- Include jQuery -->

</body>
</html>