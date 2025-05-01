<html>
    <head>
        <meta charset="utf-8">
    </head>

<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $file = $_FILES["file"];
    $time = date("Ymd_His");
    $FileName = $time. $name. ".png";
    $savePath = "uploads/" . $FileName; 
    $webpath = "http://localhost/uploads/".$FileName;

    // echo "檔案名稱: " . $_FILES["file"]["name"] . "<br/>";
    // echo "檔案名稱: " . $FileName . "<br/>";
    // echo "暫存檔名: " . $_FILES["file"]["tmp_name"] . "<br/>";
    // echo "檔案尺寸: " . $_FILES["file"]["size"] . "<br/>";
    // echo "檔案種類: " . $_FILES["file"]["type"] . "<br/>";

    //顯示輸入資料
    if(copy($_FILES["file"]["tmp_name"], $FileName)){
        echo "檔案上傳成功<br/>";
        unlink($_FILES["file"]["tmp_name"]);
        echo "姓名:" . $name . "<br/>";
        echo "信箱:" . $email . "<br/>";
        echo "<img src='$FileName' style='max-width: 300px; max-height: 300px;'><br/>";
    }else{
        echo "檔案上傳失敗<br/>";
    }

    //存入資料庫
    $link = mysqli_connect('localhost','root','','113_2_php'); 
    mysqli_set_charset($link,'utf8');
    //$sql = "INSERT INTO userweek12 (name, email, photo) VALUES ('".$name."','".$email."','".$FileName."')";
    $sql = "INSERT INTO userweek12 (name, email, photo) VALUES ('$name','$email','$savePath')";
    mysqli_query($link,$sql);

    //寄信
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '939207@gmail.com';                     //SMTP username
        $mail->Password   = 'qisq tvfu ocju yyuc';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->Charset = "UTF-8"; //設定郵件編碼
        
        //Recipients
        $mail->setFrom('939207@gmail.com', 'Mailer');
        // $mail->addAddress('a1123308@mail.nuk.edu.tw', '晴');     //Add a recipient
        $mail->addAddress($email);            //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        // $mail->Subject = '上傳檔案通知';
        // $subject = "=?UTF-8?B?".base64_encode($subject)."?=";
        // $mail->Subject = $subject;
        $subject = '上傳檔案通知';  // 先設定主旨
        $mail->Subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";  // 再轉編碼
        $mail->Body    = '檔案上傳成功<br/>姓名:' . $name . '<br/>信箱:' . $email . '<br/><img src="'.$webpath.'" style="max-width: 300px; max-height: 300px;">';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>

</html>