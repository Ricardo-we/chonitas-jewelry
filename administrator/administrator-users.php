<?php 
    require("administrator.php");
    require("../utilities_php/utilities.php");
?>

<section class="container-fluid">

    <form action="/JEWELRY/utilities_php/check_actions.php" method="POST" class="pt-3 pb-3" id="user_form">
        <input type="hidden" name="add_user">
        <div class="form-group">
            <label for="title" class="label">User</label>
            <input type="text" class="form-control" name="username" placeholder="username" id="username">
        </div>
        <div class="form-group">
            <label for="title" class="label">Password</label>
            <input type="password" step="any" class="form-control" name="password" placeholder="password" id="password">
        </div>        
        <input type="submit" class="btn btn-secondary form-control" placeholder="submit" id="submitUser">
    </form>
    
    <table class="table">
        <tr class="row">
            <td class="col">User</td>
            <td class="col">Options</td>
        </tr>
        <?php echo render_users()?>
    </table>
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="/JEWELRY/static/js/check-forms.js"></script>

<script>
    const userForm = document.getElementById('user_form');
    const submitUser = document.getElementById('submitUser');
    const username = document.getElementById('username');
    const password = document.getElementById('password');   

    function validateUser(e){
        e.preventDefault();
        let isValid = checkForm(username, password);
        if(isValid){
            userForm.submit()
        }
        else{
            swal("Ooops", "Llene todos los espacios", "warning");
        }
    }
    userForm.addEventListener('submit', (e) =>{validateUser(e)})
    submitUser.addEventListener('click', (e) =>{validateUser(e)})
</script>

</body>
</html>