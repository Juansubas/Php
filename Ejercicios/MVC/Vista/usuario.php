<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
    <table>
        <tr><?php require_once("../Modelo/constantes.php");
        foreach (usuarioColumns as $value):?>
            <td><?php echo $value ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="">Editar</a></td>
            <td><a onclick="javascript: return confirm("Esta seguro de eliminar?")">Eliminar</a> </td>
        </tr>
    </table>
</body>
</html>