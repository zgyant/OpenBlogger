<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<center><div id="result"></div></center>

<form method="post" action="javascript:void(0);">
<div class="form-group">
    <label for="userNameField">Blog Title</label>
    <input type="text" name="blogTitle" class="form-control" id="blogTitleField" aria-describedby="emailHelp" placeholder="Blog Title">
</div>
<div class="form-group">
    <textarea></textarea>
</div>
<button type="submit" class="btn btn-primary" value="newBlog" id="newBlog">Post it!</button>
</form>
<script type="text/javascript">
    $("form").submit(function(){
            $.ajax({
                type: "POST",
                url: 'controller/actionController.php',
                data: {
                    title: $("#blogTitleField").val(),
                    blogPost: tinyMCE.activeEditor.getContent(),
                    buttType:$("#newBlog").val()
                },
                success: function(data)
                {
                    //window.location.href = "index.php";
                    $("#result").addClass("alert alert-success");
                    $("#result").html('Blog Posted');
                    $("#blogTitleField").val('')
                    tinyMCE.activeEditor.setContent('')
                }
            });
        }
    );
</script>
