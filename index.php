<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Mon titre html</h1>
        <h2><?php echo "Mon text PHP"; ?></h2>

        <?php
            $name = "VIEUXBLED";
            echo "<p>$name</p>";
            var_dump($name);
        ?>

        <h3>Exemple d'usage des tableaux et des boucles</h3>
        <?php
            // Tableau standard
            // $priceList = [15.60, 8.35, 124.99, 500, 59.99];

            // Tableau associatif
            $priceList = [
                "Parfum" => 15.60,
                "Shampoing" => 8.35,
                "Switch" => 124.99,
                "PS5" => 500,
                "Chifonnette Apple" => 59.99
            ];

            // Exemple de fonction
            function taxedPrice(float $price) {
                return $price * 1.2;
            }

            foreach($priceList as $index => $price) {
                echo "<p>Produit $index : " . taxedPrice($price) . " € TTC</p>";
            }
        ?>

    </body>
</html>

