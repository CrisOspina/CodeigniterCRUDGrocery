<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <style>
        * {
			box-sizing: border-box;
		}

        body {
            background-color: #dfe6e9;
        }
        
        div {
            height: 400px;
            display: flex;
            justify-content: space-between;
        }

        .container a {
            margin: 20px;
            width: 674px;
            background-size: 674px;
            background-repeat:no-repeat;
            text-transform: uppercase;
            text-decoration: none;
        }

        .font {
            font-family: 'Quicksand', sans-serif;
            padding: 10px;
            font-size: 25px;
        }

        .usuarios {
            background-image: url('https://images.pexels.com/photos/8169/pexels-photo.jpg?cs=srgb&dl=apple-client-desk-8169.jpg&fm=jpg');
        }

        .usuarios:hover {
            box-shadow: 16px -11px 78px -7px rgba(0,0,0,0.75);
        }

        .identificacion {
            background-image: url('https://images.pexels.com/photos/45113/pexels-photo-45113.jpeg?cs=srgb&dl=document-drivera-s-license-driving-licence-45113.jpg&fm=jpg');
        }

        .identificacion:hover {
            box-shadow: 16px -11px 78px -7px rgba(0,0,0,0.75);
        }

        .footer {
            margin-top: 10px;
            height: 100px;
            color: white;
        }

        .footer p {
            margin-left: auto;
            margin-right: auto;
            margin-top: 120px;
            font-size: 15px;
            color: #2d3436;
        }

    </style>

    <title>Principal</title>

</head>
<body>
    <div class="container">
        <a class="usuarios font" href="<?php echo site_url('usuarios');?>">Tipo cliente</a>
        <a class="identificacion font" href="<?php echo site_url('identificacion');?>">Tipo de identificación</a>
    </div>
        
    <div class="footer">
        <p>Realizado por: <a href="#"><strong>@crisospina523</strong></p>
    </div>

</body>
</html>

