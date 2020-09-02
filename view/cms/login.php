<form class="login-top" method="post" action="javascript:void(0);">
    <div class="form-group">
        <label for="userNameField">Username</label>
        <input type="text" name="username" class="form-control" id="userNameField" aria-describedby="emailHelp" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <label for="passwordField">Password</label>
        <input type="password" name="password" class="form-control" id="passwordField" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary" value="login" id="loginButton">Login</button>
</form>
<script type="text/javascript">
    $("form").submit(function(){
        $.ajax({
            type: "POST",
            url: 'controller/actionController.php',
            data: {
                username: $("#userNameField").val(),
                password: $("#passwordField").val(),
                buttType:$("#loginButton").val()
            },
            success: function(data)
            {
                window.location.href = "index.php";

            }
        });
        }
    );
</script>