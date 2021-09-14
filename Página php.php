<html>
  <head>
    <title>
      Yanbal
    </title>
  </head>
  <body>
  <font color='White'
>
  <div align='center'>
  <?php include 'encabezado.php' ;?>
  </div><br>
  </font>
<DOCTYPE! html>
<html>
	<head>
	</head>
	<body bgcolor=#EA843A



	</body>
</html>

<div align='center'>
<font color='White'>Brenda Salgado </font>
</div><br>

<div align='center'>
<font color='White'> Multinacional Yanbal, compañia de productos de belleza y cuidado personal </font>
</div><br>

<div align='center'>
<h1>¿Qué producto consumes más? </h1>
<form action="actionGet.php" method="get">
  Nombre Cliente: <input type="text" name="Nombre" /><br /><br />
  Nombre Producto: <input type="text" name="Nombre" /><br /><br />
  Sugerencias,quejas o reclamos<br /> <input type="text" name="Sugerencias" /><br /><br />
  <input type="submit" name="submit" value="Submit" />
</form>
<div>

<?php

class persona {
  public $fun1;
  public $fun2;
  public function __construct($fun1, $fun2) {
    echo "<br>", "Funcionaria Brenda Salgado, especialista en ",$this->fun1 = $fun1;
    echo "<br>","Funcionaria Marina Florez, especialista en  ",  $this->fun2 = $fun2;
  }
}
$p = new persona("Ciberseguridad e infraestructura", "electricidad, redes  e infraestructura");
?> 

<div align='center'>
    Tecnologas en implementacion de infraestructura tecnologica de la informacion y las comunicaciones
</div><br>

<div align='center'>
<?php
interface edad {
  public function makeSound();
}

class yanbal implements edad {
  public function makeSound() {
    echo '<font color="White"> Yanbal tiene 54 años, esta gran empresa fue fundada en 1967 por Fernando Belmont Anderson y Eduardo Belmont Anderson </font>';
  }
}
$myObj1 = new yanbal();
$myObj1->makeSound();


