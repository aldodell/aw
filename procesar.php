<?php
try {
    include 'Mail.php';
    include 'Mail/mime.php';
   
   
    $text = 'Text version of email';
    $html = file_get_contents("php://input");
    $html = "<!DOCTYPE html><html lang=\"en\">$html</html>";
   
    $crlf = "\r\n";
    $hdrs = array(
        'From' => 'aldodell@gmail.com',
        'Subject' => 'Test mime message'
    );
    
     
    $mime = new Mail_mime($crlf);   
    $mime->setTXTBody($text);
    $mime->setHTMLBody($html);
    
    $body = $mime->get();
    $hdrs = $mime->headers($hdrs);
    $mail =& Mail::factory('mail');

    $mail->send('aldodell@gmail.com', $hdrs, $body);
    echo 'ok';
    
} catch (Exception $e) {
    echo $e->getMessage();
}