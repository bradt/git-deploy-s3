<?php
// Amazon Web Services (AWS) credentials
$aws_key = '';
$aws_secret = '';

// Files and directories to upload to / delete from S3
// Local path => S3 bucket name / object path
$paths = array(
	'public_html/assets/css/style.css' => 'assets-spiceweasel-com/css/style.css',
	'public_html/assets/images' => 'assets-spiceweasel-com/images',
	'public_html/assets/js' => 'assets-spiceweasel-com/js'
);

// Path to YUI Compressor
$yuic_path = dirname( __FILE__ ) . '/yuicompressor-2.4.7.jar';

// File extensions to run through YUI Compressor (if defined above)
$yuic_file_extensions = array( 'js', 'css' );

