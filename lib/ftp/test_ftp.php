<pre>
<?
	
	$ftp_server = "localhost";
	$ftp_user = "ek";
	$ftp_passwd = "secret";


	/* direct object methods */
	require_once "ftp.class.php";
	$ftp =& new FTP();
	if ($ftp->connect($ftp_server)) {
		if ($ftp->login($ftp_user,$ftp_passwd)) {
			echo "\n".$ftp->sysType() . "\n";
			echo $ftp->pwd() . "\n";
			echo date("r",$ftp->mdtm("7juli.txt.gz")) . "\n";
			echo $ftp->size("7juli.txt.gz")."\n";
			echo $ftp->raw("SYST")."\n";
			$ftp->mkdir("ftp_test");
			$ftp->chmod(777,"ftp_test");
			$ftp->rename("ftp_test","ftp__test");
			$ftp->rename("ftp__test","ftp_test");
			$ftp->site("CHMOD 777 ftp_test");
			$ftp->exec("touch ftp_file.txt");
			$ftp->delete("ftp_file.txt");
			$ftp->chdir("ftp_test");
			$ftp->cdup();
			print_r($ftp->nlist());
			echo "\n";
			print_r($ftp->rawlist());
			echo "\n";
			$ftp->get("Week.exe","Week.exe");
			$ftp->put("logo.gif","logo.gif");
			$ftp->delete("logo.gif");
			$ftp->rmdir("ftp_test");
		} else {
			echo "login failed: ";
			print_r($ftp->error_no);
			print_r($ftp->error_msg);
		}
		$ftp->disconnect();
		print_r($ftp->lastLines);
	} else {
		echo "connection failed: ";
		print_r($ftp->error_no);
		print_r($ftp->error_msg);
	}
	
	/* api methods */
	require_once "ftp.api.php";
	if ($ftp = ftp_connect($ftp_server)) {
		if (ftp_login($ftp,$ftp_user,$ftp_passwd)) {
			echo "\n".ftp_systype($ftp) . "\n";
			echo ftp_pwd($ftp) . "\n";
			echo date("r",ftp_mdtm($ftp,"7juli.txt.gz")) . "\n";
			echo ftp_size($ftp,"7juli.txt.gz")."\n";
			if (function_exists("ftp_raw")) echo ftp_raw($ftp,"SYST")."\n"; //PHP 5 CVS only
			ftp_mkdir($ftp,"ftp_test");
			if (function_exists("ftp_chmod")) ftp_chmod($ftp,777,"ftp_test"); //PHP 5 CVS only
			ftp_rename($ftp,"ftp_test","ftp__test");
			ftp_rename($ftp,"ftp__test","ftp_test");
			ftp_site($ftp,"CHMOD 777 ftp_test"); 
			ftp_exec($ftp,"touch ftp_file.txt");
			ftp_delete($ftp,"ftp_file.txt");
			ftp_chdir($ftp,"ftp_test");
			ftp_cdup($ftp);
			print_r(ftp_nlist($ftp,""));
			echo "\n";
			print_r(ftp_rawlist($ftp,""));
			echo "\n";
			ftp_get($ftp,"Week.exe","Week.exe",FTP_BINARY);
			ftp_put($ftp,"logo.gif","logo.gif",FTP_BINARY);
			ftp_delete($ftp,"logo.gif");
			ftp_rmdir($ftp,"ftp_test");
		} else {
			echo "login failed";
		}
		ftp_close($ftp);
	} else {
		echo "connection failed";
	}
?>
</pre>