<?php
	class TestConectionDB extends PHPUnit_Framework_TestCase {
		
		public function testConectionWithDB() {
			$conection = NULL;
			$conection = pg_connect("host=127.0.0.1 dbname=phprs port=3360 user=root password=phprs");

			if ($conection) {
			   	pg_close ($conexao);
				$this->assertTrue(true);
			} else {
			   	$this->assertTrue(false);
			}
	  	}
	}
?>