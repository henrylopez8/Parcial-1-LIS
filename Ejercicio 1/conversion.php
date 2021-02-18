<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body >
<form   method="post" class="row m-0 bg-primary justify-content-center align-items-center vh-100">
<form action=”3.5.proc.php” method=”post” name=”conversor”>
<div class="col-sm-7  bg-white">
<h1 clas="text-center" > Conversion de monedas </h1>
<label> Introduzca el valor: </label><br /><br />
<input class="soloNumeros" id="amount" type="text" placeholder="1.00" name="amount" min="1" required  /><br> <br />

<select class="form-select form-select-lg mb-3" name ="cur1"aria-label=".form-select-lg example">
  <option selected>Selecciona tu moneda</option>
  <option value="USD">  Dolar Estadounidense</option> 
  <option value="EUR">Euro</option>
  <option value="JPY">Yen Japones</option>
  <option value="GBP">Libra Esterlina</option>
</select>

<select  class="form-select form-select-lg mb-3" name="cur2" aria-label=".form-select-lg example">
  <option selected>Selecciona la moneda que requieres:</option>
  <option value="USD">Dolar Estadounidense</option>
  <option value="EUR">Euro</option>
  <option value="JPY">Yen Japones</option>
  <option value="GBP">Libra Esterlina</option>
</select>
<tr>
<td><br>
<input type='submit' name='submit' value="Convertir"><br><br>
</td>
</tr>

<?php
if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];

if($cur1=="USD" AND $cur2=="EUR"){
    echo "<b>Tu cantidad convertida es:</b><br>";
echo $amount*0.83  ;
}

if($cur1=="USD" AND $cur2=="JPY"){
    echo "<b>Tu cantidad convertida es:</b><br>";
echo   $amount* 105.96 ;
}

if($cur1=="USD" AND $cur2=="GBP"){
    echo "<b>Tu cantidad convertida es:</b><br>";
echo $amount* 0.72 ;
}

if($cur1=="USD" AND $cur2=="USD"){
    echo "<b>Tu cantidad convertida es:</b><br>";
echo  $amount ;
}

if($cur1=="EUR" AND $cur2=="USD"){
    echo "<b>Tu cantidad convertida es:</b><br>";
echo  $amount* 1.21 ;
}

if($cur1=="EUR" AND $cur2=="JPY"){
    echo "<b>Tu cantidad convertida es:</b><br>";
echo   $amount*128.10  ;
}
if($cur1=="EUR" AND $cur2=="GBP"){
    echo "<b>Tu cantidad convertida es:</b><br>";
    echo   $amount*0.87;
    }
 if($cur1=="EUR" AND $cur2=="EUR"){
    echo "<b>Tu cantidad convertida es:</b><br>";
     echo   $amount  ;
        }
        if($cur1=="JPY" AND $cur2=="USD"){
            echo "<b>Tu cantidad convertida es:</b><br>";
            echo  $amount* 0.0094 ;
            }
            
            if($cur1=="JPY" AND $cur2=="JPY"){
                echo "<b>Tu cantidad convertida es:</b><br>";
            echo   $amount  ;
            }
            if($cur1=="JPY" AND $cur2=="GBP"){
                echo "<b>Tu cantidad convertida es:</b><br>";
                echo   $amount*0.0068;
                }
             if($cur1=="JPY" AND $cur2=="EUR"){
                echo "<b>Tu cantidad convertida es:</b><br>";
                 echo   $amount*0.0078 ;
                    }
                    if($cur1=="GBP" AND $cur2=="USD"){
                        echo "<b>Tu cantidad convertida es:</b><br>";
                        echo  $amount*1.39 ;
                        }
                        
                        if($cur1=="GBP" AND $cur2=="JPY"){
                            echo "<b>Tu cantidad convertida es:</b><br>";
                        echo   $amount * 147.09 ;
                        }
                        if($cur1=="GBP" AND $cur2=="GBP"){
                            echo "<b>Tu cantidad convertida es:</b><br>";
                            echo   $amount;
                            }
                         if($cur1=="GBP" AND $cur2=="EUR"){
                            echo "<b>Tu cantidad convertida es:</b><br>";
                             echo   $amount*1.15 ;
                                }

}

?>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</form>
</form>
</body>
</html>
