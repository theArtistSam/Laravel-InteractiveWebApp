<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'><link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}" />   
</head>
<body>
    <div id="background-image">
        <img src="../../images/background.png" alt="">
    </div>

    <div id="login-container">
        
        <div id="login-header">
            <img src="../../icons/app-logo.png" alt="">
            <h1>Login</h1>
        </div>
        <p style="text-align: center;">Enter your details to sign in to your account</p>
        
        <form action="login" method="POST">
            <!-- email -->
            <div class="form-email">
                @csrf
                
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="abc@gmail.com">                
                
            </div>

            <!-- email -->
            <div class="form-password">
    
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="*******">                
                
            </div>

            <div class="form-submit">
                <input type="submit" value="Login">
            </div>
        
        </form>
        
    </div>
</body>
</html>