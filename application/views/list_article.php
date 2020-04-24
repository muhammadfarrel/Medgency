<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        #listhead{
            background-color: #74b9ff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="list-group" id="list">
                    <!-- HEADER -->
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" id="listhead">
                    <div class="d-flex w-100 justify-content-between">
                        <h3>Article</h3>
                    </div>
                    </a>

                    <!-- ARTIKEL -->
                    <div id="artikel">
                        <?php 
                            foreach($data as $value){
                                $dat = json_decode($value->data);
                        ?>

                        <a href="articlepage/<?= $value->id?>" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?= $dat->title?></h5>
                                <small class="text-muted"><?= $dat->time?></small>
                            </div>
                            <small class="text-muted"><?= $dat->src?></small>
                        </a>
                        <?php }?>
                    </div>
                    
                    <!-- PAGINATION -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li id="previous-page" class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="pagenumber" id="pagination"></div>
</body>
<footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

    var number_of_item = $("#artikel .list-group-item").length; //JUMLAH ARTIKEL
    var limit_per_page = 3; //LIMIT ARTIKEL YANG DITAMPILKAN

    $("#artikel .list-group-item:gt(" + (limit_per_page-1) + ")").hide(); //MENAMPILKAN ARTIKEL

    var totalpages = Math.round(number_of_item / limit_per_page); //PEMBULATAN JUMLAH PAGE
    //PAGE 1
    $(".pagination").append("<li id='current-page' class='page-item active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>");

    //LOOPING PAGE
    for(var i = 2; i<=totalpages; i++){
        $(".pagination").append("<li id='current-page' class='page-item'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");
    };

    //LI NEXT
    $(".pagination").append("<li id='next-page' class='page-item'><a class='page-link' href='javascript:void(0)' aria-label='Next'><span aria-hidden='true'>&raquo;" +
        "</span><span class='sr-only'>Next</span></a></li>");
    
    //LI PAGE DI KLIK
    $(".pagination li#current-page").on("click",function(){
        if($(this).hasClass("active")){
            return false;
        }
        else{
            var currentpage = $(this).index();
            $(".pagination li").removeClass("active");
            $(this).addClass("active");
            $("#artikel .list-group-item").hide();

            var grandtotal = limit_per_page * currentpage;

            for (var i = grandtotal - limit_per_page; i < grandtotal; i++){
                $("#artikel .list-group-item:eq("+ i +")").show();
            }
        }
    });

    //LI NEXTPAFE DI KLIK
    $("#next-page").on("click", function(){
        var currentpage = $(".pagination li.active").index();
        if(currentpage === totalpages){
            return false;
        }
        else {
            currentpage++;
            $(".pagination li").removeClass("active");
            $("#artikel .list-group-item").hide();

            var grandtotal = limit_per_page * currentpage;

            for (var i = grandtotal - limit_per_page; i < grandtotal; i++){
                $("#artikel .list-group-item:eq("+ i +")").show();
            }
            $(".pagination li#current-page:eq("+ (currentpage - 1) + ")").addClass("active");

        }

    })

    //LI PREVPAGE DI KLIK
    $("#previous-page").on("click", function(){
        var currentpage = $(".pagination li.active").index();
        if(currentpage === 1){
            return false;
        }
        else {
            currentpage--;
            $(".pagination li").removeClass("active");
            $("#artikel .list-group-item").hide();

            var grandtotal = limit_per_page * currentpage;

            for (var i = grandtotal - limit_per_page; i < grandtotal; i++){
                $("#artikel .list-group-item:eq("+ i +")").show();
            }
            $(".pagination li#current-page:eq("+ (currentpage - 1) + ")").addClass("active");

        }

    })

</script>
</footer>
</html>