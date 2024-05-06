<?php

class producto {
    protected string $nombre;
    public int $precio;
    public bool $disponible; 

    public function __construct (string $nombre, int $precio, bool $disponible);

 {
    $this-> nombre = $nombre; 
    $this-> precio = $precio;
    $this-> disponible = $disponible; 
 }

 public function MostrarProducto(){
    echo "el producto es:". $this-> nombre . "y su precio es de: " . $this-> precio; 
 }

 public function GetNombre() : string {
    return $this->nombre; 
 }

 public function SetNombre(string $nombre){
    $this->nombre = $nombre;
 }

}

$producto = new producto( 'tablet, 200, true');
echo $producto->nombre;
echo $producto->GetNombre();
$producto->SetNombre('Nuevo Nombre');
echo $producto->GetNombre();

?>