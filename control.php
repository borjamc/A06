<?php 

Class Alumno

{

//Atributos

public $nombre;
public $edad;
public $curso;
public $ciclo;

//Getters

public function getnombre(){
return $this->nombre;

}

public function getedad(){
return $this->edad;

}

public function getcurso(){
return $this->curso;

}

public function getciclo(){
return $this->ciclo;

}


//Setters-Control

public function setnombre($nom){
$this->nombre=$nom;

}

public function setEdad($edad){
if ($edad>=18){
$this->edad=$edad;
}else{
$this->edad=18;
}
}
public function setCurso($curso){
if ($curso==1){
$this->curso=$curso;
}
elseif ($curso==2 ){
$this->curso=$curso;
}
else{
$this->curso=1;
}

}

public function setciclo($cic){
$this->ciclo=$cic;

}

}
$instituto = new Alumno;
echo $instituto->setnombre("Paco") . "<br>";
echo $instituto->getnombre() . "<br>";
echo $instituto->setEdad("12") . "<br>";
echo $instituto->getedad() . "<br>";
echo $instituto->setCurso("2") . "<br>";
echo $instituto->getcurso() . "<br>";
echo $instituto->setciclo("DAW") . "<br>";
echo $instituto->getciclo() . "<br>";


 ?>