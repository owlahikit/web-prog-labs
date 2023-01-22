<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lab4</title>
    </head>
    <body>
    <?php
        if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']){
                case 'list':
                    require_once 'list.php';
                    break;
                case 'create':
                    require_once 'create.php';
                    break;
                case 'update':
                    require_once 'update.php';
                    break;
                case 'delete':
                    require_once 'delete.php';
                    break;
            }
        } else
            require_once 'list.php';
    ?>
    </body>
</html>