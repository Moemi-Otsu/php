<?php

class Staff {
		
		public $name;
		public $age;
		
		public function __construct($name) {
				$this->name = $name;
		}
		
		public function Hello() {
				echo "hi, i am $this->name!";
		}
}

$tanaka = new Staff("tanaka");

echo $tanaka->name;

$tanaka->Hello();