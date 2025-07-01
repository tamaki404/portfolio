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
    <section class="introSec" id="home">

        <div class="logoNavbar">
            <div class="logo">
                <img src="{{ asset('assets/codeLogo.png') }}" alt="Code Logo">
                <h1>Portfolio</h1>
            </div>
      
             <div class="navbar">
                <button onclick="scrollToSection('home')">Home</button>
                <button onclick="scrollToSection('about')">About</button>
                <button onclick="scrollToSection('techs')">Techs</button>
                <button onclick="scrollToSection('portfolio')">Portfolio</button>
                <button onclick="scrollToSection('contact')">Contact</button>
            </div>

                <script>
                    function scrollToSection(id) {
                        const section = document.getElementById(id);
                        if (section) {
                        section.scrollIntoView({ behavior: 'smooth' });
                        }
                    }
                </script>


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
                <button class="emailMe" onclick="window.open('https://mail.google.com/mail/?view=cm&fs=1&to=nicole.tumpag.dev@gmail.com', '_blank')">Email me</button>
                <img src="{{ asset('assets/togaPic_noBg.png') }}" alt="Intro Image" class="img1">
                <img src="{{ asset('assets/filipinianaPic_noBg.png') }}" alt="Intro Image" class="img2">

            </div>
            <div class="socials">
                <button class="socialBtn" onclick="window.open('https://www.linkedin.com/in/your-username', '_blank')">
                <img src="{{ asset('assets/linkedInLogo.png') }}" alt="LinkedIn">
                </button>

                <button class="socialBtn" onclick="window.open('https://www.facebook.com/CarbolalaIs/', '_blank')">
                <img src="{{ asset('assets/facebookLogo.jpg') }}" alt="Facebook">
                </button>

                <button class="socialBtn" onclick="window.open('https://mail.google.com/mail/?view=cm&fs=1&to=nicole.tumpag.dev@gmail.com', '_blank')">
                <img src="{{ asset('assets/gmailLogo.jpg') }}" alt="Gmail">
                </button>



                <button class="socialBtn" onclick="window.open('https://www.instagram.com/tamtamaki404/', '_blank')">
                <img src="{{ asset('assets/instagramLogo.jpg') }}" alt="Instagram">
                </button>

            </div>
        </div>

        <!-- <button class="scrollDown">  <i class="fa-solid fa-chevron-down"></i></button> -->
             
    </section>
    
    <section class="myWorks" id="about">
  
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
        <div class="leftWork" id="leftWork">
            <h1>I've worked on diverse projects — </h1>
            <p>from building a cross-platform AI chat app using 
            React Native and OpenAI, to leading the development 
            of an e-commerce website and a teacher-parent monitoring system.</p>
        </div>
        <div class="rightWork" id="rightWork">
            <h1>Let’s build something great together!</h1>
            <p>I’m detail-oriented, organized, and love solving problems. Whether it's 
            optimizing code, fixing bugs, or designing clean UI, I thrive in collaborative
            environments where I can keep learning and building meaningful tech.</p>
        </div>
        </div>

        <script>
            const quotes = [
                {
                left: {
                    h1: "I've worked on diverse projects —",
                    p: "from building a cross-platform AI chat app using React Native and OpenAI, to leading the development of an e-commerce website and a teacher-parent monitoring system."
                },
                right: {
                    h1: "Let’s build something great together!",
                    p: "I’m detail-oriented, organized, and love solving problems. Whether it's optimizing code, fixing bugs, or designing clean UI, I thrive in collaborative environments where I can keep learning and building meaningful tech."
                }
                },
                {
                left: {
                    h1: "I turn ideas into usable software.",
                    p: "From chat apps to complex systems, I enjoy transforming project goals into fully functional apps with clean, reliable code and modern design principles."
                },
                right: {
                    h1: "Code with purpose, design with clarity.",
                    p: "My goal is to craft software that not only works—but works beautifully. I'm always up for new challenges that help me grow while building tech that matters."
                }
                }
            ];

            let index = 0;

            function switchQuotes() {
                const left = document.getElementById("leftWork");
                const right = document.getElementById("rightWork");

                left.classList.add("fade-out");
                right.classList.add("fade-out");

                setTimeout(() => {
                const quoteSet = quotes[index];
                left.innerHTML = `<h1>${quoteSet.left.h1}</h1><p>${quoteSet.left.p}</p>`;
                right.innerHTML = `<h1>${quoteSet.right.h1}</h1><p>${quoteSet.right.p}</p>`;

                left.classList.remove("fade-out");
                right.classList.remove("fade-out");
                left.classList.add("fade-in");
                right.classList.add("fade-in");

                index = (index + 1) % quotes.length;
                }, 1000); 
            }

            setInterval(switchQuotes, 4000);
        </script>



  
    </section>

    <section class="techStacksSec" id="techs">
  
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

    <section class="portfolio" id="portfolio">
  
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
                     <p>Windows</p>
                       
                </div>
                <div class="lowerBoxpart">
                    <h2>TODD: Teacher-Parent Monitoring System</h2>
                    <p>HTML, CSS, Node.js, Express.js, MongoDB, Electron</p>

                </div>
            </div>
     
            <div class="portBox">
                <div class="upperBoxpart">
                     <p style="font-weight: bold">2024</p>
                     <p>Web</p>
                       
                </div>
                <div class="lowerBoxpart">
                    <h2> Pinoy Pride Marketplace</h2>
                    <p>HTML, CSS, PHP, MySQL, XAMPP</p>

                </div>
            </div>        



        </div>


  
    </section>

    <section class="contact" id="contact">
  
        <div class="logoNavbar">
            <div class="logo">
                 <h1 style="color:#095ee5">/</h1>
                <h1 style="font-size:18px">Contact me</h1>
            </div>
        </div>

        <button class="footerUpBtn" onclick="scrollToSection('home')"><i class="fa-solid fa-chevron-up"></i></button>
        
        <div class="contactCon"> 
            <div class="leftCon">
                <h2>If you have any questions, please don't hesitate to contact me</h2>

                <div class="nicoleDeets">
                    <img src="{{ asset('assets/nicole-Bg.jpg') }}" class="nicoleImg" alt="Image">
                    <div class="details">
                        <h1>Nicole Tumpag</h1>
                        <h2>Web developer</h2>
                        <div class="endIcon">
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('assets/linkedInLogo.png') }}" alt="LinkedIn">
                            </a>
                            <a href="https://www.facebook.com/CarbolalaIs/" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('assets/facebookLogo.jpg') }}" alt="LinkedIn">
                            </a>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=nicole.tumpagdev@gmail.com" target="_blank" rel="noopener noreferrer">
                                  <img src="{{ asset('assets/gmailLogo.jpg') }}" alt="Gmail">
                            </a>

                            <a href="https://www.instagram.com/tamtamaki404/" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('assets/instagramLogo.jpg') }}" alt="LinkedIn">
                            </a>                                                        
                           
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
                <button onclick="scrollToSection('home')">Home</button>
                <button onclick="scrollToSection('about')">About</button>
                <button onclick="scrollToSection('techs')">Techs</button>
                <button onclick="scrollToSection('portfolio')">Portfolio</button>
                <button onclick="scrollToSection('contact')">Contact</button>
        </div>


        

       

  
    </section>

</main>

</body>
</html>
