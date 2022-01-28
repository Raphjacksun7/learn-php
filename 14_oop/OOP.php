<?php 


class Personne {
 
   protected $nom = NULL;
   protected $prenom = NULL;
   protected $age = NULL;

   function present() {
    echo "My name is $this->nom $this->prenom";
 }

    function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }


    function set_nom($nom){
        $this->nom = $nom;
    }


    function set_prenom($prenom){
        $this->prenom = $prenom;
    }

    function get_nom(){
       return $this->nom;
    }

    function get_prenom(){
        return $this->prenom;
    }

}


class Eleve  extends Personne{
    protected $classe = NULL;

    function __construct($nom , $prenom , $classe) {
        parent::__construct($nom,$prenom);
        $this->classe = $classe;
    }

    function setNom($nom){
        $this->nom = $nom;
    }

}

class Assidute extends Eleve implements Toto{
    private $assidut = NULL;

    function __construct($nom , $prenom , $classe, $assidut) {
        parent::__construct($nom,$prenom,$classe);
        $this->assidut = $assidut;
    }

    function present() {
        echo "My name is $this->nom $this->prenom and I'm at $this->classe's class. Does am assiduous ?  $this->assidut";
    }

    function lavabo():string {

    }

}


interface Toto {
    // private $nono = NULL;
    // function __construct(){
        
    // }
    function lavabo(): string;

}
