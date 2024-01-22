<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Wallpaper</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'><link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/edit.css') }}" />   

</head>
<body>    
    {{@View::make('components/navbar')}}    
    <!-- ---------------------------------------------------- -->
    <h1>{{$title}}</h1>
    <h1>{{$description}}</h1>
    <h1>{{$imageUrl}}</h1>
    <h1>{{$dimension}}</h1>
    <h1>{{$dateAdded}}</h1>    
    <h1>{{$downloadLink}}</h1>    
    
    <div id="edit-background">

        <div class="edit-wallpaper">
            <img src="{{ asset($imageUrl) }}" alt="">
        </div>
        
        <div class="edit-details">

            <h1>Edit Details</h1>
            
            <form action="">
                <!-- Title -->
                <div class="form-title">

                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Add the title for wallpaper" value="{{$title}}">                
                    
                </div>
                <!-- Description -->
                <div class="form-description">

                    <label for="description">Description</label>
                    <textarea oninput="auto_grow(this)" name="text" placeholder="Add the description for wallpaper" value="{{$description}}"></textarea>
                    <!-- <input type="text" name="description" id="description" placeholder="Add the description for wallpaper"> -->
                    
                </div>

                <!-- Image Info -->
                <div class="form-image">
                    <label for="image">Image Info</label>
                    <div style="display: flex; ">
                        <input style="margin-right: 10px;" type="text" name="image" id="image" placeholder="Dimmensions" value="{{$dimension}}{{$dateAdded}}{{$downloadLink}}">
                        <input type="date" name="image" id="image" placeholder="Date">
                    </div>
                    <input style="margin-top: 10px;" type="text" name="image" id="image" placeholder="Camera Info">                    
                </div>

                <!-- Tags -->
                <div class="form-tags">

                    <label for="tags">Tags</label>
                    <textarea oninput="auto_grow(this)" name="message" placeholder="Add tags separated by comma"></textarea>
                    <!-- <input type="text" name="tags" id="tags" placeholder="Add tags separated by comma"> -->
                    
                </div>
                
                <div class="form-submit">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>

    <!-- Search bar -->
    <div id="search-bar">
        <input type="text" name="title" id="title" placeholder="Search wallpapers">                
        <img onclick="closeSearchBar()" src="../../icons/cancel.svg" alt="search">
    </div>
    
    <script src="{{ asset('js/edit.js') }}"></script>     
<script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clq3cpijt001tpxb3u0btq17z"></script>    

</body>
</html>