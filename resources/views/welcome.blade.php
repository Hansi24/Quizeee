<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizeee</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-image: url('/welcome.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; 
        }

        .btn-lg {
            padding: 15px 30px;
            font-size: 24px;
            margin: 10px;

        }

        .hidden {
            display: none;
        }

        .transparent-box {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            text-align: center; 
        }

        #startButton {
            border: 2px solid yellow; 
            color: white; 
            background-color: transparent; 
        }
        
    </style>

</head>
<body>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="height: 60vh;">
        <div class="col-md-10">
        <h3 class="text-center mb-4" style="color: #fff; font-size: 86px; text-shadow: 2px 2px 4px #000;">Let's Test Your Knowledge...</h3>
    </br></br>
        <div class="transparent-box">
                <p class="mb-8" style="font-size: 16px; text-shadow: 8px 8px 4px #000;">Step into a world of knowledge and excitement where learning meets fun. This quiz game platform is your gateway to a thrilling journey of discovery, challenge, and entertainment. With an extensive array of categories spanning from history and science to pop culture and geography, there's something for everyone. Whether you're a trivia enthusiast or a casual player, our platform offers a diverse range of quizzes to suit every interest and skill level. Challenge your friends, compete against players from around the globe, or embark on solo quests to test your knowledge and wit. Earn achievements, climb the leaderboards, and become a quiz champion! Engage in an immersive experience with sleek design, intuitive controls, and captivating visuals. Join our vibrant community of quiz aficionados and embark on a journey of endless discovery. Welcome aboard, and let the games begin!</p>
                <button id="startButton" class="btn btn-success btn-lg" onclick="startTest()">Let's Start</button>
            </div>
        </div>
    </div>
</div>

<div id="loginRegistration" class="hidden">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 20vh;">
            <div class="col-md-10">
                <form action="{{ route('login') }}" method="get" class="text-center">
                    <button type="button" class="btn btn-warning btn-lg" onclick="location.href='{{ route('login') }}';">Login</button>
                    <button type="button" class="btn btn-dark btn-lg" onclick="location.href='{{ route('register') }}';">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function startTest() {
        document.getElementById('startButton').style.display = 'none';
        setTimeout(function() {
            document.getElementById('loginRegistration').classList.remove('hidden');
        }, 1000); 
    }
</script>

</body>
</html>
