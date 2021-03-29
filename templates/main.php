<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Webshop</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <header class="jumbotron">

        <div class="container">
            <h1>Willkommen im Photo Web Shop</h1>
        </div>
        
    </header>    

    <section class="container" id="products">

        <div class="row">

            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            
                <div class="col">
                    <?php include 'card.php' ?>           
                </div>

            <?php endwhile ?>
            
        </div>

    </section>

    <script src="./assets/js/bootstrap.bundle.js"></script>    
</body>
</html>