<!--Start of Contact Us Section-->
<section id="contactus" class="contactus wow">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" data-wow-duration="1.5s">
                <div class="title" data-wow-duration="1.5s">
                    <h1>contact us</h1>
                    <hr>
                </div>
            </div>
            <div class="contact col-xs-12">
                <?php
                    $errName = $errMail = $errMessage = "";
                    $fName = $email = $message = "";
                    $flag = TRUE;
                
                    function cleanData($data) {
                        $data = htmlspecialchars($data);
                        $data = trim($data);
                        $data = stripslashes($data);
                        return $data;
                    }
                
                    if($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $fName = $_POST['fName'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        if(empty($fName) && empty($email) && empty($message)) {
                            $errName = "Enter Your Name";
                            $errMail = "Enter Your Email";
                            $errMessage = "Enter Your Message";
                        }
                        
                        if(empty($fName)) {
                            $errName = "Enter Your Name";
                        }
                        else {
                            $fName = cleanData($fName);
                            if(!preg_match("/^[a-zA-Z ]*$/",$fName)) {
                                $errName = "Only Letters in ENGLISH & Space between each name";
                            }
                        }
                        
                        if(empty($email)) {
                            $errMail = "Enter Your Email";
                        }
                        else {
                            $email = cleanData($email);
                            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $errMail = "Not Valid Email MUST contain @ and .com";
                            }
                        }
                        
                        if(empty($message)) {
                            $errMessage = "Enter Your Message";
                        }
                        
                        if($fName && $email && $message) {
                            $flag = FALSE;
                            $fName = ucwords(cleanData($fName));
                            $email = cleanData($email);
                            $message = htmlspecialchars($message);
                            
                            require 'phpmailer/PHPMailerAutoload.php';
                            $m=new PHPMailer;
                            $m->isSMTP();
                            $m->SMTPDebug=3;
                            $m->SMTPAuth=true;
                            $m->SMTPAutoTLS=false;
                            $m->SMTPOptions = array(
                                'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                                )
                            );
                            $m->Host='smtp.gmail.com'; //SMTP HOST
                            $m->Port=587;
                            $m->Username='test@example.com';  //replace with your email address
                            $m->Password='PASSWORD';         //replace with your password
                            $m->SMTPSecure='tls';
                            $m->isHTML(false);
                            $m->CharSet='UTF-8';
                            $m->Subject='Message From Website'; //Subject Field of Sent Email
                            $m->Body=$message;

                            $m->SetFrom($email, $fName);
                            $m->AddReplyTo($email, $fName);

                            $m->AddAddress('test@example.com', 'myName'); //Recieved Email
                            if($m->send()) {
                                header('Location: thanks.php'); 
                                exit();
                            }
                        }  
                    }
                 ?>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'].'#contactus');?>">
                    <div class="form-group" data-wow-duration="1.5s">
                        <label for="usr">full name:</label><span class="require"> *</span>
                        <input placeholder="Be Proud of Your Full Name" type="text" name="fName" class="form-control" id="usr" value="<?php if($flag) echo $fName;?>">
                        <span class="error"><?php echo $errName; ?></span>
                    </div>
                    
                    <div class="form-group" data-wow-duration="1.5s">
                        <label for="pwd">your email:</label><span class="require"> *</span>
                        <input placeholder="wtm@example.com" type="text" name="email" class="form-control" id="usr" value="<?php if($flag) echo $email;?>">
                        <span class="error"><?php echo $errMail; ?></span>
                    </div>

                    <div class="form-group" data-wow-duration="1.5s">
                        <label for="comment">your message:</label><span class="require"> *</span>
                        <textarea placeholder="Feel Free in Writing Your Message" class="form-control" rows="5" id="comment" name="message"><?php if($flag) echo $message;?></textarea>
                        <span class="error"><?php echo $errMessage; ?></span>
                    </div>

                    <input class="btn btn-success col-xs-12" data-wow-duration="1.5s" type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
</section>
<!--End of Contact Us Section-->