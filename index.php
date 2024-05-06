<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="" method="POST">
        <!-- <input type="text" name="name" placeholder="Input one Number and submit it"> -->
        <button class="btn rounded-2 bg-primary m-5" type="submit" name="btn">
            Click it
        </button>
    </form>

    <?php
    function a(){
        echo "Fuck You     ";
    }
    function b(){
        echo "Fuck You        ";
    }
        if(isset($_POST['btn'])){
            if($test = 1){
               for($i = 1; $i<=1000000 ; $i++){
                
                echo a();
                echo b();
            }
            }
            // for($i = 1; $i<=100 ; $i++){
            //     echo "I LOVE YOU";
            // }
        }
    ?>
</body>
</html>