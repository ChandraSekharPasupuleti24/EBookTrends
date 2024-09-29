<!DOCTYPE html>
<html>
<head>
  <title>EBookTrends</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <!-- Website Header -->
    <header>
    <nav class="navbar navbar-light bg-secondary">
        <a class="navbar-brand" href="#" style="color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;">
            <img src="https://media.istockphoto.com/id/1411701868/photo/magic-book-with-glitter-open-book-with-lights-glowing-in-dark-background.webp?b=1&s=170667a&w=0&k=20&c=YRAsEE8YSqO_oMc0vtFDcIFrEO-t3yDoN_MkJ51PAlY=" width="80" height="50" class="d-inline-block align-center" alt="">
            EBookTrends
        </a>
        <div style="text-align: right; font-size: 18px; margin-right: 50px;">

            <a href="#register" style="color: white; margin-right: 20px;" data-toggle="modal">Register</a>

            <a href="#login" style="color: white; margin-right: 20px;" data-toggle="modal">Login</a>

            <a href="addData.html" style="color: white; margin-right: 20px;">Add Data</a>

            <a href="#footer" style="color: white;">Contact Us</a>
        </div>
    </nav>
  </header>

    <!-- Register Modal -->
<div class="modal" id="register" tabindex="1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div id="regSuccessMessage" style="display: none; font-size: 20px; text-align: center; background-color: lightgreen; color: white">Registration successful!</div>
            <div class="modal-header">
                <h5 class="modal-title">Register</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <form method="post" action="index.php">
                <div class="modal-body">
                    Email<input type="email" class="form-control mt-2 mb-2" id="email" name="email" placeholder="name@example.com">
                    Password<input type="password" class="form-control mt-2 mb-2" id="password" name="password" placeholder="Enter Password">
                    Confirm Password <input type="password" class="form-control mt-2 mb-2" id="c_password" name="c_password" placeholder="Confirm Password">
                    <a href="#login" onclick="register_close()" data-toggle="modal" style="margin-left: 90%;">Login</a>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal">Close</button>
                    <button type="submit" name="register" onclick="validateRegisterForm()">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal" id="login" tabindex="1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="loginSuccessMessage" style="display: none; font-size: 20px; text-align: center; background-color: lightgreen; color: white">Login successful!</div>
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <form method="post" action="index.php">
                <div class="modal-body">
                    Email<input type="email" class="form-control mt-2 mb-2" id="email" name="email" placeholder="name@example.com">
                    Password<input type="password" class="form-control mt-2 mb-2" id="password" name="password" placeholder="Enter Password">
                    <a href="#register" data-toggle="modal" onclick="login_close()" style="margin-left: 50%;margin-right:15px;">Register</a>
                    <a href="#" onclick="showForgotPasswordForm()">Forgot password</a>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal">Close</button>
                    <button type="submit" name="login" onclick="validateLoginForm()">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Forgot Password Modal -->
<div class="modal" id="forgotPasswordModal" tabindex="2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Forgot Password</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" onclick="resetForgotPasswordForm()">&times;</button>
            </div>
            <form method="post" action="index.php">
                <div class="modal-body">
                    Email<input type="email" class="form-control mt-2 mb-2" id="forgotEmail" name="forgotEmail" placeholder="name@example.com">
                    <button type="submit" name="sendCode" onclick="sendResetCode()">Send Code</button>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" onclick="resetForgotPasswordForm()">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Enter Reset Code Modal -->
