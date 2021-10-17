<?php $session = session();

ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- CSS -->

    <style>
    /* font/header/footer  */
    @import 'https://fonts.googleapis.com/css?family=Kanit';

    body {
        font-family: 'Kanit', sans-serif;
    }

    .navbar-brand {
        color: #FFFFFF;
        font-size: 30px;
        font-weight: bold;
        decoration: none;
    }

    .navbar-brand:hover {
        color: #FFFFFF;

    }

    .nav-link {
        color: #FFFFFF;
    }

    .nav-link:hover {
        color: #1E90FF;
        /* background-color: #1E90FF; */
    }

    .nav-link:visited {
        color: #FFFFFF;
    }

    #navbarDropdown:hover {
        color: #1E90FF;
    }

    #text0 {
        padding-left: 20px;
    }

    #text0:hover {
        color: #1E90FF;
    }

    #bg-drak {
        box-shadow: 0px 5px 5px rgb(0 0 0 / 35%);
    }

    #text0 {
        padding-left: 20px;
    }

    /* navbar  */

    /* content */
    .content {
        background-color: lightgrey;
        height: 1500px;
        width: auto;
    }

    #container_card {
        width: 80rem;
        height: auto;
        padding: auto;
    }


    .card-body {
        height: 1000px;
    }

    .row {
        margin-top: 1rem;
        /* justify-self: center; */
    }

    #row_seachoption {
        padding-right: 150px;
        padding-left: 180px;
        margin: 15px;
    }

    .accordion-toggle {
        color: #FFFFFF;
        background-color: #212529;
    }

    #toggle-icon {
        /* text-align: inline; */
        float: center;
    }

    #label1 {
        width: 150px;
        text-align: right;
        font-size: 16px;
        padding: 7.5px;
    }

    #label2 {
        text-align: left;
        width: 150px;
        font-size: 16px;
        padding: 7.5px;
    }

    input {
        padding: 5px;
        border-color: lightgrey;
        border-radius: 1px;

    }



    #input_label2 {
        padding: 0px;
        text-align: left;
    }

    /* #input_label3 {
        width: 132px;
        text-align: left;
    } */

    input {

        font-size: 16px;
    }

    #col_seach {
        margin-bottom: 1rem;
    }

    #btn_seach {
        color: #FFFFFF;
        background-color: #1E90FF;
    }

    /* table data  */
    .row {
        /* margin-top: 40px; */
        padding: 0 10px;
    }

    .clickable {
        cursor: pointer;
    }

    .panel-heading div {
        margin-top: -18px;
        font-size: 15px;
    }

    .panel-heading div span {
        margin-left: 5px;
    }

    .panel-body {
        display: none;
    }

    /* toggle-tablesesch */
    .table tr {
        cursor: pointer;
    }

    .hiddenRow {
        padding: 0 4px !important;
        background-color: #eeeeee;
        font-size: 13px;
    }

    /* tabledata */
    .titledata,
    .contentdata {
        font-size: 14px;
    }

    .titledata {

        background-color: #212529;
        color: #FFFFFF;
    }

    th,
    td {
        text-align: center;
        vertical-align: middle;
    }

    /* td #first_year {
        width: 2rem;
    } */

    footer,
    #footer_link {
        color: #FFFFFF;
        text-decoration: none;
    }
    </style>
    <title>Search Page</title>
</head>

