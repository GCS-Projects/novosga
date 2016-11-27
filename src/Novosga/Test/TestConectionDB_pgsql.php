<?php
	class TestConectionDB extends PHPUnit_Framework_TestCase {
		
		public function testConectionWithDB() {
			$conection = NULL;
			$conection = pg_connect("host=localhost dbname=test user=postgres");

			if ($conection) {
			   	pg_close ($conexao);
				$this->assertTrue(true);
			} else {
			   	$this->assertTrue(false);
			}
	  	}
	}
?>