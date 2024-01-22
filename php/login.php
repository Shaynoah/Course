<!DOCTYPE html>
<html>
    <title>login form</title>
    <head>
        <style>
            body{
                width: 75%;
                height: 100%;
                

            }
            .back{
                ;
            }
            form{
                border: 3px solid #f1f1f1;
                text-align: center;
                color: gold;
                background-color: black;
                
            }
            input[type=text],input[type=password]{
                width: 300px;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border:1px solid #ccc;
                box-sizing: border-box;
                
            }
            button{
                background-color:darkgoldenrod;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border:none;
                cursor: pointer;
                width: 300px;
                border-radius: 30px;

            }
            .container{
                background-color: black;
            }

        </style>
    </head>
    <body>
        
        <form method="POST" action="/Course/php/validate.php">
            <div><h1>COURSE CORRECT</h1><br>
                <h2>LOG IN:</h2><hr>
            </div><br>
        <div class="container">
            <label for="unname">
                <b>Username</b></label><br>
                <input type="text"
                placeholder="Enter Username"
                name="unname"required><br>
                <label for ="psw">
                    <b>Password</b></label><br><br>
                <input type="number"
                placeholder="Enter password"
                name="phoneNumber" required><br>
        <a href="work.html">    <button type="Submit">Login</button></a><br>
                <label><input type="checkbox"checked="checked"name="remember">Remember me</label>

        </div>
        <div class="container"
        style="background-color: black">
        <button type="button"
    class="cancel">Cancel</button><br><br>
    <span class="psw"Forgot><a href="#">password</a></span><br>

   <a href="correct.html"><button>COURSE CORRECT</button></a>
        </div>
    </form>
    <a href="/Course/public/correct.html"><button class="back">COURSE CORRECT</button></a>
    <p>
Not a Member? <a class="sign" href="/Course/public/work.html">Create Account</a>
        </p>
    </body>
</html>