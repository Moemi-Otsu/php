<?php

trait PersonTrait {
		
		public function getPerson() {
				echo "田中さん";
		}
}

class Person {
		use PersonTrait;
}

$person = new Person();
$person->getPerson();