<div class="modal" id="resetCodeModal" tabindex="3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Enter Reset Code</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" onclick="resetResetCodeForm()">&times;</button>
            </div>
            <form method="post" action="index.php">
                <div class="modal-body">
                    Code<input type="text" class="form-control mt-2 mb-2" id="resetCode" name="resetCode" placeholder="Enter Code">
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="verifyResetCode()">Verify Code</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Set New Password Modal -->
<div class="modal" id="setPasswordModal" tabindex="4">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Set New Password</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" onclick="resetSetPasswordForm()">&times;</button>
            </div>
            <form method="post" action="index.php">
                <div class="modal-body">
                    New Password<input type="password" class="form-control mt-2 mb-2" id="newPassword" name="newPassword" placeholder="Enter New Password">
                    Confirm Password<input type="password" class="form-control mt-2 mb-2" id="confirmNewPassword" name="confirmNewPassword" placeholder="Confirm New Password">
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="updatePassword()">Update Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <div style="margin: 20px; text-align: center;">
    <h5><i>Books are a uniquely portable magic. That's the thing about books. They let you travel without moving your feet.<br> Books are mirrors: you only see in them what you already have inside you.</i></h5>
    </div>

  <div class="bg">
      <img src="https://images.unsplash.com/photo-1544210163-257effe9399e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGJvb2slMjBxdW90ZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="banner" class="center">
  </div>

<div class="main">
  <div class="left">
  <b id="heading">Future Is Here !</b>
  <div class="text"><p>A truly good book is something as natural, and as unexpectedly and unaccountably fair and perfect, as a wild flower discovered on the prairies of the West or in the jungles of the East. Books are the carriers of civilization. Without books, history is silent, literature dumb, science crippled, thought and speculation at a standstill.</div>
  </div>

  <div class="right row">
    <div class="embed-pics column">
      <img src="https://images.pexels.com/photos/4996868/pexels-photo-4996868.jpeg?auto=compress&cs=tinysrgb&w=600" alt="book" class="pics">
      <div class="text-left">Gain valuable knowledge</div>
    </div>
    <div class="embed-pics column">
      <img src="https://images.pexels.com/photos/3728085/pexels-photo-3728085.jpeg?auto=compress&cs=tinysrgb&w=600" alt="book" class="pics">
      <div class="text-left">Exercise your brain</div>
    </div>
    <div class="embed-pics column">
      <img src="https://images.pexels.com/photos/10863290/pexels-photo-10863290.jpeg?auto=compress&cs=tinysrgb&w=600" alt="book" class="pics">
      <div class="text-left">Enjoy entertainment</div>
    </div>
    <div class="embed-pics column">
      <img src="https://images.pexels.com/photos/1526049/pexels-photo-1526049.jpeg?auto=compress&cs=tinysrgb&w=600" alt="book" class="pics">
      <div class="text-left">Reduce stress</div>
    </div>
  </div>
</div>

