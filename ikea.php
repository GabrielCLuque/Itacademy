<?php
require_once('clases/Mueble.php');
$mueble1 = new Mueble ('xd',1,1,1, 1, 2, tipo::silla);
$listamuebles=[$mueble1];


function registrarmueble(string $nom, float $alto, float $ancho, float $prof, float $precio, float $rating, Tipo $tipo, array &$listamuebles) :array{
    $newmueble = new Mueble($nom, $alto, $ancho, $prof, $precio, $rating, $tipo);
    $listamuebles[] = $newmueble;
    return $listamuebles;
}
function mueblemasbarato(array $listamuebles):array{
    $mueblebarato= $listamuebles[0];
for ($i= 1; $i < count($listamuebles); $i++){
if ($mueblebarato->precio < $listamuebles[$i]){
    $mueblebarato= $listamuebles[$i];
}
}
echo "el mueble mas barato es el " .  $mueblebarato->nom;

}
function mediarating(array $listamuebles):void{
    $media= 0;
for ($i= 1; $i < count($listamuebles); $i++){
$media += $listamuebles[$i];
}
echo "La media es" .  $media/count($listamuebles);

}


registrarmueble('d',1.0,1.0,1.0, 1.0, 2.0, tipo::silla,$listamuebles);

print_r($listamuebles);

//mediarating($listamuebles);
?>