<?php
	class TestConectionDB extends PHPUnit_Framework_TestCase {
		
		public function testConectionWithDB() {
			$conection = nil;
			$conection = pg_connect("host=172.17.0.2 dbname=phprs port=3360 user=root password=phprs")

			if ($conection) {
			   	pg_close ($conexao);
				$this->assertTrue(true);
			} else {
			   	$this->assertTrue(false);
			}
	  	}
	}
?>