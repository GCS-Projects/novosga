<?php
	class TestConectionDB_mysql extends PHPUnit_Framework_TestCase {
		
		public function testConectionWithDB() {
			$conection = NULL;
			$conection = mysql_connect("172.17.0.2", "root", "phprs");
			if (!$conection) {
				$this->assertTrue(false);
			} else {
				mysql_close($conection); 
				$this->assertTrue(true);
			}
	  	}
	}
?>