<?php 
date_default_timezone_set('Asia/Bangkok');
$session = session(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Boostrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
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

    a.nav-link {
        color: #FFFFFF;
        decoration: none;
    }

    .nav-link:hover {
        color: #FFFFFF;
        background-color: #1E90FF;
    }

    .nav-link:visited {
        color: #FFFFFF;
    }

    #bg-drak {
        box-shadow: 0px 5px 5px rgb(0 0 0 / 35%);
    }

    #text0 {
        padding-left: 20px;
    }

    #u0_div {

        margin-bottom: 10px;
        margin-top: 50px;
        width: 668px;
        background: inherit;
        background-color: white;
        border: none;
        border-radius: 10px;
        box-shadow: 5px 5px 5px rgb(0 0 0 / 35%);
    }

    #container {
        background-color: lightgray;
        width: 100%;
        height: 1300px;
    }

    #u1_text {
        font-weight: 700;
        font-style: normal;
        font-size: 24px;
        letter-spacing: 0.4px;
        text-align: center;
        padding-top: 20px;
    }

    #u13_div {
        width: 192px;
        height: 907px;
        /* background-color: rgba(145, 0, 18, 0.6431372549019608); */
        background-color: #001233;

    }

    .form-row {
        display: flex;
        padding-left: 8rem;
        padding-bottom: 1rem;
    }




    #div {


        height: 192px;
        /* background-color: rgba(170, 170, 170, 0.9921568627450981); */

    }

    #u14 {
        width: 178px;
        height: 192px;
        padding: 7px;
    }

    #u14_div {
        position: absolute;
        width: 178px;
        height: 192px;
        background: inherit;
        background-color: rgba(170, 170, 170, 0.9921568627450981);

    }

    #u18 {
        position: absolute;
        top: 392px;
        padding-left: 7px;
    }

    #u18_div {
        width: 178px;
        height: 3px;
        background-color: rgba(255, 255, 255, 0.9921568627450981);

    }

    #u16_div {
        width: 178px;
        height: 30px;
        padding: 2px 24px;
        text-align: center;
        /* background-color: rgba(145, 0, 18, 0.6431372549019608); */
        background-color: #023e8a;
    }

    #text {
        text-decoration: none;
        color: #FFFFFF;
    }

    #u26_div {
        position: absolute;
        width: 410px;
        height: 37px;
        /* background-color: rgba(159, 32, 48, 0.9); */
        background-color: #001233;




    }

    #u27_text {
        font-weight: lighter;
        font-style: normal;
        color: #FFFFFF;
        letter-spacing: 0.6px;
        padding: 7px;
        font-size: 16px;
    }

    .u12_div {
        width: 130px;
        height: 39px;
        /* background-color: rgba(230, 115, 198, 0.6274509803921569); */
        background-color: #023e8a;
        border-color: rgba(255, 255, 255, 1);
        font-weight: lighter;
        font-style: normal;
        font-size: 16px;
        color: #FFFFFF;
        text-align: left;
        padding: 7px;
        margin-bottom: 3px;
        padding-left: 8px;
    }

    .address_div {
        width: 130px;
        height: 80px;
        /* background-color: rgba(230, 115, 198, 0.6274509803921569); */
        background-color: #023e8a;
        border-color: rgba(255, 255, 255, 1);
        font-weight: lighter;
        font-style: normal;
        font-size: 16px;
        color: #FFFFFF;
        text-align: left;
        padding: 7px;
        margin-bottom: 3px;
        padding-left: 8px;
    }


    .u13_div {
        width: 280px;
        height: 39px;
        /* background-color: rgba(230, 115, 198, 0.34509803921568627); */
        background-color: #caf0f8;
        border-color: rgba(255, 255, 255, 1);
        font-weight: lighter;
        font-style: normal;
        font-size: 16px;
        color: #000000;
        text-align: left;
        padding: 7px;
        margin-bottom: 3px;
        padding-left: 8px;
    }

    .address_div_data {
        width: 280px;
        height: 80px;
        /* background-color: rgba(230, 115, 198, 0.34509803921568627); */
        background-color: #caf0f8;
        border-color: rgba(255, 255, 255, 1);
        font-weight: lighter;
        font-style: normal;
        font-size: 16px;
        color: #000000;
        text-align: left;
        padding: 7px;
        margin-bottom: 3px;
        padding-left: 8px;
    }

    #data {
        display: flex;
        background-color: rgba(230, 115, 198, 0.34509803921568627);
    }

    #u235 {
        border-width: 0px;
        position: absolute;
        top: 130px;
        display: flex;
        font-family: 'Roboto Bold', 'Roboto Regular', 'Roboto', sans-serif;
        font-weight: 700;
        font-style: normal;
        font-size: 15px;
    }

    #btn {
        padding-bottom: 1rem;
    }

    footer,
    #footer_link {
        color: #FFFFFF;
        text-decoration: none;
    }
    </style>

</head>

