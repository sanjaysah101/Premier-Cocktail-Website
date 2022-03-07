<?php 
    if(isset($_POST['btn-send'])){
        $name=$_POST['name']; 
        $email=$_POST['email']; 
        $subject = $_POST['subject'];
        $msg = $_POST['message'];
        $phone = $_POST['phone'];

        $FromName="Premier Cocktail";
        $FromEmail="ssah59710@gmail.com";
        $ReplyTo=$email;
        $toemail="ssah59710@gmail.com";
        $message='Name:-'.$name.'<br>Email :-' .$email.'<br> Phone No:-'.$phone.'<br> Message:-'.$msg;
        // headers 
        $headers  = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        $headers .= "From: ".$FromName." <".$FromEmail.">\n";
        $headers .= "Reply-To: ".$ReplyTo."\n";
        $headers .= "X-Sender: <".$FromEmail.">\n";
        $headers .= "X-Mailer: PHP\n";
        $headers .= "X-Priority: 1\n";
        $headers .= "Return-Path: <".$FromEmail.">\n";


        if(empty($name) || empty($email) || empty($subject) || empty($msg))
        {
            header('location:index.php?error');
        }

        else
        {
            // $to = "ssah59710@gmail.com";
            if(mail($toemail, $subject, $message, $headers,'-f',$FromEmail))
            
            {
                header("location:index.php?success");
            }
        }
    }
    else
    {
        header("location:index.php");
    }
?>

