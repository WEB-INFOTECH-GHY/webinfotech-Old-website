<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$reference = $_POST['reference'];
$pageurl = $_POST['pageurl'];
$email_1="webinfotech014@gmail.com";
/*Content*/

$html = '<h1>Contact us Mail</h1>
<table border="1">
    <tbody>
    	<tr>
    		<th>Name</th>
    		<th>Email</th>
    		<th>Mobile</th>
    		<th>Message</th>	
    	</tr>
    	<tr>
    		<td>'.$name.'</td>
    		<td>'.$email.'</td>
    		<td>'.$mobile.'</td>
    		<td>'.$reference.'</td>		
    	</tr>
    	
    </tbody>
</table>';
         
    // Validate reCAPTCHA box 
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 

        // Google reCAPTCHA API secret key 
        $secretKey = '6LcegrIZAAAAAGlPlVhfvoR69DPuXY6m844Lrn8Y'; 
    
         
        $fields = [
            'response' => $_POST['g-recaptcha-response'],
            'secret' => $secretKey,
        ];
        
        //url-ify the data for the POST
        $fields_string = http_build_query($fields);
        
        //open connection
        $ch = curl_init();
        
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        
        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        
        //execute post and return the results
        $response = curl_exec($ch);
        
        curl_close($ch);
        $responseData = json_decode($response, true);
    
        // If reCAPTCHA response is valid 
        if($responseData['success']){ 
            $froms = new SendGrid\Email($name, $email);
            $subject = "WEBINFOTECH";
            $to = new SendGrid\Email("WEBINFOTECH", $email_1);
             $content = new SendGrid\Content("text/html",$html);
            
            /*Send the mail*/
            $mail = new SendGrid\Mail($froms, $subject, $to, $content);
            $apiKey = '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';
            $sg = new \SendGrid($apiKey);
            
            /*Response*/
            $response = $sg->client->mail()->send()->post($mail);
            if( $response) {
                header('Location: ../'.$pageurl.'?msg=1');
            }else{           
                header('Location: ../'.$pageurl.'?msg=2');
            }
        }else{ 
             header('Location: ../'.$pageurl.'?msg=3'); 
        } 
    }else{ 
         header('Location: ../'.$pageurl.'?msg=4'); 
    } 
?>

<!--Print the response-->
<pre>
    <?php
    var_dump($response);

    ?>
</pre>