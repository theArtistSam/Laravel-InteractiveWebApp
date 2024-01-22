<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'><link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/signup.css') }}" />   
</head>
<body>
    <div id="background-image">
        <img src="../../images/background.png" alt="">
    </div>

    <div id="signup-container">
        
        <div id="signup-header">
            <img src="../../icons/app-logo.png" alt="">
            <h1>Signup</h1>
        </div>
        <p style="text-align: center;">Sign up to join the WallZ community and share your ideas!</p>
        <form action="">
            
            <!-- email -->
            <div class="form-email">
    
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="abc@gmail.com">                
                
            </div>

            <!-- password -->
            <div class="form-password">
    
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="*******">                
                
            </div>

            <!-- confirm password -->
            <div class="form-password">
    
                <label for="password">Confirm Password</label>
                <input type="password" name="password" id="password" placeholder="*******">                
                
            </div>


            <div class="form-submit">
                <input type="submit" value="Signup">
            </div>
        
        </form>
        
    </div>
</body>
</html>