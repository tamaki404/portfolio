<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nicole - Profile</title>
   
    <meta name="description" content="Nicole's profile page showcasing user details.">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="icon" href="">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Savate:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
   
</head>
<body>

<main class="mainCon">
    <section class="introSec">
         <div class="directCon">
            <button class="directButt" ><p style="font-weight: bold">About</p></button>
            <button class="directButt"><p>Projects</p></button>
            <button class="directButt"><p>Resume</p></button>
            <button class="directButt"><p>Gallery</p></button>
            <button class="directButt"><p>Contact</p></button>
            
         </div>

          <div class="twoCol">
              <div class="col1">
                <div class="introText">
                  <h1 class="title">Hello!</h1>
                  <h1 class="name" >I'm Nicole</h1>
                  <p>
                    I'm an aspiring web developer who loves turning ideas into interactive, user-friendly websites. 
                    I'm currently exploring modern tools and frameworks to sharpen my skills.
                    Whether it's building responsive layouts or learning something new, I enjoy every part of the process.  
                    I'm excited to grow in this field and contribute to meaningful projects!
                  </p>
                  <div class="socials">
                    <button class="facebook">
                      <a href="#">
                    </button>                     
                     <button class="instagram">
                      <a href="#">
                    </button>  
                    <button class="discord">
                      <a href="#">
                    </button>                     
                     <button class="linkedin">
                      <a href="#">
                    </button>  
                  

                      
                    

                  </div>
               

                  
                </div>

        
              </div>   
              <div class="col2">
                    <img src="{{ asset('assets/nicoleImg1.png') }}" alt="">
               

        
              </div>             
          </div>


             
    </section>
    <section class="detailsSec">
     

    </section>

</main>

</body>
</html>
