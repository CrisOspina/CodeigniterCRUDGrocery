<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $modulo ?> | <?php echo $descripcion?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php
    foreach($css_files as $css)
    {
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
        <?php
    }
    ?>

    <style>
        * {
			box-sizing: border-box;
		}

        body {
            background-color: #dfe6e9;*/
        }

        .cont a {
            margin: 10px;
            display: flex;
            background-image: url('https://img.icons8.com/metro/420/reply-arrow.png');
            background-repeat:no-repeat;
            background-size: 40px;
        }

        a {
            text-decoration: none;
            padding: 20px;
        }

    </style>

</head>

<body>

    <div class="cont">
        <!--Regresar-->
        <a href="<?php echo site_url('viewPrincipal');?>" title="Click para regresar"><strong></strong></a>
    </div>

    <!--Contenedor nuevo-->
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <?php echo $contenido;?>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    foreach($js_files as $js)
    {
        ?>
            <script type="text/javascript" src="<?php echo $js?>"></script>
        <?php
    }
    ?>
</body>

</html>