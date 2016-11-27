<?php
	class TestConectionDB_mysql extends PHPUnit_Framework_TestCase {
		
		public function testConectionWithDB() {
			
			$conection = NULL;
			$conection = mysqli_connect("localhost", "root", "", "test");

			if (!$conection) {
				$this->assertTrue(false);
			} else {
				mysql_close($conection); 
				$this->assertTrue(true);
			}
	  	}
	}
?>