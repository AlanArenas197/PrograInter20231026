<!DOCTYPE html>
<html lang="es">
<head>
    <title>Listado de Empleados</title>
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            font-family: Helvetica;
        }
        .eliminar-btn {
            background-color: #ff6262;
            color: #fff;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
        }
        .crear-btn {
            background-color: #585858;
            color: #fff;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
            font-family: Arial;
        }
        .titulo{
            font-family: Arial;
            color: white;
        }
        .ids{
            background-color: #585858;            
        }
        .listaemp{
            background-color: #A4A4A4;
        }
        #creditos{
            text-align: center;
            font-size: 10px;
            font-family: Arial Narrow;
            color: white;
        }
    </style>
    <script src="Script/jquery-3.3.1.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var botonesEliminar = document.querySelectorAll('.eliminar-btn');

        botonesEliminar.forEach(function(boton) {
            boton.addEventListener('click', function() {
                var filaEmpleado = this.parentElement.parentElement;
                filaEmpleado.style.display = 'none';
            });
        });
    });
</script>
</head>
<body>
    <h1 class="titulo">Listado de Empleados</h1>
    <a href="#" class="customfont, crear-btn">Crear nuevo registro</a><br><br>
    <table>
        <tr class="ids">
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Eliminar</th>
        </tr>
        <tr class="empleado, listaemp">
            <td>1</td>
            <td>Alan Arenas</td>
            <td>alanarenas@gmail.com</td>
            <td>1</td>
            <td><button class="eliminar-btn">Eliminar</button></td>
        </tr>
        <tr class="empleado, listaemp">
            <td>2</td>
            <td>Jared Castillo</td>
            <td>jaredmotorola@gmail.com</td>
            <td>2</td>
            <td><button class="eliminar-btn">Eliminar</button></td>
        </tr>
        <tr class="empleado, listaemp">
            <td>3</td>
            <td>Angel Galvan</td>
            <td>equissomosangel@hotmail.com</td>
            <td>2</td>
            <td><button class="eliminar-btn">Eliminar</button></td>
        </tr>
        <tr class="empleado, listaemp">
            <td>4</td>
            <td>Uriel Zamora</td>
            <td>urielcookies69@hotmail.com</td>
            <td>2</td>
            <td><button class="eliminar-btn">Eliminar</button></td>
        </tr>
    </table>
    <div id="creditos">
        <h2>Hecho por: Alan Marcel Arenas Venegas =D</h2>
    </div>
</body>
</html>
