<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網頁跳轉練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <?php include('header.php');?>
    </div>

    <div class="container-fluid">
        <?php 
            $current_page = 'homepage';
                if(array_key_exists('page',$_GET)){
                    $current_page = $_GET['page'];
                }
                switch ($current_page) {
                    default:
                        include 'content/homepage.php';
                        break;
                    case 'about':
                        include 'content/about.php';
                        break;
                    case 'products':
                        include 'content/products.php';
                        break;
                
                }
            ?>
    </div>

    <div>
        <?php include('footer.php');?>
    </div>
</body>
</html>