<div id="slider" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1"></li>
      <li data-target="#slider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="back">
            <img src="https://media.istockphoto.com/id/855887724/photo/tree-from-pages-of-a-book.jpg?s=612x612&w=0&k=20&c=dKAOILWNzb56eBedItevdZ0uVy_NExISeQWlt3k1i2w=" alt="book" class="image">
            <div class="things">
            <h3><b>Applications</b></h3>
            <p ><br>Along with the rapid development of electronic technology, the appeal of information technology to students and teachers in domestic and international information education has become universal. Education-related departments aim to positively cultivate the professional information knowledge and skills of teachers. The use of information technology in instruction allows students to enhance their creativity and learning motivation<br><br>
            The application of information technology to e-book teaching activates teaching flexibility, and many teaching models, such as teaching by wandering around, interactive teaching, and blended teaching, are therefore derived to enhance the richness of teaching, the application of information technology to e-book teaching bridges the distance between instructors and students and leads to a deeper understanding of learning conditions of students, expanding the possibilities for content planning and teaching models.<br><br>The results give rise to suggestions enhancing enjoyment in learning and promoting higher motivation and more effective teaching.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="back"><br>
            <img src="https://media.istockphoto.com/id/480187760/photo/female-novelist-writing-on-the-laptop.jpg?s=612x612&w=0&k=20&c=xcmnzlkoTIE00DX8MvuRZPAKCNV8-gxBBVcZNJRq_uU=" alt="IOT" class="image">
            <div class="things">
            <h2 class="hd-2">In education and academia<br></h2>
            <p class="futr-cnt1">So, far I don't know if there is a real potential for e-book hardware in education, since I'd rather see all learners with notebooks that have tools that need to get things done. IMHO the real big potential for ebooks is the beach (or rather the bar since after one hour the beach gets boring). Or more generally speaking, situations were you want to read a lot (without working with the text) and where you can't bring piles of books. Commuting in a train would be another such situation. - Daniel K. Schneider <br><br>

            We believe that E-books defined as a form of "digital file" do have a future. In particular, we believe that formats that can be rendered appropriately on multiple devices will become more and more popular. As not (yet) perfect example we can cite this wiki. Pages can be read on a normal computer and on smaller devices (somewhat) and can be printed as PDF. Collections of articles can be rendered as PDF file or be bough through Pediapress in bookform.<br><br> Such flexible technologies will be very popular in the open educational resources movement.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="back"><br>
            <img src="https://media.istockphoto.com/id/476374336/photo/village-girl-studying-with-her-brother.jpg?s=612x612&w=0&k=20&c=nKWRCECuc9YkO67znqt9PPcvlqEvT55eGXlXa8IuRmo=" alt="IOT" class="image">
            <div class="things"><br>
              <h2 class="hd-2">Where we are<br></h2>
              <p class="futr-cnt1">We've assembled 400 of our most popular classics for you to read, free of charge. Add any of these titles to your bookshelf and they're yours for life.  We hope you enjoy these perennial works!</p><br>
              <div style="display: flex;">
                <div class="parent">
                  <img class="image1" src="https://media.istockphoto.com/id/543459500/photo/floating-blue-button-or-badge-with-download-symbol.jpg?s=612x612&w=0&k=20&c=DAG__-6GsK8M8eJ5DFoOo8e8LsdkrlUZuuMkg4eirak=" style="height: 80px;">
                  <div style="display: flex;" class="image-text">
                      <p style="font-size: 30px;">25000</p>
                      <p style="font-size: 30px;">+</p>
                  </div>
                </div>
                <div class="parent">
                  <img class="image1" src="https://media.istockphoto.com/id/533716116/photo/safety-data-access-computer-network-security-accessibility-and-authorization-concept.webp?b=1&s=612x612&w=0&k=20&c=Pw-gRCWWU9U-yvSjSgQ02ERYHHkWvYawgtDUOdHtSTQ=" style="height: 80px;">
                  <div style="display: flex;" class="image-text">
                    <p style="font-size: 30px;">30000</p>
                    <p style="font-size: 30px;">+</p>
                </div>
                </div>
                <div class="parent">
                  <img class="image1" src="https://media.istockphoto.com/id/1426616386/photo/magnifying-glass-on-laptop-keyboard-searching-or-data-security.webp?b=1&s=612x612&w=0&k=20&c=as5S9Aojba52k92cXlr4PzXTsAB8zUBlfUj1NiQrZqE=" style="height: 80px;">
                  <img class="image2" src="picturess/images-3.png" style="height: 40px;">
                  <div style="display: flex;" class="image-text">
                    <p style="font-size: 30px;">50000</p>
                    <p style="font-size: 30px;">+</p>
                </div>
                </div>
              </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="app">
  <div class="lefts">
  <b id="headings">Special about E-BOOKS</b><br><br>
  <div class="para">
    <p>We live in the age of electronic everything. eCommerce, eBanking, eTickets, eGift Cards, eCigarettes, and the list goes on.

        Why? Because people love the idea of doing everything from virtually anywhere on any device. With that being said, it’s no surprise that we’ve started revolutionizing the way we do just about everything.
        
        What started as a way to make everyday activities easier has made its way to our leisure activities: reading being one that comes to my mind right away. We’ve introduced eBooks as a way of making one of America’s favorite pastimes that much easier.
        
        Surprised? I’m not. But, what exactly is an eBook and what can it do? You’d think it’s what it sounds like, an electronic book. However, it’s a little more complicated than that.</p>
  </div>
  </div>
      <div class="rights">
        <div class="logos" style="background-color: #ffe4dd; margin-bottom: 100px;">
          <img src="https://images.pexels.com/photos/12721400/pexels-photo-12721400.jpeg?auto=compress&cs=tinysrgb&w=600" alt="fantasy" class="pict"><br>
          <b style="font-size: 28px;font-weight: 600px; margin-left: 20px; color: #f15b2c;">Fantasy</b><br>
          <p style="margin-left: 20px; text-align: justify; padding-right: 15px;">Fantasy literature is literature often but not always without any locations, events, or people from the real world.</p>
          <a href="https://www.wattpad.com/stories/fantasy" target="_blank" class="links"><b style="margin-left: 20px;">Read more>></b> </a>
        </div>
        <div class="logos" style="background-color: lightgrey; margin-bottom: 100px;">
            <img src="https://media.istockphoto.com/id/178988183/photo/house-in-bad-summer-thunderstorm.jpg?b=1&s=612x612&w=0&k=20&c=eGBU_FH5-RmTc0JEn1qJoTV-anvpXfPYWy4z76gbS4o=" alt="horror" class="pict"><br>
            <b style="font-size: 28px;font-weight: 600px; margin-left: 20px;">Horror</b><br>
            <p style="margin-left: 20px;text-align: justify; padding-right: 15px;">Horror is a genre of literature, film, and television that is meant to scare, startle, shock, and even repulse audiences.</p>
            <a href="https://www.wattpad.com/stories/horror" target="_blank" class="links"><b style="margin-left: 20px;">Read more>></b> </a>
        </div>    
      </div>
    <div class="rights">
      <div class="logos" style="background-color: lightgrey;">
          <img src="https://images.pexels.com/photos/3755511/pexels-photo-3755511.jpeg?auto=compress&cs=tinysrgb&w=600" alt="education" class="pict"><br>
          <b style="font-size: 28px; font-weight: 600px; margin-left: 20px; color: #2aa566;">Poetry</b><br>
          <p style="margin-left: 20px;text-align: justify; padding-right: 15px;">Poetry books capture feelings that are often elusive and put into words our deepest pain and strongest outrage.</p>
          <a href="https://www.wattpad.com/stories/poetry" target="_blank" class="links"><b style="margin-left: 20px;">Read more>></b> </a>
      </div>
      <div class="logos" style="background-color: #ffe4dd;">
        <img src="https://images.pexels.com/photos/7414102/pexels-photo-7414102.jpeg?auto=compress&cs=tinysrgb&w=600" alt="stories" class="pict"><br>
        <b style="font-size: 28px;font-weight: 600px; margin-left: 20px; color: #0e9cdc;">Stories</b><br>
        <p style="margin-left: 20px;text-align: justify; padding-right: 15px;"> A storybook is a narrative, either true or fictitious, designed to interest, amuse, or instruct the reader.</p>
        <a href="https://www.wattpad.com/stories/shortstory" target="_blank" class="links"><b style="margin-left: 20px;">Read more>></b> </a>
      </div>
    </div>

        <!-- Footer -->
        <footer style="background-color: aliceblue;" class="text-center text-lg-start" id="footer">

          <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      
            <div class="me-5 d-none d-lg-block">
              <span>Get connected with us on social networks:</span>
            </div>
      
            <div>
              <a href="https://www.facebook.com/chandu.aarush/" class="social-icon">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
              <a href="https://twitter.com/Aarush2412" class="social-icon">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
              <a href="https://myaccount.google.com/u/1/" class="social-icon">
                <ion-icon name="logo-google"></ion-icon>
              </a>
              <a href="https://www.instagram.com/chandu_aarush/" class="social-icon">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
              <a href="https://www.linkedin.com/in/pasupuleti-chandra-sekhar-435915237/" class="social-icon">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
              <a href="https://github.com/ChandraSekhar1224" class="social-icon">
                <ion-icon name="logo-github"></ion-icon>
              </a>
            </div>
      
          </section>
          <section>
            <div class="mb-2 mt-4">
  
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><ion-icon name="home-outline"></ion-icon> Visakhapatnam, AP, India</p>
              <p>
                <ion-icon name="mail-open-outline"></ion-icon></i>
                ebooktrends@gmail.com
              </p>
              <p><ion-icon name="call-outline"></ion-icon> + 91 9014640180</p>
            </div>
          </section>
      
          <div class="text-center p-4" style="background-color: grey;">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://ebooktrends.com/">ebooktrends.com</a>
          </div>
        </footer>

    <br>
    <script type="text/javascript">
        function validateRegisterForm() {
          var email = document.getElementById("email").value;
          var password = document.getElementById("password").value;
          var confirmPassword = document.getElementById("c_password").value;

          if (email === "" || password === "" || confirmPassword === "") {
              alert("Please fill in all fields.");
          }
          else if(password.length<6){
              alert("Password length should be greater than 6");
          }
          else if (password !== confirmPassword) {
              alert("Passwords do not match.");
          }
      }

    function validateLoginForm() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        if (email === "" || password === "") {
            alert("Please fill in all fields.");
        }
    }
    function showForgotPasswordForm() {
        $('#login').modal('hide');
        $('#forgotPasswordModal').modal('show');
    }

    function resetForgotPasswordForm() {
        document.getElementById('forgotEmail').value = '';
        $('#forgotPasswordModal').modal('hide');
        $('#login').modal('show');
    }

    function sendResetCode() {
        $('#forgotPasswordModal').modal('hide');
        $('#resetCodeModal').modal('show');
    }

    function resetResetCodeForm() {
        document.getElementById('resetCode').value = '';
        $('#resetCodeModal').modal('hide');
        $('#login').modal('show');
    }

    function verifyResetCode() {
        $('#resetCodeModal').modal('hide');
        $('#setPasswordModal').modal('show');
    }

    function resetSetPasswordForm() {
        document.getElementById('newPassword').value = '';
        document.getElementById('confirmNewPassword').value = '';
        $('#setPasswordModal').modal('hide');
        $('#login').modal('show');
    }

    function updatePassword() {
        document.getElementById('loginSuccessMessage').innerText = 'Password Updated Successfully';
        document.getElementById('loginSuccessMessage').style.display = 'block';
        resetSetPasswordForm();
    }
    </script> 
    <script src="homepage.js" type="text/javascript"></script> 
