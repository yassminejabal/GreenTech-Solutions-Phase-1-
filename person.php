<?php
// class person{
//     protected string $name;
//     protected int $age;

//     public function setAge($a){
//         if($a>0){
//             $this->age =$a;
//         }
//     }
//     public function __construct($name,$age) {
//         $this->name = $name;
//         $this->setAge($age);
//     }
//     public function afficher(){
//         echo $this->name;
//         echo $this->age;
//     }

// }



// class User extends person{
//     private string $password;
    
//     public function __construct(string $name,int $age,string $password)
//     {
//         $this->password = $password;
//         parent::__construct($name, $age);
//     }
//     public function afficher()
//     {
//         parent::afficher();
//         echo $this->password;
//     }
// }


// (new User("dzfze",2,"sqdz"))->afficher();