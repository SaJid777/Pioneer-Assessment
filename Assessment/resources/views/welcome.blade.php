<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    </head>
    <body class="login-bg">
        <form method="post">
            <div class="part1">
                <img class="part1_img" src="{{asset('img/part1.png')}}">
            </div>
            <div class="part2">
                
            </div>
            <img class="logo_img" src="{{asset('img/logo.png')}}">
            <label class="label">Explore new courses... Hurry up!!</label>
            <input class="user_email" type="email" name="email" placeholder="Email Address" />
            <input class="user_pass" type="password" name="password" placeholder="Password" />
            <a href="#" class="forgot_pass">Forget Password?</a>
            <button type="submit" class="login_btn">Log In</button>
            <div class="dash1"></div>
            <div class="dash2"></div>
            <label class="label_or">or</label>
            <img class="logo_fb" src="{{asset('img/facebook.png')}}">
            <img class="logo_g" src="{{asset('img/google.png')}}">
            <label class="label2">Don't have an account?  <a class="sign_up" href="#">Sign Up</a></label>
        </form>
        

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>
