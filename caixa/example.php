<?php

require_once 'src/Ftp.php';


try {
	$ftp = new Ftp;

	// Opens an FTP connection to the specified host
	$ftp->connect('ftp.leiturawebjre.com.br');

	// Login with username and password
	$ftp->login('backup@leiturawebjre.com.br', 'backupjre77');

	// Download file 'README' to local temporary file
	$temp = tmpfile();
	$ftp->fget($temp, '/home/wwwleitu/leiturawebjre.com.br/backup', Ftp::ASCII);

	// echo file
	echo '<pre>';
	fseek($temp, 0);
	fpassthru($temp);

} catch (FtpException $e) {
	echo 'Error: ', $e->getMessage();
}
