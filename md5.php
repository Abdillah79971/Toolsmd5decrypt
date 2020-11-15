<?php
error_reporting(0);
$pisah [1] = "270fc93ebedda547b9ed3e0a852cdd8c";

require "class_curl.php";
$banner = " \e[36;1m

 ##        ## #######   ######
 # #      # # #      #  #
 #  #    #  # #       # #
 #   #  #   # #       # ######
 #    ##    # #       #       #
 #          # #       #       #
 #          # #      #        #
 #          # #######   ######
 
 [+] Thanks To novalers123
 [+] Created By Abdillah7997
 [+] Link Github : https://github.com/Abdillah79971/\e[0;1m
 [+] Tools MD5 Decrypt
 [+] !!!DESCRIPTION!!!
 [+] Hack Until You Become A Hero
 [+] TEAM SEKIREI XPLOITER
 ";
 echo $banner;
 
 echo "Masukan Kriptograpi (MD5) : ";
 
 $input = trim(fgets(STDIN));
 
 $curl = new curl();
 $curl->cookies('cookies/'.md5($_SERVER['REMOTE_ADDR']).'.txt');
 $curl->ssl(0, 2);
 $url = "https://md5.gromweb.com/?md5=$input";
 $page = $curl->get($url);
 
	if(inStr($page, 'was succesfully reversed into the string')){
	 $pwd = getStr($page, '<em class="long-content string">','</em></p>');
	 print_r("\e[32;1mLIVE \e[0;1m| $input | " . $pwd. "\n");
	} else {
		print_r("\e[31;1mDIE\e[0;1m \e[32;1m:)\e[0;1m" . "\n");
	}
 
 ?>