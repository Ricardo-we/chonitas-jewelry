<?php 
    require("../components/navbar.php"); 
    require("../utilities_php/utilities.php");
    
    if(isset($_GET['product'])){
        $conn = new DBConnection();

        $product = $_GET['product'];
        $id = $_GET['id'];
        $product_info = $conn->fetch_product($id, $product);
        $product_info = mysqli_fetch_array($product_info);
    }
?>

    <link rel="stylesheet" href="/JEWELRY/static/css/shop.css">
    <main class="product-displayer">
        <div class="img-title-container">
            <div class="product-info-img-container">
                <img class="product-info-img"
                    alt="<?php echo $product_info['title']?>"
                    src="data:image/jpg;base64,<?php echo base64_encode($product_info['image'])?>">
            </div>
            <h3 class="product-info"><?php echo $product_info['title']?></h3>
        </div>

        <div class="buy-container">
            <p class="product-info"><?php echo $product_info['description'] ?></p>
            <h3 class="product-info">Q<?php echo $product_info['price'] ?></h3>
            <form action="https://wa.me/50255750025/?text=Me interesa: <?php echo $product_info['title']?>" method="GET" class="form">
                <button class=" btn btn-primary text-white" style="margin: 20px 0px; width:100%;">ADQUIRIR</button>
            </form>
        </div>
        
    </main>
<?php require("../components/footer.php") ?>