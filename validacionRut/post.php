<?php 

        $rut = $_POST['rut']; //recibo rut
        $rut_sin_puntos = str_replace('.', "", $rut); //elimino puntos
        $numerosentrada = explode("-", $rut_sin_puntos); //separo rut de dv
        $verificador = $numerosentrada[1]; //asigno valor de dv
        $numeros = strrev($numerosentrada[0]);  //separo rut de dv
        $count = strlen($numeros); //asigno la longitud del string en este caso 8
        $count = $count -1; //resto uno al contador para comenzar mi ciclo ya que las posiciones empiezan de 0
        $suma = 0;
        $recorreString = 0;
        $multiplo = 2;
        for ($i=0; $i <=$count ; $i++) {   //inicio ciclo hasta la posicion 7
            $resultadoM = $numeros[$recorreString]*$multiplo; // recorro string y multiplico 
    
            $suma = $suma + $resultadoM; // se suma resultado de multiplicacion por ciclo
            if ($multiplo == 7) { 
                $multiplo = 1;
            }
            $multiplo++;
            $recorreString++;
        }
        $resto = $suma%11;
        $dv= 11-$resto;
        if ($dv == 11) {
            $dv = 0;
        }
        if ($dv == 10) {
            $dv = K;
        }

        if ($verificador == $dv) {
          echo "el rut es valido";
        }else {
          echo "el rut es invalido";
        }

 ?>