<?php
	class TestConectionDB_mysql extends PHPUnit_Framework_TestCase {
		
		public function testConectionWithDB() {
			
			DEFINE('DB_SERVER', 'localhost');
			DEFINE('DB_USERNAME', 'root');
			DEFINE('DB_PASSWORD', '');
			DEFINE('DB_DATABASE', 'test');
			
			$conection = NULL;
			$conection = mysqli_connect("DB_SERVER", "DB_USERNAME", "DB_PASSWORD", "DB_DATABASE");

			if (!$conection) {
				$this->assertTrue(false);
			} else {
				mysql_close($conection); 
				$this->assertTrue(true);
			}
	  	}
	}
?>