<?php 
enum tipo: string{
    case silla= 'silla';
    case mesa= 'mesa';
}
class Mueble{
public  string $nom;

public array $medidas=[];
public float $precio;
public float $rating;
public tipo $tipo;

function __construct(string $nom,float $alto,float $ancho, float $prof, float $precio, float $rating, tipo $tipo){
$this->nom=$nom;
$this->medidas=[$alto,$ancho,$prof];
$this->precio = $precio;
$this->rating= $rating;
$this->tipo= $tipo;
}
function getnom (){
    return $this->nom;
}
}
?>

