<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO contact_form(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SereneSupport</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<script>
window.embeddedChatbotConfig = {
chatbotId: "zR0ukXXu4QAyblWYWT4cn",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="zR0ukXXu4QAyblWYWT4cn"
domain="www.chatbase.co"
defer>
</script>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"><i class="fas fa-brain"></i><strong>Serene</strong>Support </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">vision</a>
        <a href="#services">issues</a>
        <a href="#doctors">solutions</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.png" alt="">
    </div>

    <div class="content">
        <h3>Empathy in Every Click, Support in Every Word</h3>
        <p>  With just a click, users enter a space filled with compassion and understanding. Our commitment is reflected in every interaction, where words become a source of unwavering support.</p>
        <a href="#appointment" class="btn"> make an appointment  <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>Mental Health Workers</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1000+</h3>
        <p>satisfied patients</p>
    </div>

    

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>50+</h3>
        <p>Rehabilitation Centres</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Our</span> Vision </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>Community-Centered Support</h3>
            <p>We envision a world where mental health is prioritized, stigma is dismantled, and individuals are empowered to take control of their mental well-being. Through our platform, we aim to contribute to a global movement that fosters understanding, compassion, and open conversations about mental health.</p>
            <p>We are committed to providing accurate, up-to-date, and evidence-based information on mental health topics. </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> frequent <span>issues</span> </h1>

    <div class="box-container">

        <div class="box">
        <i class="fas fa-sad-tear"></i>
            <h3>Stigma and Discrimination</h3>
            <p>The stigma surrounding mental health can lead to discrimination, misunderstanding, and social isolation, exacerbating the challenges faced by individuals.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>Limited Access to Treatment</h3>
            <p>Many individuals struggle to access mental health services due to financial constraints, lack of available resources, or inadequate mental health infrastructure.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
        <i class="fas fa-users-slash"></i>
            <h3>Social Isolation</h3>
            <p>Mental health issues can contribute to social withdrawal, leading to feelings of loneliness and isolation, which further exacerbate mental health challenges.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
        <i class="fas fa-user-graduate"></i>
            <h3>Employment and Educational Challenges</h3>
            <p>Mental health struggles may affect one's ability to maintain employment or academic success, leading to financial instability and a sense of failure.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
        <i class="fas fa-piggy-bank"></i>
            <h3>Financial Strain</h3>
            <p>The costs associated with mental health treatment, coupled with potential employment challenges, can lead to financial strain and difficulty accessing necessary </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Relationship Difficulties</h3>
            <p>Mental health issues may strain relationships with family, friends, and romantic partners, as communication and interpersonal dynamics are often affected.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>solutions</span> </h1>

    <div class="box-container">

       

        <div class="box">
            <img src="image/doc-7.webp" alt="">
            <h3>AI-Powered Diagnosis and Guidance</h3>
            <span>Utilize our AI chatbot for preliminary assessments, providing instant support, information, and guidance based on user input. This tool aids in understanding mental health concerns and recommends appropriate next steps.</span>
            
        </div>
        <div class="box">
            <img src="image/docc-8.jpg" alt="">
            <h3>Appointment Booking with Experts</h3>
            <span>Seamlessly schedule virtual appointments with our team of mental health professionals. Our platform simplifies the process, ensuring timely access to the right experts for personalized support and counseling.</span>
            
        </div>
        <div class="box">
            <img src="image/docc-9.png" alt="">
            <h3>Tailored Wellness Plans</h3>
            <span>Receive personalized mental health and wellness plans crafted by professionals. These plans integrate AI-driven insights and user preferences, offering a roadmap for self-improvement, coping strategies, and holistic well-being.</span>
           
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> assisted<span> individuals</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/picc-1.jpg" alt="">
            <h3>Alexandra Thompson</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">: Alexandra found solace on our website, connecting with empathetic peers and accessing virtual counseling. The personalized wellness plans helped her navigate anxiety, fostering a path to resilience.</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>David Rodriguez</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">David, facing social isolation, discovered a supportive community through our platform. The live chat helpline provided immediate assistance, and he learned coping strategies, gradually rebuilding his social connections.</p>
        </div>

        <div class="box">
            <img src="image/picc-3.jpg" alt="">
            <h3>Emily Chen</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Emily utilized the AI chatbot for initial guidance, leading to a scheduled appointment with a mental health expert. Through counseling sessions, she gained tools to manage stress, improving her overall well-being.</p>
        </div>

    </div>

</section>

<!-- review section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> vision </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> issues </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> solutions </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            
        </div>

        <div class="box">
            <h3>our solutions</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> AI-Powered Diagnosis and Guidance </a>
            <a href="#"> <i class="fas fa-chevron-right"></i>Appointment Booking with Experts </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Tailored Wellness Plans </a>
          
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> 123@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> abc@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> delhi,india </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Tech Titans</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

