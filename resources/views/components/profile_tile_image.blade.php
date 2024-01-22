<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tile Image</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/components_css/profile_tile_image.css') }}" />   
</head>
<body>
    <div class="tile-img">
        <!-- background image -->
        <img class="background-image" src="{{ asset($image_url) }}" alt="">

        <div  class="tile-img-info">
            <!-- Buttons -->
            <div class="tile-img-buttons">
                <div class="tile-img-button-pencil">
                    <!-- pass the index here on route -->
                    <a href="{{ view('edit', [
                        'title' => $title, 
                        'description' => $description,
                        'imageUrl' => $image_url,
                        'dimension' => $dimension,    
                        'dateAdded' => $dateAdded,
                        'downloadLink' => $downloadLink                        
                    ]) }}">
                        <img src="{{ asset('icons/pencil.svg') }}" alt="">
                    </a>

                </div>
                <div class="tile-img-button-delete">
                    <img src="{{ asset('icons/delete.svg') }}" alt="">
                </div>
            </div>            
        </div>
    </div>
</body>
</html>