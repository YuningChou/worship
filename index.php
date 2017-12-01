<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Worship</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">敬拜歌庫</a>
    </nav>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-inline my-2 my-lg-0">
                    <input id="search" class="form-control mr-sm-2" type="text" placeholder="搜尋看看" aria-label="Search">
                    <style id="search-go"></style>
                    
                </form>
                <div class="pull-right">
                    <button class="btn btn-success" data-toggle="modal" data-target="#add_new_item_modal"><i class="fa fa-plus" aria-hidden="true"></i>新增</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="list_content"></div>
            </div>
        </div>


        <div class="modal fade" id="add_new_item_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">新增資料</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                
                    <div class="form-group">
                        <label for="item_type">快/慢</label>
                        <!--<input type="text" id="item_type" placeholder="item_type" class="form-control" />-->
                        <label class="radio-inline"><input type="radio" name="item_type" value="快">快</label>
                        <label class="radio-inline"><input type="radio" name="item_type" value="慢">慢</label>
                    </div>
                        
                    <div class="form-group">
                        <label for="item_name">歌名</label>
                        <input type="text" id="item_name" placeholder="在這兒輸入歌名" class="form-control" />
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary" onclick="additem()">增加</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="update_item_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">更新/修改</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="update_item_type">快/慢</label>
                            <!--<input type="text" id="update_item_type" placeholder="item type" class="form-control"/>-->
                            <label class="radio-inline"><input type="radio" name="update_item_type" value="快">快</label>
                            <label class="radio-inline"><input type="radio" name="update_item_type" value="慢">慢</label>
                        </div>

                        <div class="form-group">
                            <label for="update_item_name">歌名</label>
                            <input type="text" id="update_item_name" placeholder="在這兒輸入歌名" class="form-control"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary" onclick="UpdateItemDetails()" >儲存</button>
                        <input type="hidden" id="hidden_item_id">
                    </div>
                </div>
            </div>
        </div>
        

    </main><!-- /.container -->
    <footer class="text-muted">
      <div class="container">
        
        <p>Yuning Chou</p>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    <script src="js/script.js"></script>

    <script>
        var that = $(this);
        var Search = $("#search-go");
        $("#search").bind("change paste keyup", function(){
        var value = $(this).val();
        if (!value) {
            Search.html("");
            return;
        }; 
        Search.html('.table tr:not([data-index*="' + value.toLowerCase() + '"]) {display: none;}');
        });
    </script>
</body>
</html>