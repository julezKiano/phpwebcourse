<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
            <div class="input-group">
                <input type="text" name ="search" class="form-control">
                <span class="input-group-btn">
                    <button name ="submit" type="submit" class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
        </form>
        <!-- /.input-group -->
    </div>



    <!-- Blog Categories Well -->
    <div class="well">
        <?php
            $query = "SELECT * FROM categories";
            $result_category = mysqli_query($connection,$query);
        ?>
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php
                    while ($row = mysqli_fetch_assoc($result_category)) {
                        $cat_id = $row["cat_id"];
                        $cat_title = $row["cat_title"];
                        echo "<li><a href='category.php?cat={$cat_id}'>{$cat_title}</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <?php include "widget.php"; ?>

</div>
