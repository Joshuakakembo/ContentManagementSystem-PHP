<?php include('../db_connect.php') ?>
<?php
$twhere = "";
if ($_SESSION['admin_type'] != 1)
  $twhere = "  ";
?>


<!-- Info boxes -->
<?php if ($_SESSION['admin_type'] == 1) : ?>
<div class="row">
    <div class="col-12 col-sm-6 col-md-4">
        <a href="./index.php?page=categories">
            <div class="small-box bg-success shadow-sm border">
                <div class="inner">
                    <h3><?php echo $conn->query("SELECT * FROM categories ")->num_rows; ?></h3>

                    <p>Total Categories</p>
                </div>
                <div class="icon">
                    <i class="fa fa-columns"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <a href="./index.php?page=content_list">
            <div class="small-box bg-primary shadow-sm border">
                <div class="inner">
                    <h3><?php echo $conn->query("SELECT * FROM contents")->num_rows; ?></h3>

                    <p>Total Contents</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file-contract"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <a href="./index.php?page=user_list">
            <div class="small-box bg-danger shadow-sm border">
                <div class="inner">
                    <h3><?php echo $conn->query("SELECT * FROM users")->num_rows; ?></h3>

                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
            </div>
    </div>
    </a>
</div>

<div class="row">
    <div class="col-12 col-sm-6 col-md-4">
        <a href="./index.php?page=content_list">
            <div class="small-box bg-info shadow-sm border">
                <div class="inner">
                    <h3><?php echo $conn->query("SELECT * FROM comments ")->num_rows; ?></h3>

                    <p>Total Comments</p>
                </div>
                <div class="icon">
                    <i class="fa fa-comment"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <a href="./index.php?page=content_list">
            <div class="small-box bg-secondary shadow-sm border">
                <div class="inner">
                    <h3><?php echo $conn->query("SELECT * FROM contents")->num_rows; ?></h3>

                    <p>Manage Content</p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
            </div>
            <a href="./index.php?page=content_list">
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <a href="./index.php?page=user_list">
            <div class="small-box bg-warning shadow-sm border">
                <div class="inner">
                    <h3><?php echo $conn->query("SELECT * FROM users")->num_rows; ?></h3>

                    <p>Manage Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
            </div>
        </a>

    </div>
</div>

<?php else : ?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            Welcome <?php echo $_SESSION['admin_name'] ?>!
        </div>
    </div>
</div>

<?php endif; ?>