<?php 
    require("administrator.php");
    require("../utilities_php/utilities.php");
?>

<section class="container-fluid">

    <form action="../utilities_php/check_actions.php" method="POST" class="pt-3 pb-3" enctype="multipart/form-data" id="form">
        <input type="hidden" name="save_product">
        <div class="form-group">
            <label for="title" class="label">Titulo</label>
            <input type="text" class="form-control" name="title" placeholder="title" id="title">
        </div>
        <div class="form-group">
            <label for="title" class="label">Precio</label>
            <input type="number" step="any" class="form-control" name="price" placeholder="price" id="price">
        </div>
        <div class="form-group">
            <label for="title" class="label">Descripcion</label>
            <textarea name="description" class="form-control" col="6" row="8" style="resize: none;" placeholder="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="title" class="label">Imagen</label>
            <input type="file" class="form-control" name="image" title="image" id="image">
        </div>        
        <input type="submit" class="btn btn-secondary form-control" placeholder="submit" id="submitBtn">
    </form>
    
    <table class="table">
        <tr class="row">
            <td class="col">Title</td>
            <td class="col">Price</td>
            <td class="col">Description</td>
            <td class="col">Options</td>
            <?php echo render_table(); ?>
        </tr>
    </table>
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../static/js/check-forms.js"></script>
</body>
</html>