<?php

final class ClaseBase { public function test() {
echo "ClaseBase::test() llamada\n";
}
// Aquí da igual si se declara el método como
// final o no
final public function moreTesting() {
echo "ClaseBase::moreTesting() llamada\n";
}
}

class ClaseHijo extends ClaseBase {
}

//La salida de este programa significa que la clase hijo meditante el "extense" esta intentando heredar de la clase "ClaseBse"
//Pero debido a que esta clase fue declarada como "final" la clase no puede ser heredada ni extendida y por consiguiente manda un error
?>
