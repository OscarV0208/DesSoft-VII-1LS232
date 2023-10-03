<?php
session_start();
class NumerosPares {
        private $numerosPares = array();

        public function agregarNumero($numero) {
            if ($numero % 2 == 0) {
                $this->numerosPares[] = $numero;
                $_SESSION['numeros_pares'] = $this->numerosPares;
            } else {
                echo "<p>Por favor, introduce un número par.</p>";
            }
        }

        public function obtenerNumerosPares() {
            return isset($_SESSION['numeros_pares']) ? $_SESSION['numeros_pares'] : array();
        }
    }
?>