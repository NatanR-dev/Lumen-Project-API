<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lumen API</title>

        <!-- Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css" rel="stylesheet" type="text/css">
     
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            small {
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Lumen API 
                    <small><br/>Laravel Web App com Lumen API Routes</small>
                </div>

                Clique em um destes links para experimentar as diferenças:
                <br/><br/>

                <div class="links">
                    <a href="/">Checar Laravel  Web Route</a>
                    <a href="/api">Checar Lumen API Route</a>
                </div>

                <br/><br/>

                <hr>

                Rotas > <strong> <?php echo e(starts_with(app()->version(), 'Lumen') ? '' : 'Laravel'); ?> <?php echo e(app()->version()); ?></strong><br/>
                Execução > <strong><?php echo e(round(microtime(true) - LARAVEL_START, 3)); ?>s</strong>

                <hr>
            </div>
        </div>
    </body>
</html>
