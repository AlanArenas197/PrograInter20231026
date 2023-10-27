<!DOCTYPE html>
<html lang="es">
<head>
    <title>Listado de Empleados</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .eliminar-btn {
            background-color: #ff6262;
            color: #fff;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
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
    <h1>Listado de Empleados</h1>
    <a href="#">Crear nuevo registro</a><br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre completo</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Eliminar</th>
        </tr>
        <tr class="empleado">
            <td>1</td>
            <td>Alan Arenas</td>
            <td>alanarenas@gmail.com</td>
            <td>1</td>
            <td><button class="eliminar-btn">Eliminar</button></td>
        </tr>
        <tr class="empleado">
            <td>2</td>
            <td>Jared Castillo</td>
            <td>jaredmotorola@gmail.com</td>
            <td>2</td>
            <td><button class="eliminar-btn">Eliminar</button></td>
        </tr>
        <tr class="empleado">
            <td>3</td>
            <td>Angel Galvan</td>
            <td>equissomosangel@hotmail.com</td>
            <td>2</td>
            <td><button class="eliminar-btn">Eliminar</button></td>
        </tr>
    </table>
</body>
</html>
