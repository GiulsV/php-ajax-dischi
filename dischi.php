<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Dischi PHP</title>
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
                            echo"<div class='card align-items-center'>";
                                echo('<img class="card-img-top" src="'. $disc["poster"] .'" alt="'. $disc["title"] .'" />');
                                echo "<div class='card-body'>";
                                    echo('<h5 class="card-title text-center">'. $disc["title"] .'</h5>');
                                    echo "<div class='pb-5 d-flex flex-column .justify-content-start text-center'>";
                                        echo('<span class="card-text text-center">'. $disc["author"] .'</span>');
                                        echo('<span class="card-text text-center">'. $disc["year"] .'</span>'); 
                                    echo"</div>";
                                echo"</div>";
                            echo"</div>";
                        echo"</div>";
                    }
                ?>                   
            </div>
        </div>        
    </main>
</body>
</html>