</body>
</html>


<?php
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if (empty($email) || empty($password) || empty($c_password)) {
        echo "Please fill in all fields.";
    } elseif ($password != $c_password) {
        echo "Passwords do not match.";
    } elseif (strlen($password) < 6) {
        echo "Password length should be greater than 6.";
    } else {
        $connection = mysqli_connect('localhost', 'root', '', 'ebooks') or die('connection failed');
        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        mysqli_query($connection, $query);
        echo "<script type='text/JavaScript'> 
              $('#login').modal('show');
              document.getElementById('loginSuccessMessage').innerText = 'Registration successful';
              document.getElementById('loginSuccessMessage').style.display = 'block';
              </script>";
    }
}

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email) || empty($password)) {
      echo "Please fill in all fields.";
  } else {
      $connection = mysqli_connect('localhost', 'root', '', 'ebooks') or die('connection failed');
      $query = "SELECT * FROM users WHERE email='$email'";
      $res = mysqli_query($connection, $query);

      if ($row = mysqli_fetch_assoc($res)) {
          if ($password == $row['password']) {
              echo '<script type="text/JavaScript"> 
                  alert("Successful login");
                  document.location = "homepage.html";
                  </script>';
          } else {
              echo '<script type="text/JavaScript"> 
                  alert("Invalid credentials");
                  </script>';
          }
      } else {
          echo '<script type="text/JavaScript"> 
                  alert("Invalid credentials");
                  </script>';
      }
  }
}

?>

