<?php

if( ! empty( $_POST['fields'] ) ) {
	// variable
	$fromemail = 'any_site@my_site_com'; // from mail
	$to = "samaponte28@gmail.com"; // to mail

	/* subject */
	$subject = "Email from your site";	

	$fields = $_POST["fields"];
	$message = '';
	foreach ( $fields as $name => $field ) {
		if( ! empty( $field ) ) {
			$message .= $name . ': ' . $field . '<br/>';
		}
	}

	$attachments = $_FILES['file'];

	if( ! empty( $attachments['name'] ) ) { 
		$boundary = "--".md5(uniqid(time())); 

		//message text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($message));

		/* headers */
		$headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:" . $fromemail . "\r\n"; 
        $headers .= "Reply-To: " . $to . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

        //get file info
        $file_name = $attachments['name'];
        $file_size = $attachments['size'];
        $file_type = $attachments['type'];
        
        //read file 
        $handle = fopen( $attachments['tmp_name'], "r" );
        $content = fread( $handle, $file_size );
        fclose( $handle );
        $encoded_content = chunk_split( base64_encode( $content ) ); //split into smaller chunks (RFC 2045)

        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
        $body .= $encoded_content;
	} else {
		$headers = "From:" . $fromemail . "\r\n".
        "Content-Type: text/html; charset=ISO-8859-1\r\n" .
        "Reply-To: " . $to . "\n" .
        "X-Mailer: PHP/" . phpversion();
        
        $body = $message;
	}

	mail( $to, $subject, $body, $headers );
}