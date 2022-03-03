<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&family=Saira&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&display=swap" rel="stylesheet">
    <title>R.</title>
</head>
<body>
    <style type="text/css">
        body{
            background-color: #b01200;
            opacity: 1;
            background-size: 60px 60px;
            background-image:  repeating-linear-gradient(to right, #050000, #050000 3px, #b01200 3px, #b01200);
        }
        header{
            padding-top: 10px;
            background-color: rgb(28, 0, 134);
        }
        #navegador{
            float: top;
            font-family: "Permanent Marker";
            text-align: center;
            background-color: rgb(217, 0, 0);
        }
        #opcinavg{
            background-color: rgb(217, 0, 0);
            color: white;
            text-decoration: none;
            text-align: center;
            font-size: 28px;
            padding-left: 48px;
            padding-right: 48px;
            transition-timing-function: ease-in-out;
            transition: 0.8s;
        }
        #opcinavg:hover{
            background-color: rgb(255, 133, 133);
            color: black;
            text-decoration: none;
            text-align: center;
            font-size: 28px;
            padding-left: 148px;
            padding-right: 148px;
            transition-timing-function: ease-in-out;
            transition: 0.4s;
        }
        #titulo{
            text-align: center;
            font-family: "Allerta Stencil";
            font-size: 48px;
            font-weight: bolder;
            color: white;
        }
        #seccion{
            text-align: center;
            font-size: 40px;
            font-family: "Ramabhadra";
            color: white;
        }
        table{
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            background-color: rgba(255, 40, 0, 0.48);
        }
        #txtitulo{
            text-align: center;
            font-weight: bolder;
            font-family: "Saira";
            font-size: 28px;
            color: white;
        }
        #txtdesc{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            font-weight: bold;
            font-family: "Saira";
            font-size: 20px;
            color: white;
        }
        #enlace{
            font-weight: bold;
            font-family: "Saira";
            font-size: 20px;
            color: white;
        }
    </style>
        <header>
            <p id="titulo">Salon de la programacion</p>
            <div id="navegador">
                <a id="opcinavg" href="sitiowebinicio">Inicio</a>
                <a id="opcinavg" href="sitiowebact">Actualizaciones</a>
                <a id="opcinavg" href="">Experimentacion</a>
                <a id="opcinavg" href="sitiowebenlaces">Enlaces</a>
                <a id="opcinavg" href="">Otros</a>
            </div>
        </header>
    <p id="seccion">Actualizaciones</p>
    <table>
        <tr>
            <td id="txtitulo">Blog</td>
        </tr>
        <tr>
            <td id="txtdesc">
                Este es el codigo fuente del blog subida a traves de github, 
                para ir al repositorio y para mas informacion revisen este enlace <a id="enlace" href="https://github.com/EViasValdez/2522-EV-Blog">https://github.com/EViasValdez/2522-EV-Blog</a>
            </td>
        </tr>
        <tr>
            <td id="txtitulo">Introduccion al PHP y ejercicios</td>
        </tr>
        <tr>
            <td id="txtdesc">
                He aqui las actividades que hicimos en las primeras clases utilizando php y usando metodos 
                orientados a objetos pudeden verlos a traves de los links de abajo.
                <br>
                <a id="enlace" href="archivos/Ejercicio1.php">Ejercicio de repeticion de mensajes</a>
                <br>
                <a id="enlace" href="archivos/Ejercicio2.php">Utilizacion de clases con funciones</a>
            </td>
        </tr>
    </table>
    <br>
</body>
</html>