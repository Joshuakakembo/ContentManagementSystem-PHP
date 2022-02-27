<style type="text/css">
#domain-search-input {
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    background-color: #fff;
    display: inline-block;
}

#domain-search-input input {
    border: 0;
    box-shadow: none;
}

.input-group[class*=col-] {
    float: left;
    width: auto;
}

.domain-box {
    display: grid;
    justify-content: center;
}
</style>


<?php include 'db_connect.php' ?>
<div class="container-fluid" style="position:sticky;top:5rem">
    <div class="d-block w-100">
        <div class="card">
            <div class="card-body">
                <form action="" id="search_content">
                    <div class="form-group">
                        <label for="search">Search Here</label>
                        <input type="search" name="search" class="form-control" placeholder="Enter keyword"
                            value="<?php echo isset($_GET['s']) ? $_GET['s'] : '';  ?>" id="search">
                    </div>
                </form>
            </div>
            <div class="card-body pt-0">

                <div class="domain-box">
                    <h5>Check Domain Availability</h5>

                    <form action="" method=post>

                        <div id="domain-search-input">
                            <div class="input-group col-md-24">
                                <input type="text" class="form-control" name="domain_name" placeholder="Domain Name">
                            </div>
                            <select name="suffix" class="btn btn-success">
                                <option value=".com">.com</option>
                                <option value=".net">.net</option>
                                <option value=".org">.org</option>
                                <option value=".biz">.biz</option>
                                <option value=".info">.info</option>
                                <option value=".in">.in</option>
                                <option value=".us">.us</option>
                                <option value=".uk">.uk</option>
                                <option value=".au">.au</option>
                                <option value=".co">.co</option>
                                <option value=".gov">.gov</option>
                                <option value=".tech">.tech</option>
                                <option value=".online">.online</option>
                                <option value=".pro">.pro</option>
                                <option value=".io">.io</option>
                                <option value=".tv">.tv</option>
                                <option value=".live">.live</option>
                                <option value=".app">.app</option>
                            </select>

                        </div>
                        <br><br>
                        <center> <input style="background-color: #283290 ; color:white" type="submit" class="btn  "
                                name="check" value="Check"></center>
                        <br>
                    </form>
                    <?php

                    if (isset($_POST['check'])) {

                        if (!empty($_POST['domain_name'])) {
                            $name_domain = trim($_POST['domain_name']) . $_POST['suffix'];

                            $godaddycheck = 'https://in.godaddy.com/domains/searchresults.aspx?checkAvail=1&tmskey=&domainToCheck=' . $name_domain . '';
                            $namecomcheck = 'https://www.name.com/domain/search/' . $name_domain . '';
                            $registercomcheck = 'http://www.register.com/domain/search/wizard.rcmx?searchDomainName=' . $name_domain . '&searchPath=Default&searchTlds=';
                            if (gethostbyname($name_domain) != $name_domain) {
                                echo "<H5 style='color:red;'>Domain $name_domain is not Available.</H5>";
                            } else {
                                echo "<H5 style='color:green;' >Domain $name_domain is available.</H5>";
                            }
                        } else {
                            echo "<H3 style='color:red;'>Error: Enter Domain Name.</H3>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="card card-outline card-info">
            <div class="card-header">
                <b>Recent Post/s</b>
            </div>
            <div class="card-body">
                <?php
                $qry = $conn->query("SELECT * FROM contents order by unix_timestamp(date_created) desc limit 15");
                while ($row = $qry->fetch_assoc()) :
                ?>
                <div class="callout callout-info px-1 py-0">
                    <dl>
                        <dt class="truncate-1"><a target="_blank"
                                href="./index.php?page=view&cid=<?php echo md5($row['id']) ?>"><?php echo $row['title'] ?></a>
                        </dt>
                        <dd><small class="text-muted">Posted Datetime:
                                <?php echo date("M d, Y h:i A", strtotime($row['date_created'])) ?></small></dd>
                    </dl>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<script>
$('#search_content').submit(function(e) {
    e.preventDefault();
    location.href = "./index.php?page=search&s=" + encodeURI($('#search').val())
})
</script>