<body>
    <!-- <div class="container"> -->
    <!-- Tag Header -->
    <nav class="navbar navbar-expand-lg bg-dark" id="bg-drak">
        <div class="container-fluid">
            <a class="navbar-brand" id="text0" href="/index">ISAC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/search_page_index" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ค้นหาข้อมูลศิษย์เก่า
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/search_page_index">จากชื่อ</a></li>
                            <li><a class="dropdown-item" href="/search_page_index">จากปีแรกเข้า</a></li>
                            <li><a class="dropdown-item" href="/search_page_index">จากจังหวัด</a></li>
                            <li><a class="dropdown-item" href="/search_page_index">จากหมู่เรียน</a></li>
                            <li><a class="dropdown-item" href="/search_page_index">จากรหัสนักศึกษา</a></li>
                        </ul>
                    </li>


                </ul>

                <!-- ปุ่มผู้ใช้ และ logout -->
                <div class="btn-group">
                    <a class="nav-link dropdown-toggle" href="/search_page_index" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        &nbsp;&nbsp;<?php echo $session->get('FName_eng'); ?>&nbsp;&nbsp;

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
                        <li> <a class="dropdown-item" href="/profile">
                                <i class="far fa-address-card"></i>&nbsp;&nbsp;ข้อมูลส่วนตัว</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('Login/logout'); ?>" id="logout_btn">
                                <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;ออกจากระบบ</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <!-- content  -->
    <div class="content">
        <br><br>
        <div class="container" id="container_card">

            <div class="card">
                <br>
                <center>
                    <h4>ค้นหาข้อมูลศิษย์เก่า</h4>
                </center>
                <div class="card-body">

                    <!-- toggle-table-seach -->

                    <table class="table table-condensed" style="border-collapse:collapse;">
                        <thead>
                            <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                                <td id="table_title">
                                    <div class="table_title">ค้นหาจาก... &nbsp;<i class="fas fa-search"
                                            id="toggle-icon"></i></div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>

                            <td colspan="6" class="hiddenRow">
                                <div class="accordian-body collapse in" id="demo1" aria-expanded="true">

                                    <form action="/seach_page_index/skeyword" method="post">
                                        <div class="row" id="row_seachoption">
                                            <div class="col-3" id="label1">ชื่อ</div>
                                            <div class="col" id="input_label1">
                                                <input type="text" name="name" placeholder="กรอกชื่อ">


                                            </div>
                                            <div class="col-3" id="label2">นามสกุล</div>
                                            <div class="col" id="input_label2">
                                                <input type="text" placeholder="กรอกนามสกุล">
                                            </div>
                                        </div>
                                        <div class="row" id="row_seachoption">
                                            <div class="col-3" id="label1">รหัสนักศึกษา</div>
                                            <div class="col" id="input_label1">
                                                <input type="text" placeholder="กรอกรหัสนักศึกษา">
                                            </div>
                                            <div class="col-3" id="label2">หมู่เรียน</div>
                                            <div class="col" id="input_label2">
                                                <input type="text" placeholder="กรอกหมู่เรียน">
                                            </div>
                                        </div>
                                        <div class="row" id="row_seachoption">
                                            <div class="col-3" id="label1">จังหวัด</div>
                                            <div class="col" id="input_label1">
                                                <input type="text" placeholder="กรอกจังหวัด">
                                            </div>
                                            <div class="col-3" id="label2">ปีการศึกษาแรกเข้า</div>
                                            <div class="col" id="input_label2">
                                                <input type="text" placeholder="กรอกปีการศึกษาแรกเข้า">
                                            </div>
                                        </div>
                                        <center>
                                            <div class="row">
                                                <div class="col" id="col_seach">
                                                    <button type="submit" name="btnseach" class="btn"
                                                        id="btn_seach">ค้นหา
                                                    </button>
                                                </div>
                                        </center>

                                    </form>
                                </div>
                            </td>
                        </tbody>
                    </table><!-- toggle-table-seach -->


                    <!-- table data  -->
                    <div class="mt-3">
                        <table class="table table-bordered" id="users-list">
                            <thead>
                                <tr class="titledata">
                                    <th style="width: 80px;">รหัสนักศึกษา</th>
                                    <th style="width: 70px;">คำนำหน้า</th>
                                    <th style="width: 70px;">ชื่อ</th>
                                    <th style="width: 100px;">นามสกุล</th>
                                    <!-- <th>ชื่อภาษอังกฤษ</th>
                                    <th>นามสกุลอังกฤษ</th> -->
                                    <th style="width: 180px;">คณะ</th>
                                    <th>สาขาวิชา</th>
                                    <th>หมู่เรียน</th>
                                    <th>ปีการศึกษาแรกเข้า</th>
                                    <th>จังหวัด</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($users): ?>
                                <?php foreach($users as $row): ?>
                                <tr class="contentdata">
                                    <td><?php echo $row['stu_id']; ?></td>
                                    <td><?php echo $row['name_prefix']; ?></td>
                                    <td><?php echo $row['FName']; ?></td>
                                    <td><?php echo $row['LName']; ?></td>
                                    <!-- <td><?php // echo $row['FName_eng']; ?></td>
                                    <td><?php // echo $row['LName_eng']; ?></td> -->
                                    <td><?php echo $row['faculty']; ?></td>
                                    <td><?php echo $row['major']; ?></td>
                                    <td><?php echo $row['section']; ?></td>
                                    <td><?php echo $row['first_year']; ?></td>
                                    <td><?php echo $row['Province']; ?></td>

                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>

                        </table>

                    </div>
                    <!-- table data  -->

                </div>


                <!-- สำหรับลูกเล่น -->

                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <link rel="stylesheet" type="text/css"
                    href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
                <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
                </script>


                <script>
                $(document).ready(function() {
                    $('#users-list').DataTable();
                });
                </script>

                <!-- สำหรับลูกเล่น & filter -->




            </div>
            <!-- card-body -->

        </div>
        <!-- card -->

    </div>
    <!-- container-card -->

    </div>
    <!-- content -->



    </div>
    <!-- container -->
    <!-- <br> -->
    <footer class="bg-dark text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2020 Copyright:
            <a class="text" href="#" id="footer_link">ISAC.org</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>