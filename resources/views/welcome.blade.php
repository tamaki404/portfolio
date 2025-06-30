<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nicole - Profile</title>
   
    <meta name="description" content="Nicole's profile page showcasing user details.">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-o/3eeZlF1M+gSQQfFVzM9YBl6n3Tav1AmhU5Uah5ojI5IkfuQEqyzKNkk1rJZGL8eE6OY+y/jT9G7VUguVch/w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>

<main class="mainCon">
    <section class="introSec">

        <div class="logoNavbar">
            <div class="logo">
                <img src="{{ asset('assets/codeLogo.png') }}" alt="Code Logo">
                <h1>Portfolio</h1>
            </div>
            <div class="navbar">
                <button>Home</button>
                <button>About</button>
                <button>Portfolio</button>
                <button>Contact</button>
             </div>
        </div>

        <div class="introCon">
            <div class="introText">
                <h2>Hello,</h2>
                <h1>I'm Nicole</h1>
                <p> < p> I’m an entry-level web developer, I’m passionate about learning, building intuitive user experiences, and contributing to meaningful projects. < /p></p>
                <button class="dowloadBtn">Download resume</button>

            </div>
            <div class="introImg">
                <img src="{{ asset('assets/togaPic_noBg.png') }}" alt="Intro Image" class="img1">
                <img src="{{ asset('assets/filipinianaPic_noBg.png') }}" alt="Intro Image" class="img2">

            </div>
            <div class="socials">
                <button class="socialBtn"><img src="{{ asset('assets/linkedInLogo.png') }}" alt="LinkedIn" ></button>
                <button class="socialBtn"><img src="{{ asset('assets/facebookLogo.jpg') }}" alt="Facebook" ></button>
                <button class="socialBtn"><img src="{{ asset('assets/gmailLogo.jpg') }}" alt="Gmail"></button>
                <button class="socialBtn"><img src="{{ asset('assets/instagramLogo.jpg') }}" alt="Instagram" ></button>

            </div>
        </div>
             
    </section>
    
    <section class="myWorks">
  
    </section>


</main>

</body>
</html>
