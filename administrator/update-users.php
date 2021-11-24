<?php 
    require("administrator.php") ;
    require('../components/dependencies.php');
    require("../utilities_php/dbconnection.php");
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
?>

<section class="container-fluid">

    <form action="../utilities_php/check_actions.php" method="POST" class="pt-3 pb-3">
        <input type="hidden" name="update_user">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="form-group">
            <label for="title" class="label">Nuevo nombre de usuario</label>
            <input type="text" class="form-control" name="username" placeholder="username">
        </div>
        <div class="form-group">
            <label for="title" class="label">Nueva contraseña</label>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>    
        <input type="submit" class="btn btn-secondary form-control" placeholder="submit">
    </form>
    
</section>
</body>
</html>