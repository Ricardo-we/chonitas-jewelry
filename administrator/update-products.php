<?php 
    require("administrator.php") ;
    require('../components/dependencies.php');
    require("../utilities_php/dbconnection.php");
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
?>

<section class="container-fluid">

    <form action="../utilities_php/check_actions.php" method="POST" class="pt-3 pb-3" enctype="multipart/form-data">
        <input type="hidden" name="update_product">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="form-group">
            <label for="title" class="label">Titulo</label>
            <input type="text" class="form-control" name="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="title" class="label">Precio</label>
            <input type="number" class="form-control" name="price" placeholder="price">
        </div>
        <div class="form-group">
            <label for="title" class="label">Descripcion</label>
            <textarea name="description" class="form-control" col="6" row="8" style="resize: none;" placeholder="description"></textarea>
        </div>
        <div class="form-group">
            <label for="title" class="label">Imagen</label>
            <input type="file" class="form-control" name="image" title="image">
        </div>        
        <input type="submit" class="btn btn-secondary form-control" placeholder="submit">
    </form>
    
</section>
</body>
</html>