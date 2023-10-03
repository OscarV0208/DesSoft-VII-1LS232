<?php
 
class ClaseBase {
public function test() {
echo "ClaseBase::test() llamada\n";
}
final public function masTests() {
echo "ClaseBase::masTests() llamada\n";
}
}

class ClaseHijo extends ClaseBase { public function masTests() {
echo "ClaseHijo::masTests() llamada\n";
}
}

//En esta salida, se llama al método test() de la clase base, que funciona correctamente y muestra "ClaseBase::test() llamada". Luego, 
//se llama al método masTests() de la clase base, también con éxito, y muestra "ClaseBase::masTests() llamada". Sin embargo, cuando se llama al método masTests() 
//en la clase hija, se muestra "ClaseHijo::masTests() llamada". Esto es un comportamiento inesperado, 
//ya que el método masTests() de la clase base está marcado como final, lo que significa que no debería ser sobrescrito en las clases hijas. 
//El error en el código es que la clase ClaseHijo está intentando sobrescribir un método final, lo cual no está permitido y debería generar un error de tiempo de ejecución,
 //pero en su lugar, PHP simplemente ejecuta la implementación de la clase hija.
 
?>

