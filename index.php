<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier Cocktail</title>
    <!-- main CSS for all -->
    <link rel="stylesheet" href="Assets/CSS/main.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
    <!-- ***************** Favicons ******************************* -->
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="Assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Assets/favicon/favicon-16x16.png"> -->
</head>

<body>
    <!-- ****************** Header Section Start ***************** -->
    <header>
        <!-- navigation bar  -->
        <?php include(ROOT_PATH."/App/includes/nav.php"); ?>

        <!-- hero Image -->
        <div class="hero-image">
            <div class="hero-text">
                <img src="Assets/Images/Premier Cocktail re-logo.png" alt="" srcset="">
                <h1 class="title">Premier Cocktails</h1>
                <p class="sub-title">The best way to experience our wide collection of Cocktail.</p>
                <a href="#contactUs" class="btn">Contact Us</a>
                <!-- <button class="btn"> Contact Us</button> -->
            </div>
        </div>
    </header>
    <!-- ****************** Header Section End ***************** -->


    <!-- ***************** AboutUs Section Start **************** -->
    <section class="aboutUs container" id="about">
        <div class="title">
            <h2>About Us !</h2>
            <p>Premier cocktails passion for amazing cocktails and services. 
            </p>
        </div>
       <div class="about-img">
           <div class="img" center>
               <!-- <img src="Assets/Images/cocktail2.jpg" alt=""> -->
               <img src="https://thumbs.dreamstime.com/b/barman-pouring-whiskey-front-whiskey-glass-bottles-black-table-reflection-57858319.jpg" style="width:100%">
           </div>
            <div class="aboutUsContent">
                <p>
                    We prefer services for the wedding bar tendering, private bar tending, mixturelogists service. We believes that using the freshest ingredients produces the best results. 
                </p><br><br>
                <p>

                    We prepared and obsessed with creating customized menus and culinary masterpieces for our clients. Premier cocktail is the company found on the solid family to operated business principle of trust and service.
                </p>
            </div>
       </div>
    </section>
    <!-- ***************** AboutUs Section End **************** -->  
    
    <!-- ****************** Service Section Start ************** -->
    <section class="aboutUs container" id="services">
        <div class="title">
            <h2>Our Services !</h2>
            <p>
            </p>
        </div>
       <div class="about-img">
           <div class="aboutUsContent">
                <p>A service of premier cocktail has greater wide service with happiness classic cocktails, signature martinis, signature twists and mocktails are some trending services. We prefer service for wedding, private events like anniversary, birthday party and other types of events.
                </p>
            </div>
            <div class="img" center>
                <!-- <img src="Assets/Images/cocktails glass.jpg" alt=""> -->
                <img src="https://media.istockphoto.com/photos/cocktails-picture-id504754220?b=1&k=20&m=504754220&s=170667a&w=0&h=KM1YKwIUIRnEr2s84RKN_vrWgWs60SZi7TaW-KAYdOM=" alt="">
    
           </div>
       </div>
    </section>
    <!-- ****************** Service Section end ************** -->
    <!-- Recent Photo -->
    <!-- <section class="services container" id="services">
        <div class="title">
            <h2>Recent Photos!</h2>
            
                </p>
            </div>
            
            <div class="image-slide">
                <div class="img">
                    <img src="Assets/Images/cocktail (2).jpg" alt="">
                </div>
                <div class="img">
                    <img src="Assets/Images/cocktail.jpg" alt="">        
                </div>
                <div class="img">
                    <img src="Assets/Images/cocktails glass.jpg" alt="">        
                </div>
            </div>
                    
        </section> -->
    <?php include(ROOT_PATH."/App/Includes/recentImages.php"); ?>
    <!-- Recent Photo -->







   <?php include(ROOT_PATH."/App/Includes/contactUs.php"); ?>
   <?php include(ROOT_PATH."/App/Includes/footer.php"); ?>

   <!-- <script>
       document.body.contentEditable = true;

   </script> -->
</body>

</html>