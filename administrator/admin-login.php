<?php
    include("../components/dependencies.php");
    session_start();
    if(isset($_SESSION['username'])){
        header('Location: administrator.php');
    }
?>
<style>
    #form-container {
        width: 500px;
        margin-top: 80px;
    }

    #title {
        text-align: center;
    }
</style>

<div class="container-sm" id="form-container">
    <form action="administrator.php" class="form" method="POST">
        <input type="hidden" name="admin-login">
        <h3 id="title">Jewelry Admin</h3>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="username" name="username">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="password" name="password">
        </div>
        <button class="form-control btn-primary mt-2">Start</button>
    </form>
</div>