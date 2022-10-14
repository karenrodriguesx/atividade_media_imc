<?php 
		$peso = $_GET['peso'];
		$altura = $_GET['altura'];
		
		$resultado = $peso/($altura*$altura);
		
        $situacao = " ";
		
		if ($resultado < 17){
            $situacao = "Muito abaixo do peso!";
        } else if ($resultado > 17 && $resultado < 18.49) {
            $situacao = "Abaixo do peso!";
        } else if ($resultado > 18.5 && $resultado < 24.99) {
            $situacao = "Peso normal!";
        } else if ($resultado > 25 && $resultado < 29.99) {
            $situacao = "Acima do peso!";
        } else if ($resultado > 30 && $resultado < 34.99) {
            $situacao = "Obesidade I!";
        } else if ($resultado > 35 && $resultado < 39.99) {
            $situacao = "Obesidade II";
        } else {
            $situacao = "Obesidade III";
        }

        echo '<h3> Seu IMC é: ' .$resultado. '<br> E seu IMC indica: ' .$situacao;
        
?>