
<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if(isset($_POST['email']))
{

        $name=trim($_POST['name']);
        $email=$_POST['email'];
        $number = $_POST['number'];
        $address = $_POST['address'];
        $message=$_POST['message'];
        $to = 'sagarpestcontrol2002@gmail.com';
        $subject = 'A new email has arrived from your website morya luxury car care';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        // $headers .= 'From: your-email@example.com' . "\r\n"; // Add the "From" header here
        $headers .= 'From: sagarpestcontrol2002@gmail.com' ."\r\n"; // Add the "From" header here
        $body="<html><body><div style='background:#ffffff;border:solid 1px #3498db; padding:15px'>
          <h2 style='font-weight:italic;'> Dear Sir/Madam,</h2>
          <br>
          Hello, <br>
          You are receiving this mail from your website, one of the user wanted to contact you so you may contact them.
          <br><br>
                                        Name: $name<br>
                                        Phone Number: $number <br>
                                        Email Address: $email<br>
                                        Address: $address<br>
                                        message: $message
          </div></body></html>";
          // $result = "To =". $to. "<br>".
          //           "Subject =". $subject . "<br>".
          //          "Body =". $body . "<br>".
          //          "Message =". $message . "<br>";
          // var_dump($result) ;
        $result=mail($to,$subject,$body,$headers);
        if(!$result) {
          error_log("Email failed to send: " . error_get_last());
          die('Problem occurred while sending email!');
      }
        else
        {
          echo '<p class="alert alert-success">Your message has been send and we will reply you soon.</p>';
        }
        
       /* echo "<script>alert('Your query has been send and we will reply you soon.')</script>";
        echo "<script>document.getElementById('id02').style.display='none'</script>";*/
        
    //ob_end_flush();
}
?>