<form class="login-top" method="post" action="javascript:void(0);">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary" value="login">Login</button>
</form>
<script type="text/javascript">
    $("form").submit(function(){
            var str = $(this).serialize();
            $.ajax('controller/actionController.php', str, function(result){
            console.log(result);
        })
        }
    );
</script>