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
            padding-bottom: 48px;
        }
        #enlace{
            font-weight: bold;
            font-family: "Saira";
            font-size: 20px;
            color: white;
        }
        #igimagenhoja{
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 486px;
            width: 648px;
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
            <td id="txtitulo">Prueba de utilizacion de APIs - 08/03/22</td>
        </tr>
        <tr>
            <td id="txtdesc">
                Algo que realice para practicar la utilizacion de APIs fue este pequeño sitio usando datos por medio de llamadas
                utilice una api (la cual le pertenece a sus respectivos autores) y colocando los datos dentro de una tabla, originalmente
                queria poner el nombre de un objeto junto con su imagen respectiva pero no pude hacerlo funcionar al menos como trataba de serlo
                en fin, el archivo se los tengo aqui (se tener instalado WinRar para poder extraerlo).
                <br>
                <a id="enlace" href="{{asset('archivos/PruebaAPIConLaravel.rar')}}">PruebaAPIConLaravel.rar</a>
            </td>
        </tr>
        <tr>
        <tr>
            <td id="txtitulo">Blog - 10/02/22</td>
        </tr>
        <tr>
            <td id="txtdesc">
                Este es el codigo fuente del blog subida a traves de github, 
                para ir al repositorio y para mas informacion revisen este enlace <a id="enlace" href="https://github.com/EViasValdez/2522-EV-Blog">https://github.com/EViasValdez/2522-EV-Blog</a>
            </td>
        </tr>
        <tr>
            <td id="txtitulo">Introduccion al PHP y ejercicios - 30/01/22</td>
        </tr>
        <tr>
            <td id="txtdesc">
                He aqui las actividades que realizamos en las primeras clases utilizando php y usando metodos 
                orientados a objetos pudeden verlos a traves de los links de abajo.
                <br>
                <a id="enlace" href="{{asset('archivos/Ejercicio1.php')}}">Ejercicio de repeticion de mensajes</a>
                <br>
                <a id="enlace" href="{{asset('archivos/Ejercicio2.php')}}">Utilizacion de clases con funciones</a>
            </a>
            </td>
        </tr>
        <tr>
            <td id="txtitulo">Prueba de concepto de InstitGen - 19/01/22</td>
        </tr>
        <tr>
            <td id="txtdesc">
                Estas imagenes son parte de las actividades donde nos dieron una idea de crear una aplicacion
                y esta fue una idea que se me ocurrio, incluye algunos diagramas de ideas y representacion de
                la aplicacion a cuaderno, de la cual estaba pensando en hacer un programa tipo C#, por ello
                la interfaz de usario que tuve planeada.
                <img id="igimagenhoja" src="{{asset('archivos/InstitGen/InstitGen - 1.jpg')}}">
                <img id="igimagenhoja" src="{{asset('archivos/InstitGen/InstitGen - 2.jpg')}}">
                <img id="igimagenhoja" src="{{asset('archivos/InstitGen/InstitGen - 3.jpg')}}">
                <img id="igimagenhoja" src="{{asset('archivos/InstitGen/InstitGen - 4.jpg')}}">
                <img id="igimagenhoja" src="{{asset('archivos/InstitGen/InstitGen - 5.jpg')}}">
                <img id="igimagenhoja" src="{{asset('archivos/InstitGen/InstitGen - 6.jpg')}}">
            </a>
            </td>
        </tr>
    </table>
    <br>
</body>
</html>