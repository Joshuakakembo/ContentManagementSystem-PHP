<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    date_default_timezone_set("Africa/Kampala");

    ob_start();
    $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "Home";
    if (strtolower($title) == 'view' && isset($_GET['cid'])) {
        include 'db_connect.php';
        $qry = $conn->query("SELECT * FROM contents where md5(id) = '{$_GET['cid']}' ")->fetch_array();
        foreach ($qry as $k => $v) {
            if ($k == 'title')
                $k = 'ctitle';
            if (is_numeric($k))
                continue;
            $$k = $v;
        }

    ?>
    <meta name="description" content="<?php echo $meta_description ?>">
    <meta name="keywords" content="<?php echo $meta_keywords ?>">
    <meta name="author" content="">
    <?php } ?>
    <title><?php echo isset($ctitle) ? $ctitle : $title ?> | <?php echo $_SESSION['system']['name'] ?></title>

    <?php ob_end_flush() ?>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="assets/plugins/dropzone/min/dropzone.min.css">
    <!-- DateTimePicker -->
    <link rel="stylesheet" href="assets/dist/css/jquery.datetimepicker.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Switch Toggle -->
    <link rel="stylesheet" href="assets/plugins/bootstrap4-toggle/css/bootstrap4-toggle.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/dist/css/styles.css">
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- summernote -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">


    <style>
    .pricing .card {
        border: none;
        border-radius: 1rem;
        transition: all 0.2s;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .pricing hr {
        margin: 1.5rem 0;
    }

    .pricing .card-title {
        margin: 0.5rem 0;
        font-size: 0.9rem;
        letter-spacing: .1rem;
        font-weight: bold;
    }

    .pricing .card-price {
        font-size: 3rem;
        margin: 0;
    }

    .pricing .card-price .period {
        font-size: 0.8rem;
    }

    .pricing ul li {
        margin-bottom: 1rem;
    }
    </style>


</head>


</head>

<body style="background-color:#d7d7d7;margin:auto">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><b> Web Hosting </b></h2>
                <p>Happietech Corporation is one of the largest web hosting companies with more than 12,000 hosted
                    domains. We have highly professional employees to provide you around-the-clock superior support. We
                    are the perfect choice whether you are looking for business, personal, or Enterprise hosting.
                    <br><br>
                    Every web hosting plan comes with a 30 day money back guarantee, 99.9% uptime guarantee, and is
                    fully guaranteed by the owner himself. If you ever have a problem with regular support just ask that
                    your ticket be assigned to Dickson and he will personally take the time to give you the VIP
                    attention that you deserve.
                </p>
            </div>
        </div>
    </div>


    <section class="pricing py-5 bg-white">
        <div class="container">
            <div class="row">
                <!-- Free Tier -->
                <div class="col-lg-6">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body bg-info">
                            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited
                                    Private Projects</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated
                                    Phone Support</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free
                                    Subdomain
                                </li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly
                                    Status
                                    Reports</li>
                            </ul>
                            <div class="d-grid">
                                <center> <a href="#" class="btn btn-success text-uppercase">SignUp Now</a> </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col-lg-6">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                            <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly
                                    Status
                                    Reports</li>
                            </ul>
                            <div class="d-grid">
                                <center> <a href="#" class="btn btn-success text-uppercase">SignUp Now</a> </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-6 pt-5 ">
                    <div class="card ">
                        <div class="card-body bg-warning">
                            <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited
                                        Users</strong>
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong>
                                    Free
                                    Subdomains</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
                            </ul>
                            <div class="d-grid">
                                <center> <a href="#" class="btn btn-success text-uppercase">SignUp Now</a> </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 pt-5">
                    <div class="card">
                        <div class="card-body bg-primary">
                            <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited
                                        Users</strong>
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong>
                                    Free
                                    Subdomains</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
                            </ul>
                            <div class="d-grid">
                                <center> <a href="#" class="btn btn-success text-uppercase">SignUp Now</a> </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>