<?php
class Person
{
    private $lastname;
    private $firstname;
    private $birthdaydate;


    public function setNameLastname ($lastname, $firstname){
        $this->lastname =$lastname; 
        $this->firstname =$firstname; 
    
    }
   
    public function getFullname(){
        return $this->firstname." ".$this->lastname;
    }


    public function setAnneeNaissance($birthdaydate){
        $this-> birthdaydate =$birthdaydate;

    } 


    public function getAge(){
        return date("Y") - $this->birthdaydate ."ans";
    }

}

class Student extends Person
{
    public $notes;
    public function addNote(int $note)
    {
         array_push($this->notes, $note);
    }
    public function getAverage(): float
    {
        return array_sum($this->notes) / count($this->notes);
    }
}
    $john = new Student();
    $john->setNameLastname("John","Doe");
    $john->setAnneeNaissance(1933);
    echo $john->getFullname();
    echo $john->getAge();


?>