<body>

    <div id="container">
        <!-- Tag Header -->
        <nav class="navbar navbar-expand-lg bg-dark" id="bg-drak">
            <div class="container-fluid">
                <a class="navbar-brand" id="text0" href="/index">ISAC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/seach_page_index" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ค้นหาข้อมูลศิษย์เก่า
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/seach_page_index">จากชื่อ</a></li>
                                <li><a class="dropdown-item" href="/seach_page_index">จากปีแรกเข้า</a></li>
                                <li><a class="dropdown-item" href="/seach_page_index">จากจังหวัด</a></li>
                                <li><a class="dropdown-item" href="/seach_page_index">จากหมู่เรียน</a></li>
                                <li><a class="dropdown-item" href="/seach_page_index">จากรหัสนักศึกษา</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profile">ข้อมูลส่วนตัว</a>
                        </li>

                    </ul>
                    <a class="nav-link" href="/profile"><?php echo $session->get('FName_eng'); ?></a>
                </div>
            </div>
        </nav>
        <br>




        <div id="u0_div" class="container">

            <a style="color:black" href="/index">
                <div id="u235" class="ax_default label" style="cursor: pointer;">
                    <div id="u235_text" class="text ">
                        <br>
                        <p><span>
                                <&nbsp;back </span>
                        </p>
                    </div>
                </div>
            </a>

            <form action="">
                <div id="u1_text">
                    <p><span>แก้ไขประวัติส่วนตัว</span></p>
                </div>

                <div class="form-row">




                    <div class="form-group" style="padding-bottom: 20px;">
                        <div id="u26_div" class="">
                            <div id="u27_text" class="text ">
                                <p><span>ข้อมูลด้านการศีกษา</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 35px;">
                        <div id="u12-1_div" class="u12_div">
                            <p><span>รหัสประจำตัว</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>เลขบัตรประชาชน</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ชื่อ</span></p>
                        </div>
                        <!-- <div id="u12-1_div" class="u12_div">
                            <p><span>นามสกุล</span></p>
                        </div> -->
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ชื่อภาษาอังกฤษ</span></p>
                        </div>
                        <!-- <div id="u12-1_div" class="u12_div">
                            <p><span>นามสกุลอังกฤษ</span></p>
                        </div> -->
                        <div id="u12-1_div" class="u12_div">
                            <p><span>คณะ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>สาขาวิชา</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>หมู่เรียน</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>วุฒิการศึกษา</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ปีที่เข้าศึกษา</span></p>
                        </div>

                        <div id="u26_div" class="">
                            <div id="u27_text" class="text ">
                                <p><span>ข้อมูลส่วนบุคคล</span></p>
                            </div>
                        </div>

                        <div id="u12-1_div" class="u12_div" style="margin-top:38px;">
                            <p><span>วันเดือนปีเกิด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>จังหวัดที่เกิด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>สัญชาติ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ศาสนา</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>กลุ่มเลือด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ที่อยู่</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ตำบล</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>อำเภอ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>จังหวัด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>รหัสไปรษณีย์</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>เบอร์โทรติดต่อ</span></p>
                        </div>


                    </div>

                    <div class="form-group" style="padding-top: 35px;">
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('stu_id'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('id_cardnumber'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('name_prefix')." ".$session->get('FName')." ".$session->get('LName'); ?></span>
                            </p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo   $session->get('sex')." ".$session->get('FName_eng')." ".$session->get('LName_eng'); ?></span>
                            </p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('faculty'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('major'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('section'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('edu_level'); ?></span></p>
                        </div>


                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('first_year'); ?></span></p>
                        </div>

                        <div id="u12-1_div" class="u13_div" style="margin-top:38px;">
                            <p><span>
                                    <?php 
                        $date = $session->get('d_m_y_birth');
                        $dm = 'd/m/';
                        $year=(date("Y")+543);
                        echo date($dm.$year,strtotime($date));
                        ?>
                                </span></p>
                        </div>

                        <div id="u12-1_div" class="u13_div">
                            <p><input type="text" value="<?php echo  $session->get('province_birth'); ?>"></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('nationality'); ?></span></p>

                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('religion'); ?></span></p>

                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input type="text" value="<?php echo  $session->get('blood_type'); ?>"></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input type="text" value="<?php echo  $session->get('Address'); ?>"></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input type="text" value="<?php echo  $session->get('SubDistrict'); ?>"></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input type="text" value="<?php echo  $session->get('District'); ?>"></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input type="text" value="<?php echo  $session->get('Province'); ?>"></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input type="text" value="<?php echo  $session->get('Zipcode'); ?>"></p>
                        </div>



                        <!-- <div id="u12-1_div" class="address_div_data">
                            <p><span><?php echo  "บ้านเลขที่ ".$session->get('Address')." ตำบล ". $session->get('SubDistrict')."<br>อำเภอ ".$session->get('District')." จังหวัด ".$session->get('Province')."<br>รหัสไปรษณีย์ ".$session->get('Zipcode'); ?></span>
                            </p>
                        </div> -->

                        <div id="u12-1_div" class="u13_div">
                            <p>+66 <input type="text" value="<?php echo  $session->get('phone_number'); ?>"></p>
                        </div>


                    </div>

                </div>


                <div id="btn">
                    <center>
                        <button type="submit" id="submit" class="btn btn-warning">อัพเดทข้อมูล</button>
                        <button class="btn btn-danger">ยกเลิก</button>
                    </center>
                </div>
            </form>

        </div>


    </div>
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