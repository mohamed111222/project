

<!DOCTYPE html>
<html>
<head>
	<title>conversion_currency</title>
	<style type="text/css">
		
		  body {text-align: center ; background:#AFEEEE;  border: 4px solid black; height: 800px}
		  img {width:250px ;  }
		  fieldset {width:500px;position: relative;right: -400px }
		   input {margin: 4px auto; }
		   form {padding: 10px}
	    hr {border: 3px groove white}

	</style>
	<script type="text/javascript">
		function thanking()
		{
			"use strict";
			alert("THANK U FOR USING OUR WEBSITE ");
		}

	</script>
</head>
<body>

<?php  
if ( isset($_POST['enter'])) {

	 $var1= $_POST['riyal'] ;
	 $result1= $var1 * 5 ;
	 $var2 = $_POST['dollar'];
	$result2 = $var2  * 18.10; 
	 $var3 = $_POST['dinar'];
	$result3 = $var3 * 60; 
}


 
?>

<h2><q>Her's U are Welcome, available currency</q></h2>
<img src="https://images.akhbarelyom.com/images/images/large/20180924110408674.jpg  ">

 <dl>         <!-- description list-->
 	<dt><b><mark>This_Only_Currencies</mark></b> </dt> <br> <!--description title-->
	<dd>=><em> RIYAL_SAUDI</em></dd>
	<dd>=><em> DOLLAR_USD</em></dd>
	<dd>=><em> DINAR_KWD</em></dd>
 </dl>

<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
	<fieldset><legend>examination</legend>
	<label>enter currencyRIYAL  : </label><input type="text" name="riyal"  ><br>
	<label>enter currencyDOLLAR : </label><input type="text" name="dollar"   ><br>
	<label>enter currencyDINAR : </label><input type="text" name="dinar"    ><br>
	</fieldset>
	<br> <hr><br>
	<fieldset><legend>Results</legend>
	<label>res_RIYAL : </label> <input type="text" name="result" value="<?php echo $result1 .' L.E';?>" ><br>
	<label>res_DOLAR : </label> <input type="text" name="result" value="<?php echo $result2 . ' L.E';?>" ><br>
	<label>res_DINAR : </label> <input type="text" name="result" value="<?php echo $result3 . ' L.E';?>" ><br>
	<input type="submit" name="enter" value="show result" >
	<button onclick="thanking()">Press_here</button>
 	 </fieldset>

 </form>







</body>
</html>

