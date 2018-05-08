<!DOCTYPE html>
<html lang ="en">
  <head>
    <title>Dott | Baby and Toddler Store</title>
    <meta charset="utf-8"/>
    <meta name="description" content="baby and toddler toys">
    <meta name="keywords" content="toddler, baby, infant, toys, baby toys">
    <meta name="author" content="Shaela Sutton">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/home.css" type="text/css" rel="stylesheet"/>
    <link href="/css/prod.css" type="text/css" rel="stylesheet"/>
</head>
    <body>
        
        <script>
          function myFunction() {
              var x = document.getElementById("myNav");
              if (x.className === "cNav") {
                  x.className += "shrinkIt";
              }
              else {
                  x.className = "cNav";
              }
          }
      </script>
        
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'; ?>
        
        <main id="product">
            <?php 
                $prod = "<img src='$imagePlace'><h1>$invName</h1><p>$invDesc</p><span>$invPrice</span>";
                echo $prod;
            ?>
            
            <form id="addCart" action="/organize/shopIndex.php" method="post">
                <button type="submit" name="action" value="addCart">Add to Cart</button>
                <input type="hidden" name="invName" <?php echo "value='$invName'"; ?>>
                <input type="hidden" name="invDesc" 
                       <?php 
                       $str = addslashes($invDesc);
                       echo "value='$str'"; ?>>
                <input type="hidden" name="invPrice" <?php echo "value='$invPrice'"; ?>>
                <input type="hidden" name="invImg" <?php echo "value='$imagePlace'"; ?>>
            </form>
        </main>
        
    </body>
</html>