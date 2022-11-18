
<?php 
if(isset($_POST['submit']))
    {
    $to = "contact@mikbusiness.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Emailaddress 
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];


   

   


    $subject = "New form submissions";
   

$headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $message = '<html><body>';
        $message .= '<table border="1">
        <tr>
      
          <th>fname</th> 
          <th>lname</th>
          <th>email</th> 
          <th>pnumber</th> 
  
         
          
        </tr>
        <tr>
          
          <td>'.$fname.'</td>
          <td>'.$lname.'</td>
          <td>'.$email.'</td>
          <td>'.$pnumber.'</td>

    
      
         

        </tr>
      </table>';


   

   
    mail($to,$subject,$message,implode("\r\n",$headers));
  
   

     header("Location: https://mikbusiness.com/");
    
    }
?>
