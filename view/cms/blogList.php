<script>
    window.onload= function listBlog(){
        $.ajax({
            type: "GET",
            url: 'controller/listController.php',
            success: function(data)
            {
                 dataInd=(JSON.parse(data))
                html='';
                for (i=0;i<dataInd.length;i++){
                    html+='<div class="card myList mb-5">\n' +
                        '    <div class="card-header">My Blog\n' +dataInd[i][0]+
                        '        \n' +
                        '    </div>\n' +
                        '    <div class="card-body">\n' +
                        '        <h5 class="card-title text-uppercase">'+dataInd[i][1]+'</h5>\n' +
                        '        <p class="card-text">'+dataInd[i][2].substring(0,400)+'....</p>\n' +
                        '        <a href="view/singlePage.php?id='+dataInd[i][0]+'" class="btn btn-primary">Read More</a>\n' +
                        '    </div>\n' +
                        '</div>';

                }
                var element = document.getElementById("divBig");
                element.innerHTML = html;
                document.body.appendChild(element);
            }
        });
    }
</script>
    <div id="divBig" class="container">

    </div>
