<h1>Complete the registration and get started</h1>
<form class="login-top" method="post">
    <div class="form-group">
        <label for="fnamefield">Full Name</label>
        <input type="text" name="fname" class="form-control" id="fnamefield" aria-describedby="emailHelp" placeholder="Enter Full Name">
    </div>
    <div class="form-group">
        <label for="unmaeField">Username</label>
        <input type="text" name="username" class="form-control" id="unmaeField" aria-describedby="emailHelp" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" email="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary" value="register" id="registerButton">Register</button>
</form>
<script type="text/javascript">
    $("form").submit(function(){
            $.ajax({
                type: "POST",
                url: 'controller/actionController.php',
                data: {
                    fname: $("#fnamefield").val(),
                    email: $("#exampleInputEmail1").val(),
                    username: $("#unmaeField").val(),
                    password: $("#exampleInputPassword1").val(),
                    buttType:$("#registerButton").val()
                },
                success: function(data)
                {
                   // window.location.href = "index.php";

                }
            });
        }
    );
</script>