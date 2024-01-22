<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/components_css/navbar.css') }}" />   
</head>
<body>
    <div id="Navbar">        
        <div id="App-Logo">
            <img src="{{ asset('icons/app-logo.png') }}" style="margin-right: 10px;" alt="Logo">
            <p>WallZ</p>    
        </div>

        <nav>
            <li><a href="">
                <img id="home-icon" src="{{ asset('icons/home_filled.svg') }}" alt="Home">
            </a></li>

            <li><a href="#" >
                <img id="search-icon" onclick="showSearchBar()" src="{{ asset('icons/search.svg') }}" alt="Search">
            </a></li>
            
            <!-- <li><a href="#">
                <img src="{{ asset('icons/profile.jpg') }}/ai.svg" alt="Home">
            </a></li> -->
            
            <li><a href="{{ url('profile') }}">
                <img id="user-icon" src="{{ asset('icons/user.svg') }}" alt="Profile">
            </a></li>
            
        </nav>

        <div id="Buttons">
            <a href="/signup">                
                <button class="signup" onclick="">
                    Signup
                </button>
            </a>
            <a href="/login">
                <button class="login" onclick="">
                    Login
                </button>    
            </a>
        </div>
    </div>
</body>
</html>