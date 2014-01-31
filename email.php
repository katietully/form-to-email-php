<?php

// $_POST vars
$to 		= $_POST[ 'email_to' ];
$subject 	= $_POST[ 'email_subject' ];
$message 	= $_POST[ 'email_message' ];
$from 		= $_POST[ 'email_from' ];

// assemble the header
$headers 	=   'From: '. $from . "\r\n" .
				'Reply-To: ' . $from . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

// perform some basic error checking
if ( 
		!isset( $to ) 
		|| !isset( $subject )
		|| !isset( $message )
		|| !isset( $from )
) {
	echo "0";
	return false;
}

// attempt to send the email
if(
	@mail(
		$to
		, $subject
		, $message
		, $headers
	)
) { 
	echo "1"; 
} else {
  	echo "0";
}