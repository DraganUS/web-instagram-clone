<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@if (Route::has('login'))
    @auth
        <script>window.location = "/home";</script>
    @else
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Instagram</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                background-color:   #fafafa;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            main{
                display: flex;
                flex-shrink: 0;
                position: relative;
                align-items: stretch;
                flex-direction: column;
            }
            article{
                display: flex;
                justify-content: center;
                margin: 30px auto 0;
                max-width: 935px;
                padding-bottom: 44px;
                width: 100%;
                flex-grow: 1;
                flex-direction: row;
            }
            div.yoz{
                background-image: url("http://web-instagram-clone.test/storage/instagramPhone.png");
                align-self: center;
                background-position: 0 0;
                background-size: 454px 618px;
                flex-basis: 454px;
                height: 618px;
                margin-left: -35px;
                margin-right: -15px;
            }
            img.RP4i1{
                height: 427px;
                left: 0;
                position: absolute;
                top: 0;
                width: 240px;
            }
            div.v64s{
                margin: 99px 0 0 151px;
                position: relative;
                align-items: stretch;
                box-sizing: border-box;
                display: flex;
                flex-direction: column;
                flex-shrink: 0;
                padding: 0;
            }
            @media only screen and (max-width: 750px) {
                div.yoz {
                    display: none !important;
                }
            }
            .rgFsT{
                color: #262626;
                flex-grow: 1;
                justify-content: center;
                margin-top: 12px;
                max-width: 350px;
                width: 100%;
            }
            .gr27e{
                background-color: #fff;
                border: 1px solid #e6e6e6;
                border-radius: 1px;
                margin: 0 0 10px;
                padding: 10px 0;
            }
            .Szr5J {
                display: block;
                overflow: hidden;
                text-align: center;
                white-space: nowrap;
            }
            .NXVPg {
                margin: 22px auto 12px;
                font-family: 'Comic Sans MS';
                font-size: 2em;
            }
            .P8adC{
                margin-bottom: 20px;
                align-items: stretch;
                box-sizing: border-box;
                display: flex;
                flex-direction: column;
                flex-shrink: 0;
                padding: 0;
                position: relative;
            }
            .vvzhL {
                font-weight: 600;
                line-height: 20px;
                font-size: 17px;
                margin: 0 40px 10px;
                color: #999;
                text-align: center;
            }
            .L3NKy{
                border: 1px solid transparent;
                background-color: #3897f0;
                border-radius: 4px;
                padding: 7px 23px;
                color: #fff;
                position: relative;
                text-align: center;
                cursor: pointer;
            }
            .alg3{
                display: flex;
                justify-content: center;
            }
            .alg3 a{
                text-decoration: none;
                width: 5em;
                margin: 15px;
            }
            .g4Vm4{
                color: #999;
                margin: 10px 60px;
                font-size: 14px;
                line-height: 18px;
                text-align: center;
                padding: 0;
                border: 0;
                font: inherit;
                vertical-align: baseline;
                display: block;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
            }
            .g4Vm4 a{
                color: #999;
                font-weight: 600;
                text-decoration: none;
                height: 36em;
            }

        </style>
        <!-- Styles -->
    </head>
    <body>

    <main>
        <article>
            <div class="yoz">
                <div class="v64s">
                    <img class="RP4i1" src="http://web-instagram-clone.test/storage/instagramScreen.jpg" alt="">
                </div>
            </div>
            <div class="rgFsT">
                <div class="gr27e">
                    <h1 class="NXVPg Szr5J">instagram</h1>
                    <div class="P8adC">
                        <form class="XFYOY" method="post">
                            <h3 class="vvzhL">Sign up to see photos and videos from your friends.</h3>
                                                <div class="alg3">
                                                    <a href="{{ route('login') }}" class="L3NKy">LogIn</a>
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="L3NKy">Register</a>
                                                </div>
                                            @endif
                            <p class="g4Vm4">By signing up, you agree to our
                                <a target="_blank" href="https://help.instagram.com/581066165581870">Terms</a> ,
                                <a target="_blank" href="https://help.instagram.com/519522125107875">Data Policy</a> and
                                <a target="_blank" href="/legal/cookies/">Cookies Policy</a> .
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </main>
    </body>
        @endauth
    @endif
</html>
