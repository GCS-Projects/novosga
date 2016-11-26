<?php
	class TestConectionDB_mysql extends PHPUnit_Framework_TestCase {
		
		public function testConectionWithDB() {
			
			DEFINE('DB_SERVER', '127.0.0.1');
			DEFINE('DB_USERNAME', 'root');
			DEFINE('DB_PASSWORD', 'phprs');
			DEFINE('DB_DATABASE', '');
			
			$conection = NULL;
			$conection = mysqli_connect("DB_SERVER", "DB_USERNAME", "DB_PASSWORD", "");

			if (!$conection) {
				$this->assertTrue(false);
			} else {
				mysql_close($conection); 
				$this->assertTrue(true);
			}
	  	}
	}
?>