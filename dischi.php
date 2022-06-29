<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Dischi</title>
</head>
<body>
    <header>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 d-flex justify-content-around">
                <?php   
                    include(__DIR__ . '/data/data.php');
                    foreach ($discs as $disc) {
                        echo"<div class= 'col mt-4'>";
                            echo"<div class='card h-100'>";
                                echo('<img  src="'. $disc["poster"] .'" alt="'. $disc["title"] .'" />');
                                echo('<h3 class="text-center">'. $disc["title"] .'</h3>');
                                echo('<div class="text-center">'. $disc["author"] .'</div>');
                                echo('<div class="text-center">'. $disc["year"] .'</div>'); 
                            echo"</div>";
                        echo"</div>";
                    }
                ?>                   
            </div>
        </div>        
    </main>
</body>
</html>