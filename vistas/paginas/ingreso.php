<!DOCTYPE html>
<html>
<head>
    <title>Login AmuebleZ</title>
    <link href="css/master.css" rel="stylesheet">
</head>
<body >
<div class="login-box">
    <img alt="Avatar Image" class="avatar" src="img/images.png">
    <h1>Login</h1>
<form method="post">
        <label for="Nombre">Nombre:</label>
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter name" id="nombre" name="ingresoNombre" required>
        <label for="pwd">Contraseña:</label>
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="ingresoPwd">
    <?php
        $ingreso = new ControladorFormularios();
        $ingreso -> ctrIngreso();
        
    ?>
    <input type="submit" class="btn btn-primary" ht></input>
</form>
</div>
</body>
</html>