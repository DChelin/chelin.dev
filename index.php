<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/dev-image1.png"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devlyn Chelin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&family=Josefin+Slab:wght@100;200;300;400;500;600;700&family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Turret+Road:wght@200;300;400;500;700;800&display=swap" 
    rel="stylesheet">
</head>
<body>
    <div class="container">
        <!--Section 1-->
        <section class="section-1 center" 
        id="section-1">
        <h1 class="section-1-heading">
            Full-Stack-Dev
        </h1>
        <img src="images/dev-image1.png" alt="Devlyn Chelin" class="person-img"/>
        <h3 class="person-name">print("Devlyn Chelin")</h3>
        <a href="#section-3"class="section-1-btn">.Projects</a>
        </section>
        <!--End of Section 1-->

        <!--Navbar-->
        <nav class="navbar center">
            <a href="#section-1" class="navbar-link">{ Home }</a>
            <a href="#section-2" class="navbar-link">{ About } </a>
            <a href="#section-3" class="navbar-link">{ Portfolio } </a>
            <a href="#section-4" class="navbar-link">{ Contact } </a>
            </nav>
        <!--End of Navbar-->

        <!--Section 2-->
        <section class="section-2" 
        id="section-2">
            <h1 class="section-heading 
            section-2-heading">.About-Me</h1>
            <div class="progress-bars-wrapper">
              <div class="progress-bar">
                <p class="progress-text">
                  HTML
                  <span>88</span>%
                </p>
                <div class="progress-percent"></div>
              </div>
              <div class="progress-bar">
                <p class="progress-text">
                  CSS
                  <span>92</span>%
                </p>
                <div class="progress-percent"></div>
              </div>
              <div class="progress-bar">
                <p class="progress-text">
                  PHP
                  <span>85</span>%
                </p>
                <div class="progress-percent"></div>
              </div>
              <div class="progress-bar">
                <p class="progress-text">
                  Python
                  <span>94</span>%
                </p>
                <div class="progress-percent"></div>
              </div>
              </div>
            <div class="services">
              <div class="service">
                <i class="far fa-lightbulb"></i>
                <h2 class="service-heading">[ 'creative' ]</h2>
              </div>
              <div class="service">
                <i class="fas fa-cut"></i>
                <h2 class="service-heading">[ 'problem-solving' ]</h2>
              </div>
              <div class="service">
                <i class="fas fa-tachometer-alt"></i>
                <h2 class="service-heading">[ 'fast' ]</h2>
              </div>
              <div class="service">
                <i class="fas fa-rocket"></i>
                <h2 class="service-heading">[ 'dynamic' ]</h2>
              </div>
            </div>
          </section>
                </div>
            </div>
        </section>
        <!--End of Section 2-->
        <!--Download Section-->
        <div class="download-btn-section">
          <a class="download-btn" href="files/Devlyn-Chelin-2023.pdf" title="download-btn"<i class="fa fa-download" download></i> .download-cv</a>
      </div>
      <!--End of Download Section-->
        <!--Section 3-->
        <section class="section-3" 
        id="section-3">
            <h1 class="section-3-heading">.Projects</h1>
            <div class="projects-wrapper center">
                <div class="project">
                <div class="project-text">
                <h2 class="project-name">['Hangman_Game']</h2>
                <h4 class="project-technologies">{ Python 3.0 }</h4>
            </div>
            <img src="images/hangman-image.png" 
            class="project-img">
            <a href="https://github.com/DChelin/hangman" class="project-link"
            target="_blank">run(project):</a>
        </div>
        <div class="project">
            <div class="project-text">
            <h2 class="project-name">['In_Pursuit_of_Peace']</h2>
            <h4 class="project-technologies">{ Davinci Resolve17 }</h4>
        </div>
        <img src="images/calming-video.jpg" 
        class="project-img">
        <a href="https://www.instagram.com/p/CZKCDCGBG8e/" class="project-link"
        target="_blank">run(project):</a>
    </div>
    <div class="project">
        <div class="project-text">
        <h2 class="project-name">['1:00_am_Video_Project']</h2>
        <h4 class="project-technologies">{ Davinci Resolve17 }</h4>
    </div>
    <img src="images/cant-sleep.jpg" 
    class="project-img">
    <a href="https://www.instagram.com/p/CZbiLyRLpRr/" class="project-link"
    target="_blank">run(project):</a>
</div>
    </div>
        </section>
        <!--End of Section 3-->
        
        <!--Start of Section 4 -->
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            
            // Your email address where you want to receive the form submissions
            $to = "your-email@example.com";
        
            // Subject of the email
            $subject = "New Form Submission from $name";
        
            // Email message body
            $message_body = "Name: $name\n";
            $message_body .= "Email: $email\n";
            $message_body .= "Message:\n$message";
        
            // Additional headers
            $headers = "From: $email";
        
            // Check if the email was sent successfully
            if (mail($to, $subject, $message_body, $headers)) {
                echo "Thank you for your submission!";
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Contact Form</title>
        </head>
        <body>
            <section class="section-4" id="section-4">
                <h1 class="section-heading section-4-heading">Contact Me</h1>
                <form action="" method="POST" class="contact-form center">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <textarea name="message" placeholder="Message"></textarea>
                    <input type="submit" value="Submit" class="contact-form-btn">
                </form>
            </section>
        </body>
        </html>
        <!--End of Section 4 -->
        
        <!-- Section 5 -->
      <footer class="section-5 center">
        <div class="social-media">
          <a href="https://github.com/DChelin" class="social-media-link">
            <i class="fab fa-github-square"></i>
          </a>
          <a href="https://www.instagram.com/chelin.dev/" class="social-media-link">
            <i class="fab fa-instagram-square"></i>
          </a>
          <a target="_blank" href="https://www.linkedin.com/in/devlyn-chelin-dev" class="social-media-link">
            <i class="fa-brands fa-linkedin"></i>
          </a>
        </div>
            <p class="copyright">
                Copyright &copy; Devlyn Chelin.
                All Rights Reserved
            </p>
        </footer>
        <!--End of Section 5-->
    </div>

    <script src ="script.js"></script>
</body>
</html>

