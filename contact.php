<title>Contact Legacy Martial Arts</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php
include 'includes/header.php';
?>

<?php
if (isset($_POST['submitted'])){
    
    require_once('sql/mysql_connect.php');
    
        $fullname = mysqli_real_escape_string($dbc, $_POST['fullname']);
        $email = mysqli_real_escape_string($dbc, $_POST['email']);
        $subject = mysqli_real_escape_string($dbc, $_POST['subject']);
        $message = mysqli_real_escape_string($dbc, $_POST['message']);
    
        // form validation
        $errors = array();
    
        if (empty($fullname)) 
            {
                $errors['fullname'] = "Full name required";
            }
        elseif (!preg_match("/^[a-zA-Z ]*$/", $fullname))
            {
                $errors['valid_fullname'] = "Valid full name required";
            }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors['email'] = "Valid email required";
            }
        elseif (empty($subject))
            {
                $errors['subject'] = "Subject required";
            }
        elseif (empty($message))
            {
                $errors['message'] = "Message required";
            }
        else
            {
          $sql = "INSERT INTO greenfield_highlands (firstname, lastname, email, subject, message)
                VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";
            
            mysqli_query($dbc, $sql);
            
          $url='thankyou.php';
  
          echo '<script>window.location = "'.$url.'";</script>';
              
         $email_to = "franze23@uwm.edu";
         $email_from = "mail.jfranzdesigns.com";
         $subject = $subject;
         $content = $firstname . " " . $lastname . " would like more information about " . $subject . " " . " \nEmail: " . " " . $email . " \n " . "\n" . $textarea;
         mail($email_to, $subject, $content);

            }  
    
    //end form validation
  
}   


?>

<body>
    
<div id="main">
    
     <h1 class="img-title">Contact Us</h1>
    
<div id="contact-title-img"></div>
    
    <div id="content">
        
        <br>
        
        <h3 id="legacy">Legacy Martial Arts</h3>
        
        <br>
        
        <div class="row contact-legacy">
    
            <div class="col-lg-6 col-md-6 col-sm-12">
            
                <p>21 E 3rd St, Sterling, IL, United States</p>

                
                <div id="contact-contact-info">
                    <span class="glyphicon glyphicon-envelope"></span><a href="mailto:MasterJane.Legacy@gmail.com" class="email">MasterJane.Legacy@gmail.com</a><br>
                    <span class="glyphicon glyphicon-earphone"></span><a href="tel:630-244-0580" class="phone">630-244-0580</a><br>
                </div>
                
                <br><br>
                
                 <iframe id="location-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.8647732229747!2d-89.69700948456172!3d41.78812787922949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8809b7da37315185%3A0x25beea3873ad075f!2s21+E+3rd+St%2C+Sterling%2C+IL+61081!5e0!3m2!1sen!2sus!4v1506006433551" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                
           </div>
            
             <div class="col-lg-6 col-md-6 col-sm-12">
                 
                 <form id="myForm" action="contact.php" method="post" >

                      <label for="fullname">Full Name * &nbsp;</label><input type="text" name="fullname" size="14" placeholder="Full Name" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'];?>">
                    <p class="error"><?php if(isset($errors['fullname'])) echo $errors['fullname']; ?></p>
                     <p class="error"><?php if(isset($errors['fullname'])) echo $errors['fullname']; ?></p>

                     <label for="email">Email *&nbsp;</label><input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                     <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>

                    <label for="subject">Subject * &nbsp;</label><input type="text" name="subject" size="12" placeholder="Subject" value="<?php if(isset($_POST['subject'])) echo $_POST['subject'];?>">
                      <p class="error"><?php if(isset($errors['subject'])) echo $errors['subject']; ?></p>

                    <label for="message">Message * &nbsp;</label>
                    <textarea rows="5" style="width:100%" name="message" placeholder="Message" value="<?php if(isset($_POST['message'])) echo $_POST['message'];?>"></textarea>
                     <p class="error"><?php if(isset($errors['message'])) echo $errors['message']; ?></p>
                    <br />
                     
                     <p align="center"><input type="submit" value="Send" name="Submit" id="submit">
                         <input type="hidden" name="submitted" value="TRUE" /></p>
                </form> 
                     
            </div>
        </div>
        
    </div>
    
 </div>
    
</body>


    
<?php
include 'includes/footer.php';
?>