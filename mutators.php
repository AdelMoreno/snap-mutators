<?php


/*@author Adel Moreno
* @versions 1.0.0
 *
 */

class animal {

	private $animalName;

	private $animalCount;

	/*get animal name*/

	public function getAnimalName() :string {
		return ($this->animalName);
	}

	/*checks and trims animal name to make sure it isn't malicious.*/

	public function setAnimalName(string $newAnimalName) : void {
		$newAnimalName = trim($newAnimalName);
		$newAnimalName = filter_var($newAnimalName,FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newAnimalName) === true) {
			throw(new \InvalidArgumentException("animal name is empty or insecure"));
		}
		}

	/*gets animal count*/

	public function getAnimalCount() : int {
		return ($this->animalCount);
	}

	/*checks to make sure that animalCount isn't less than zero*/
	public function setAnimalCount(int $newAnimalCount) : void {
		if($newAnimalCount < 0){
			throw(new \InvalidArgumentException("animal count can not be less than 0"));
		}
		}
}
