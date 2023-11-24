<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Personal portofolio website</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="script.js"> </script>
    <style>
    #object-2 {
      transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out; /* Add smooth transition for both transform and filter */
    }

    #object-2:hover {
      transform: scale(.9); /* Increase the scale factor for zoom effect */
      filter: blur(5px); /* Add blur effect on hover */
    }

    #object-3 {
      transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out; /* Add smooth transition for both transform and filter */
    }

    #object-3:hover {
      transform: scale(.9); /* Increase the scale factor for zoom effect */
      filter: blur(5px); /* Add blur effect on hover */
    }
  </style>
</head>
<body>
    <div class="all">
    
        <header class="header">
            <a href="login.php" target="_blank" class="logo">Mahesa</a>.</a>

            <nav class="navbar">            
                <a href="#Home">Home</span></a>
                <a href="#About">About</a>
                <a href="#Portofolio">Portofolio</a>
                <a href="#Service">Service</a>
                <a href="#Feedback">Feedback</a>

            </nav>
        </header>

        <section id ="Home">
            <div class="Home-content">
                <h1>Hi, I'm Mahesa</h1>
                <h3>a student from Telekomunikasi Telesandi Bekasi. </h3>
                <p>I am Arya Mahesa, people call me Mahesa. I'm from indonesia, i live at Bekasi. I am 16 years old.</p>
                <div class="btn-box">
                    <a href="mailto:aryamahesa74@gmail.com" target="_blank"> Job?</a>
                    <a href="https://wa.me/6282299029889" target="_blank"> Let's Talk</a>
                </div>
                
            </div>

            <div class="home-sci">
                <a href="https://www.facebook.com/arya.mahesa.1840070?mibextid=9R9pXO" target="_blank"><i class='bx bxl-facebook'></i></i></a>
                <a href="https://youtube.com/@maxecasf?feature=shared" target="_blank"><i class='bx bxl-youtube'></i></i></a>
                <a href="https://www.instagram.com/mxcsf_/" target="_blank"><i class='bx bxl-instagram'></i></i></a>
            </div>
            
                <span class="square"></span>
                <span class="home-imgHover"></span>
            
        </section>

        
        <section id ="About">
            <div class="About-content-1">
                <h1>About me</h1>
                <p>My full name is Arya Mahesa Kusumawardhani, people call me Mahesa. I'm from indonesia, i live at bekasi and bekasi is the one of the most hottest place in indonesia but i sometimes like it but sometimes no. My hobby is.. well nothing more than just music or gaming or maybe exploring something new that i interested. I'm still 16 years old and im still a student.</p>
            </div>
            <div class="garis"></div>
            <div class="About-content-2">
                <h1>About what can i do</h1>
                <p>as a student i'm still not that good at programming but i can do basic web programming or design web or something else like that, i also can make a game but not that big games, just a simple one like a 2D indie games and something like that.</p>
            </div>
        </section>

        <section class="portofolio" id="Portofolio">
            <h2 class="heading">My <span>Portofolio</span></h2>   
            <h3>My Academic</h3>
            
            <div class="portofolio-container">
                    <div class="portofolio-box">
                        <img src="asset/SDN mangunjaya 07.jpg" alt="" width="370" height="370">
                        <div class="portofolio-layer">
                            <h4>SD Negeri Mangunjaya 07</h4>
                            <p>My elementary school (graduated)</p>
                        </div>
                    </div>
                
                    <div class="portofolio-box">
                        <img src="asset/SMPN 07.jpeg" alt="" width="370" height="370">
                        <div class="portofolio-layer">
                            <h4>SMPN 07 Tambun Selatan</h4>
                            <p>My junior high school (graduated)</p>
                        </div>  
                    </div>

                    <div class="portofolio-box">
                        <img src="asset/smk.jpeg" alt="" width="370" height="370">
                        <div class="portofolio-layer">
                            <h4>SMK Telesandi Telekomunikasi bekasi</h4>
                            <p>My vocational high school (still a student here)</p>
                        </div>
                    </div>
                </div>
                <p>i'm still a student who still studying at Telesandi Telekomunikasi. Now i'm in grade 11, my major is software engineering and i will graduate at 2025 (i hope). im not gonna end my academic at my vocational high school, i will continue my academic to college (i hope i can)</p>
            </div>
        </section>

        <section id ="Skill">
            <div class="Skill-content">
            <h3>My skill</h3>
            <p>HTML</p>
                <div class="container">
                     <div class="skills html">90%</div>
                </div>
            <p>For html, yes im quite good at it, it's also easy for me because it's simple</p>
            <p>CSS</p>
                <div class="container">
                     <div class="skills css">70%</div>
                </div>
            <p>Css? yeah im good at is but if i try to make a transition or animation it's a bit hard for me</p>
            <p>JavaScript</p>
                <div class="container">
                    <div class="skills js">20%</div>
                </div>
            <p>Yea JavaScript it's hard, i can't really understand it</p>
            <p>PHP</p>
                <div class="container">
                    <div class="skills php">30%</div>
                </div>
            <p>For php, i only can make CRUD </p>
            </div>
        </section>

        <section class="project">   
            <h3>My Project</h3>
            
            <div class="project-container">
                <div class="project-box">
                        <img id="object-1" src="asset/web aku.png" alt="" height="426px" width="640">
                        <div class="font-1">
                            <h4>Design my own personal profile website</h4>
                            <p>this is my first website project. i design my website for my school project, and i sometimes like to make a web site for my friends or for work or money. i do like design a website for fun when i feel bored or like want to try something new</p>
                        </div>
                        <a href="game.mp4" target="_blank">
                        <img id="object-2" src="sunnyland.jpeg" alt="" title="want to see the gameplay?" height="326px" width="640">
                        </a>
                        <div class="font-2">
                            <h4>developing a game</h4>
                            <p>This is my first game (i make this with a tutorial so im sure you've seen this game). i try to make a game to fill my freetime and study to catch my dreams to be a game development. i also likes to play games a lot and i was thinking "why don't i try to make games?" because of that, i got a dreams to be a game development</p>
                        </div>
                        <a href="vidio.mp4" target="_blank">
                        <img id="object-3" src="vidio.jpg" alt="">
                        </a>
                        <div class="font-3">
                            <h4>editing a videos</h4>
                            <p>i sometime edited some videos like AMV, Cinematic, etc. im not really good at editing, my color grading skills still sucks, and i also can't remember how to make a transition sometimes so... i'm not really good at editing</p>
                        </div>
                </div>
            </div>
        </section>

        <section class="service" id="Service">
            <h2 class="heading">Service</h2>   

            
            <div class="service-container">
                    <div class="service-box">
                        <img src="asset/web b.jpg" alt="" height="300px" width="640">
                        <div class="service-layer">
                            <h4>WEB DESIGN</h4>
                        </div>
                    </div>
                
                    <div class="service-box">
                        <img src="asset/game.png" alt="" height="300px" width="640">
                        <div class="service-layer">
                            <h4>GAME DEVELOPMENT</h4>
                        </div>  
                    </div>

                    <div class="service-box">
                        <img src="asset/editing a.jpg" alt="" height="300px" width="640">
                        <div class="service-layer">
                            <h4>EDITING</h4>
                        </div>
                    </div>
                </div>
            </div>
            <p>For my services, it's not too different from the projects I've made, why? because that's all I can do at the moment and if you are interested in working with me for and interested in using my services or maybe needed any help on something i can do, you can contact me. oh yeah, if you maybe just wanna be friends or wanna know a lot more about me, i always open for you to contact me but please no spamming.<p>
        </section>
    <form action="proses-backup.php" method="POST">
        <fieldset>
        <section id ="Feedback">
            <div class="feedback-box">
                <h1>Feedback</h1>
                <label for="feedback"></label>
                    <input type="text" name="nama" placeholder="Name/Nickname. . .">
                    <input type="email" name="email" placeholder="Email Address. . .">
                    <textarea type="feedback" name="feedback" placeholder="Type your Feedback. . ."></textarea>
                    <button type="submit" value="submit" name="submit">Submit</button> 
            </div>
        </fieldset>
        </section>
    </form>
    </div>
    
</body>
</html> 