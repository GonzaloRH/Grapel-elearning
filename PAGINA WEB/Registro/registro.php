<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
<style type="text/css">
.a {
	color: #000;
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
}
.a #h {
	font-weight: bold;
	text-align: center;
}
#form1 label {
	text-align: right;
}
</style>
</head>

<body>
<table width="600" border="0" align="center" cellpadding="8" cellspacing="0" id="registro">
  <tr>
    <td width="290" class="a"><label for="registrarse">
      <div align="center"><strong>Registro de alumnos</strong></div>
    </label></td>
    <td width="290" class="a">&nbsp;</td>
  </tr>
  <tr>
    <td><label> </label><label>
      </label>
      <form id="form1" name="form1" method="post" action="">
        <label for="usuario"><strong>Nombre de usuario</strong></label>
        <input type="text" name="usuario" id="usuario" />
      </form></td>
    <td><form id="form7" name="form7" method="post" action="">
      <label for="nombre2"><strong>Nombre</strong></label>
      <input type="text" name="nombre2" id="nombre2" />
    </form></td>
  </tr>
  <tr>
    <td><form id="form2" name="form2" method="post" action="">
      <label for="nombre"><strong>Nombre<br />
      </strong></label>
      <input type="text" name="nombre" id="nombre" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form3" name="form3" method="post" action="">
      <p>
        <label for="primer apellido"><strong>Primer apellido</strong></label> 
      </p>
      <p>
  <input type="text" name="primer apellido" id="primer apellido" />
      </p>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form4" name="form4" method="post" action="">
      <p>
        <label for="segundo apellido"><strong>Segundo apellido</strong></label>
      </p>
      <p>
        <input type="text" name="segundo apellido" id="segundo apellido" />
      </p>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form5" name="form5" method="post" action="">
      <p>
        <label for="email"><strong>Correo electronico</strong></label>
        </p>
      <p>
        <input type="text" name="email" id="email" />
      </p>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form6" name="form6" method="post" action="">
      <label for="contraseña"><strong>Contraseña<br />
      </strong></label>
      <input type="text" name="contraseña" id="contraseña" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label>
      <div align="center">
        <input type="submit" name="registrarse" id="registrarse" value="Registrarse" />
      </div>
    </label></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>