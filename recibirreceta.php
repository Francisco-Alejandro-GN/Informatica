<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tu receta</title>
<link href="estilococina.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#form1 {
	background-color: #FFF;
	border: 5px double #A3D3F1;
	padding: 10px;
	width: 512px;
	margin-right: auto;
	margin-left: auto;
}
-->
</style></head>

<body>
<h1>Tu receta</h1>
<p>Gracias por enviarnos tu receta:</p>
<hr />

<dl>
  <dt><strong>Tu nombre es:</strong></dt>
  <dd><?php echo (isset($_REQUEST['nombre']))?$_REQUEST['nombre']:'No lo has indicado'; ?></dd>
  <dt><strong>Tu e-mail es:</strong></dt>
  <dd><?php echo (isset($_REQUEST['email']))?$_REQUEST['email']:'No lo has indicado'; ?></dd>
  <dt><strong>El plato es:</strong></dt>
  <dd><?php echo (isset($_REQUEST['receta']))?$_REQUEST['receta']:'No lo has indicado'; ?></dd>
  <dt><strong>Del tipo:</strong></dt>
  <dd><?php echo (isset($_REQUEST['tipo']))?$_REQUEST['tipo']:'No lo has indicado'; ?></dd>
  <dt><strong>Necesita los ingredientes:</strong></dt>
  <dd><?php echo (isset($_REQUEST['ingredientes']))?$_REQUEST['ingredientes']:'No lo has indicado'; ?></dd>
  <dt><strong>Se prepara:</strong></dt>
  <dd><?php echo (isset($_REQUEST['preparacion']))?$_REQUEST['preparacion']:'No lo has indicado'; ?></dd>
  
</dl>
<p>&nbsp;</p>
  <p>Nos pondremos en contacto lo antes posible.</p>
  <p style="text-align:center;"><a href="http://www.aulaclic.es">www.aulaclic.es</a></p>
</body>
</html>
