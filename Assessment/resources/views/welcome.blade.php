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
        <style>
            .login-bg{
                position: relative;
                width: 1920px;
                height: 1080px;
                background: #FFFFFF;
                font-family: 'Roboto';
            }
            .part1{
                position: absolute;
                width: 1219px;
                height: 1081px;
                left: 0px;
                top: 1px;

                background: radial-gradient(99.87% 413.14% at 0% 4.98%, #443453 0%, #232323 28.23%, #252425 100%);
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
            }
            .part1_img{
                position: absolute;
                width: 647px;
                height: 980px;
                left: 187px;
                top: 80px;
            }
            .part2{
                position: absolute;
                width: 715px;
                height: 979px;
                left: 1012px;
                top: 52px;

                background: #FFFFFF;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.5);
                border-radius: 10px;
            }
            .logo_img{
                position: absolute;
                left: 71.67%;
                right: 24.32%;
                top: 22.69%;
                bottom: 70.83%;
                
            }
            .label{
                position: absolute;
                left: 61.72%;
                right: 15.47%;
                top: 31.67%;
                bottom: 64.44%;
                font-style: normal;
                font-weight: normal;
                font-size: 30px;
                line-height: 42px;
                /* identical to box height, or 140% */


                color: #473558;
            }
            .user_email{
                position: absolute;
                width: 380px;
                height: 53px;
                left: calc(50% - 380px/2 + 444px);
                top: calc(50% - 53px/2 - 85.5px);

                background: #FFFFFF;
                border: 2px solid #666666;
                box-sizing: border-box;
                border-radius: 10px;
            }
            .user_pass{
                position: absolute;
                width: 380px;
                height: 53px;
                left: calc(50% - 380px/2 + 444px);
                top: calc(50% - 53px/2 - 4.5px);

                background: #FFFFFF;
                border: 2px solid #666666;
                box-sizing: border-box;
                border-radius: 10px;    
            }
            ::placeholder {
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 23px;
                padding-left:5%;
                color: #707070;
            }

            .forgot_pass{
                position: absolute;
                left: 76.35%;
                right: 16.98%;
                top: 53.06%;
                bottom: 45.19%;

                font-style: normal;
                font-weight: normal;
                font-size: 16px;
                line-height: 19px;
                text-decoration:none !important;
                /* identical to box height */

                text-align: center;

                color: #FF0000;
            }
            .login_btn{
                position: absolute;
                width: 380px;
                height: 53px;
                left: 1214px;
                top: 618px;

                background: #625A99;
                border-radius: 10px;
                font-style: normal;
                font-weight: bold;
                font-size: 22px;
                line-height: 26px;
                /* identical to box height */

                text-transform: uppercase;

                color: #FFFFFF;
            }
            .dash1{
                position: absolute;
                width: 145px;
                height: 0px;
                left: 1219px;
                top: 729px;

                border: 1px solid #666666;
            }
            .dash2{
                position: absolute;
                width: 145px;
                height: 0px;
                left: 1446px;
                top: 729px;

                border: 1px solid #666666;
            }
            .label_or{
                position: absolute;
                width: 16px;
                height: 20px;
                left: 1403px;
                top: 717px;
                font-style: normal;
                font-weight: bold;
                font-size: 17px;
                line-height: 20px;
                /* identical to box height */

                text-align: center;
            }
            .logo_fb{
                position: absolute;
                width: 55px;
                height: 53.46px;
                left: 1323px;
                top: 777px;
            }
            .logo_g{
                position: absolute;
                width: 53px;
                height: 53px;
                left: 1448px;
                top: 777px;
            }
            .label2{
                position: absolute;
                left: 65.62%;
                right: 19.53%;
                top: 83.06%;
                bottom: 14.81%;
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 23px;
                text-align: center;

                color: #707070;
            }
            .sign_up{
                
                font-weight: bold;
                text-decoration:none !important;
            }
        </style>
    </head>
    <body class="login-bg">
        <div class="part1">
            <img class="part1_img" src="{{asset('img/part1.png')}}">
        </div>
        <div class="part2">
            
        </div>
        <img class="logo_img" src="{{asset('img/logo.png')}}">
        <label class="label">Explore new courses... Hurry up!!</label>
        <input class="user_email" type="email" placeholder="Email Address" />
        <input class="user_pass" type="password" placeholder="Password" />
        <a href="#" class="forgot_pass">Forget Password?</a>
        <button type="submit" class="login_btn">Log In</button>
        <div class="dash1"></div>
        <div class="dash2"></div>
        <label class="label_or">or</label>
        <img class="logo_fb" src="{{asset('img/facebook.png')}}">
        <img class="logo_g" src="{{asset('img/google.png')}}">
        <label class="label2">Don't have an account?  <a class="sign_up" href="#">Sign Up</a></label>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>
