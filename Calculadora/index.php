
<?php
Class Calculadora {
	
	private $n;

	public function __construct($numeroInicial){
		$this->n = $numeroInicial;;
	}
	public function somar($n1) {
		$this->n += $n1;
		return $this; 
	}
	public function subtrair ($n1){
		$this->n -=$n1;
		return $this;
	}
	public function multiplicar($n1){
		$this->n *= $n1;
		return $this;
	}
	public function dividir($n1){
		$this->n /= $n1;
		return $this;
	}
	public function resultado(){
		return $this->n;
	}
}

$calc = new Calculadora(10);
$calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
$resultado = $calc->resultado();  //22.5

echo "Resultado é :".$resultado;

#echo "2 + 10 = ".$calc->somar(2,10)."<br/>"; 
#echo "10 - 2 = ".$calc->subtrair(10,2)."<br/>";
#echo "10 * 2 = ".$calc->multiplicar(10,2)."<br/>";
#echo "10 / 2 = ".$calc->dividir(10,2)."<br/>"; 



#Class Calculadora {
	
	#private $n;

	#public function __construct($numeroInicial){
	#	$this->n = $numeroInicial;;
	#}

	#public function somar ($n1, $n2){
	#	return $n1 +$n2;
	#}
	#public function subtrair($n1,$n2){
	#	return $n1 - $n2;
	#}
	#public function multiplicar($n1,$n2){
	#	return $n1 * $n2;
	#}
	#public function dividir($n1,$n2){
	#	return $n1 / $n2;
	#}
#}
?>

