
<?php 
if(isset($_POST['submit']))
    {
    $to = "contact@mikbusiness.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Emailaddress 
    
    $fname = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $reason = $_POST['contact reason'];
    $message = $_POST['Message'];


   

   


    $subject = "New form submissions";
   

$headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $message = '<html><body>';
        $message .= '<table border="1">
        <tr>
      
          <th>fname</th> 
          <th>email</th>
          <th>phone</th> 
          <th>reason</th>
          <th>message</th> 
  
         
          
        </tr>
        <tr>
          
          <td>'.$fname.'</td>
          <td>'.$email.'</td>
          <td>'.$phone.'</td>
          <td>'.$reason.'</td>
          <td>'.$message.'</td>

    
      
         

        </tr>
      </table>';


   

   
    mail($to,$subject,$message,implode("\r\n",$headers));
  
   

     header("Location: https://mikbusiness.com/");
    
    }
?>