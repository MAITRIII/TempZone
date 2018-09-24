<?php 
/*********************************Database****************************************/

/*
define("DB_HOSTNAME"					, "localhost");
define("DB_DATABASE"					, "mydev_myframe");
define("DB_USERNAME"					, "mydev_myframe");
define("DB_PASSWORD"					, "Myframe2020");
*/


define("DB_HOSTNAME"					, "localhost");
define("DB_DATABASE"					, "myframe");
define("DB_USERNAME"					, "root");
define("DB_PASSWORD"					, "");


/*********************************Login DB Table Details****************************************/
define("TABLENAME"					, "users");
define("USERNAME_COLUMN"			, "admin_name");
define("USEREMAIL_COLUMN"			, "admin_email");
define("PASSWORD_COLUMN"			, "admin_pass");


/*********************************Mail Parameters****************************************/
define("SMTP_HOST"					, "mail@geeconglobal.com");
define("SMTP_USER"					, "sysadmin@geeconglobal.com");
define("SMTP_PASS"					, "G33con0404");
define("FROM_EMAIL"					, "sysadmin@geeconglobal.com");
define("FROM_NAME"					, "My Frame Admin");
define("SUBJECT"					, "Activate Your Account");

/*********************************Mail Parameters****************************************/
define("WC_TITLE"					, "My Frame");
define("SIGN_IN_TITLE"				, "My Frame");
?>