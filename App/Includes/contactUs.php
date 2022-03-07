
    <!-- ****************** Contact US Start *********************** -->

    <section class="contactUS container" id="contactUs">
        <div class="title">
            <h2>Contact US !</h2>
            <p>We are pleaser to help you.
            </p>
        </div>
        <div class="wrapper">
            <div class="visitUs">
                <!-- <div class="contactUs"> -->
                <!-- <h3>Reach Us</h3> -->
                <a href="tel:00447938655815"><i class="fas fa-phone-volume"></i> 00447938655815</a>
                <a href="mailto:premiercocktailgroup@gmail.com"><i class="fas fa-envelope-open-text"></i>
                    premiercocktailgroup</a>
                <!-- </div> -->
                <address><i class="fas fa-map-marker-alt"></i> London</address>
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/premiercocktailsgroup/"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="contactUsForm">
                <h3>Send Us Message: </h3>
                <?php 
                    $Msg = "";
                    if(isset($_GET['error']))
                    {
                        // $Msg = " Please Fill in the Blanks ";
                        $Msg = "<script> alert('Sorry!!! Your message has not been sent.')</script>";
                        echo '<div class="alert alert-danger">'.$Msg.'</div>';
                    }
                    
                    if(isset($_GET['success']))
                    {
                        $Msg = "<script> alert('Thank you!!! Your message has been sent. We will reply as soon as possible.')</script>";
                        echo '<div class="alert alert-success">'.$Msg.'</div>';
                    }
                        
                ?>
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="uName" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone: </label>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="sub">Subject: </label>
                        <input type="text" name="subject" id="sub">
                    </div>
                    <div class="form-group">
                        <label for="message">Message: </label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn" name="btn-send">Send</button>
                </form>
            </div>
        </div>
    </section>

    <!-- ****************** Contact US End *********************** -->