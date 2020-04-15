<?php
if(isset($_POST['submit']))
{
    if(empty($_POST['email']) || empty($_POST['message'])) 
    {
        echo "<script type='text/javascript'>";
        echo "alert('Your message was not sent due to missing details!');";
        echo "window.history.go(-1)"; 
        echo "</script>";
        //go back to the previous page
    }
    else
    {
 // ---------------------------------------------------------------
 $msg ='Email:  '.$_POST['email']  ."\n"
 .'Comment about website:  '.$_POST['message'];
 // ---------------------------------------------------------------
  $msgUser ='Thank you for contacting us ' .$_POST['email'] .' shortly you will receive email from us!'  ."\n"
 .'All the best! -- Queens Of Rock - Sponsored by Fontys University Of Applied Science!';
 //if there is no [.] infront it crashes, dot combines pieces of information in a string
 mail('kalina.at@yahoo.com', 'Comment from user',$msg);
 mail($_POST['email'],'No-Reply email',$msgUser);
 //php is sending email to the user and to the website owner at the same time
 echo "<script type='text/javascript'>";
 echo "alert('Thank you for contacting us. You will receive reply in short');";
 echo "window.history.go(-1)"; 
 echo "</script>";
 //receiving alert that something has happened and everything is fine
    }
}
else
{
    echo "<script type='text/javascript'>";
    echo "window.history.go(-1)"; 
    echo "</script>";
    //if the close button is clicked
}
?>
