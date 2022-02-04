   <?php
    /*******************************************************************************************
     * Objetivo: Arquivp de funções matemáticas que poderá ser utilizado dentro do projeto
     * Autor: Gean
     * Data: 04/02/2022
     * Versão: 0.1
     *******************************************************************************************/

	//criando funcão para calcular as operações matemáticas
	function operacaoMatematica($numero1, $numero2, $operacao){

		//declaração de variaveis locais da função
		$num1 = (double) $numero1;
		$num2 = (double) $numero2;
		$result = (double)0;
		$tipoCalculo = (string) $operacao;

		switch($tipoCalculo){

			case"SOMAR":
				$result = $num1 + $num2;
			break;
			case"SUBTRAIR":
				$result = ($num1 - $num2);
			break;
			case"MULTIPLICAR":
				$result = ($num1 * $num2);
			break;
			case"DIVIDIR":
				if($num2 == 0)
					 echo(ERRO_MESG_CARACTER_INVALIDO_TEXTO);
				 else
				$result = ($num1 / $num2);

			break;

			default:
			//processamento caso não entre em nenhuma das opções
				}
			$result = round($result, 2);
		
		return $result;
	}


?>