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
                <button style="opacity: 1;">Home</button>
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
                <a class="dowloadBtn" href="assets/nicoleTumpag_dev.pdf" download>
                <span class="downloadIcon"><i class="fa-solid fa-arrow-down"></i></span>
                Download resume
                </a>

            </div>
            
            <div class="introImg">
                <img src="{{ asset('assets/togaPic_noBg.png') }}" alt="Intro Image" class="img1">
                <img src="{{ asset('assets/filipinianaPic_noBg.png') }}" alt="Intro Image" class="img2">

            </div>
            <div class="socials">
                <button class="socialBtn" onclick="window.open('https://www.google.com', '_blank')">
                <img src="{{ asset('assets/linkedInLogo.png') }}" alt="LinkedIn">
                </button>
                <button class="socialBtn"><img src="{{ asset('assets/facebookLogo.jpg') }}" alt="Facebook" ></button>
                <button class="socialBtn"><img src="{{ asset('assets/gmailLogo.jpg') }}" alt="Gmail"></button>
                <button class="socialBtn"><img src="{{ asset('assets/instagramLogo.jpg') }}" alt="Instagram" ></button>

            </div>
        </div>

        <!-- <button class="scrollDown">  <i class="fa-solid fa-chevron-down"></i></button> -->
             
    </section>
    
    <section class="myWorks">
  
        <div class="logoNavbar">
            <div class="logo">
                <h1 style="color:#095ee5">/</h1>
                <h1 style="font-size:18px">About me</h1>
            </div>
            <!-- <div class="navbar">
                <button style="opacity: 1;">Home</button>
                <button>About</button>
                <button>Portfolio</button>
                <button>Contact</button>
             </div> -->
        </div>  
        <div class="works">
            <div class="leftWork">
                <h1>I've worked on diverse projects — </h1>
                <p>from building a cross-platform AI chat app using 
                    React Native and OpenAI, to leading the development 
                    of an e-commerce website and a teacher-parent monitoring system.</p>
            </div>
            <div class="rightWork">
                <h1>Let’s build something great together!</h1>
                <p>I’m detail-oriented, organized, and love solving problems. Whether it's 
                    optimizing code, fixing bugs, or designing clean UI, I thrive in collaborative
                     environments where I can keep learning and building meaningful tech.</p>
            </div>
        </div>

  
    </section>

    <section class="techStacksSec">
  
        <div class="logoNavbar">
            <div class="logo">
                <h1 style="color:#095ee5">/</h1>
                <h1 style="font-size:18px">Tech Stacks</h1>
            </div>
            <!-- <div class="navbar">
                <button style="opacity: 1;">Home</button>
                <button>About</button>
                <button>Portfolio</button>
                <button>Contact</button>
             </div> -->
        </div>  

        <div class="techStacks">
            <h2>HTML</h2>
            <h2>CSS</h2>
            <h2>JavaScript</h2>
            <h2>PHP</h2>
            <h2>Laravel</h2>
            <h2>Express</h2>
            <h2>React Native</h2>
            <h2>MySQL</h2>
            <h2>Git</h2>
            <h2>GitHub</h2>
            <h2>Open AI</h2>
            <h2>MongoDB</h2>
            <h2>Firebase Firestore</h2>
            <h2>Android Studio</h2>
            <h2>Tailwind</h2>
            <h2>Electron</h2>
            <h2>XAMPP</h2>
            <h2>Expo Go</h2>
        



        </div>


  
    </section>

    <section class="portfolio">
  
        <div class="logoNavbar">
            <div class="logo">
                <h1 style="color:#095ee5">/</h1>
                <h1 style="font-size:18px">Portfolio</h1>
            </div>
        </div>  

        <h2>Check out some of my recent projects</h2>

        <div class="portCon">
            <div class="portBox">
                <div class="upperBoxpart">
                     <p style="font-weight: bold">2025</p>
                     <p>Android, IOS</p>
                       
                </div>
                <div class="lowerBoxpart">
                    <h2>AI Chat App – Leyrus</h2>
                    <p>React Native, Expo Go, OpenAI API, AdMob, Android Studio, Xcode</p>

                </div>
            </div>

            <div class="portBox">
                <div class="upperBoxpart">
                     <p style="font-weight: bold">2025</p>
                     <p>Android, IOS</p>
                       
                </div>
                <div class="lowerBoxpart">
                    <h2>AI Chat App – Leyrus</h2>
                    <p>React Native, Expo Go, OpenAI API, AdMob, Android Studio, Xcode</p>

                </div>
            </div>
     
            <div class="portBox">
                <div class="upperBoxpart">
                     <p style="font-weight: bold">2025</p>
                     <p>Android, IOS</p>
                       
                </div>
                <div class="lowerBoxpart">
                    <h2>AI Chat App – Leyrus</h2>
                    <p>React Native, Expo Go, OpenAI API, AdMob, Android Studio, Xcode</p>

                </div>
            </div>        



        </div>


  
    </section>

    <section class="contact">
  
        <div class="logoNavbar">
            <div class="logo">
                 <h1 style="color:#095ee5">/</h1>
                <h1 style="font-size:18px">Contact me</h1>
            </div>
        </div>

        <button class="footerUpBtn"><i class="fa-solid fa-chevron-up"></i></button>
        
        <div class="contactCon"> 
            <div class="leftCon">
                                    <h2>If you have any questions, please don't hesitate to contact me</h2>

                <div class="nicoleDeets">
                    <img src="{{ asset('assets/nicole-Bg.jpg') }}" class="nicoleImg" alt="Image">
                    <div class="details">
                        <h1>Nicole Tumpag</h1>
                        <h2>Web developer</h2>
                        <div class="endIcon">
                            <span><img src="{{ asset('assets/facebookLogo.jpg') }}" alt="Facebook" ></span>
                            <span><img src="{{ asset('assets/facebookLogo.jpg') }}" alt="Facebook" ></span>
                            <span><img src="{{ asset('assets/facebookLogo.jpg') }}" alt="Facebook" ></span>
                            <span><img src="{{ asset('assets/facebookLogo.jpg') }}" alt="Facebook" ></span>

                        </div>
                    </div>
                </div>


            </div>
            <div class="rightCon">
                <div class="contactBox">
                    <h1>Get in touch</h1>
                    <p>nicole.tumpagdev@gmail.com</p>
                    <p>+639125758529</p>
                    <p style="color: #fff; font-weight: bold; margin-top: 10px;"> Montalban, Rizal, Philippines</p>
                </div>


            </div>

        
        </div>

        <div class="navFooter">
            <button>Home</button>
            <button>About</button>
            <button>Portfolio</button>
            <button>Contact</button>
        </div>


        

       

  
    </section>

</main>

</body>
</html>
