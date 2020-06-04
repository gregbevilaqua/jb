<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	class connection {
		
		public static function open_connection() {
			mysql_connect(HOST,USERNAME,PASSWORD) or die(mysql_error());
			mysql_select_db(DATABASE) or die(mysql_error());
		}
		
		public static function close_connection() {
			mysql_close();
		}
		
	}
?>