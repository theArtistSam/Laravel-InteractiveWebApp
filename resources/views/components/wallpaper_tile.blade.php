<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallpaper Tile</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/components_css/wallpaper_tile.css') }}" />   
</head>
<body>
    <div id="image-clicked">
        <div class="image-cover">
            <img src="{{ $background_image_url }}" alt="image">
        </div>

        <div class="image-description">
            <div class="info-tab">

                <div class="personal-info">
                    <img src="{{ $profile_pricture_url }}" style="margin-right: 10px;" alt="Profile Image">                    
                    <div>
                        <p class="person-name" style="color: black;">{{$person_name}}</p>
                        <p class="person-email" style="color: black;">{{$person_instagram}}</p>
                    </div>
                </div>            
                <img onclick="hideWallpaper()" class="cancel-button" src="{{ asset('icons/cancel.svg') }}" style="margin-right: 10px;" alt="Profile Image">                                                    
            </div>
            
            <div id="image-details">
                <h4>{{$image_title}}</h4>
                <p>{{$image_description}}</p>
            </div>  
            
            <div id="post-details">
                <a href="{{$download_link}}" target="_blank">
                    <button class="post-download">
                        Download
                    </button>
                </a>    
                
                <!-- Post details/buttons -->
                <div class="post-details-button">
                    <!-- <div class="post-likes"> -->                        
                    <img style="margin-right: 5px;" src="{{ asset('icons/heart.svg') }}" alt="">
                    <p>{{$likes}}</p>
                </div>

                <div class="post-details-button">
                    <!-- <div class="post-total-downloads"> -->
                    <img style="margin-right: 5px;" src="{{ asset('icons/color.svg') }}" alt="">
                    <p>{{$wallpaper_color}}</p>
                </div>
                
            </div>
                                    

            <div id="camera-info">
                <div class="camera-tag">
                    <img style="margin-right: 10px;" src="{{ asset('icons/dimmension.svg') }}" alt="dimmension">
                    <p>{{ $dimension }}</p>    
                </div>
                <div class="camera-tag">
                    <img style="margin-right: 10px;" src="{{ asset('icons/canander.svg') }}" alt="calander">
                    <p>{{$date_created}}</p>    
                </div>
                <div class="camera-tag">
                    <img style="margin-right: 10px;" src="{{ asset('icons/camera.svg') }}" alt="camera">
                    <p>NIKON CORPORATION, NIKON Z 6</p>    
                </div>
            </div>
            
            <div id="tags">
                <div class="post-tag">
                    <p>Lightroom edit pictures</p>    
                </div>
                <div class="post-tag">
                    <p>Nature Images</p>    
                </div>

                <div class="post-tag">
                    <p>Eye catching</p>    
                </div>
                
                <div class="post-tag">
                    <p>Free hd wallpapers</p>    
                </div>
            </div>
        </div>                      
    </div>
    <script src="{{ asset('js/Home.js') }}"></script>     
</body>
</html>