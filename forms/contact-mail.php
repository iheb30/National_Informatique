
    <?php
    if(isset($_FILES['attachment'])){
        $errors= array();
        $file_name = $_FILES['attachment']['name'];
        $file_size = $_FILES['attachment']['size'];
        $file_tmp = $_FILES['attachment']['tmp_name'];
        $file_type = $_FILES['attachment']['type'];
        
        
        $file_parts =explode('.',$_FILES['attachment']['name']);
        $file_ext=strtolower(end($file_parts));

        $expensions = array( 'jpg' , 'jpeg' , 'xlsx' , 'png' , 'pdf' );
        //$expensions = array("pdf");

        if(in_array($file_ext,$expensions)=== false){
           $errors="Extension non autorisée, veuillez choisir un fichier PDF.";
        }
        
        if($file_size > 4097152) {
           $errors='La taille du fichier doit être exactement de 2 Mo';
        }
        
        if(empty($errors)==true) {
           move_uploaded_file($file_tmp,"file/".$file_name); //The folder where you would like your file to be saved
           //echo "Votre message a bien été envoyé";
        }else{
           print_r($errors);
        }
     }
  
    use PHPMailer\PHPMailer\PHPMailer; 
    use PHPMailer\PHPMailer\SMTP;

    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';
    $from_name =  $_POST['name']  ;
    $from_email =  $_POST['email'] ;
    $object = $_POST['subject'] ;
    $message = $_POST['message'];
   

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'mail.smtp2go.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'webmaster.dev@brocksm.fr';
$mail->Password = 'bHU1a3KvN2F4SW0ww1';
$mail->SetFrom('webmaster.dev@brocksm.fr', 'Contact');
$mail->addAddress('webmaster.dev@brocksm.fr', 'ToEmail');
$mail->addAttachment("file/".$file_name);



   
//$mail->SMTPDebug  = 3;
//$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";}; //$mail->Debugoutput = 'echo';
$mail->IsHTML(true);


$mail->Subject = $object;
//$mail->Body    = " bonjour : \n" . $from_name .  " , \n\n E-Mail : \n" . $from_email . ", \n\n Message : \n" .$message ;
$mail->Body    = "<p>Nom:\n\n".$from_name ."</p><p>E-Mail:\n\n".$from_email."</p><p>Message:\n\n".$message;

$mail->AltBody = $from_name;

session_start();
  
if(!$mail->send()) {
    echo "Le message n'a pas été envoyé.";
    echo 'Mailer : ' . $mail->ErrorInfo;
} else {
    $_SESSION['success']=1;

    header ('location: contact.php');
    echo "Votre message a bien été envoyé";
}

 
?>

 