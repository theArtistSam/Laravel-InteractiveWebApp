<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tile Image</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/components_css/tile_image.css') }}" />   
</head>
<body>

    <!-- Tile Component -->
    <div class="tile-img" onclick="showWallpaper({{ $index }}) ">
        <!-- @csrf     -->
        <!-- background image -->
        <img class="background-image" src="{{ $background_image_url }}" alt="">
        
        <!-- Personal Info -->
        <div class="tile-img-info">
            <div class="personal-info">
                <img src="{{ $profile_picture_url }}" style="margin-right: 10px;" alt="Profile Image">
                
                <div>
                    <p class="person-name">{{ $person_name }}</p>
                    <p class="person-email">{{$person_instagram}}</p>
                </div>
            </div>
            
            <!-- Download Button -->
            <a href="{{$download_link}}"  target="_blank">
                <button class="tile-img-download-button">
                    Download
                </button>
            </a>
            
        </div>              
    </div>

    <!-- <script src="{{ asset('js/Home.js') }}"></script>      -->
</body>
</html>