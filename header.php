<?php
function getDayInWeek($timeString)
{
    $thuTrongTuan = 'Thứ ';
    switch (getdate($timeString)['wday']) {
        case 0:
            $thuTrongTuan .= 'Hai';
            break;
        case 1:
            $thuTrongTuan .= 'Ba';
            break;
        case 2:
            $thuTrongTuan .= 'Tư';
            break;
        case 3:
            $thuTrongTuan .= 'Năm';
            break;
        case 4:
            $thuTrongTuan .= 'Sáu';
            break;
        case 5:
            $thuTrongTuan .= 'Bảy';
            break;
        default:
            $thuTrongTuan = 'Chủ Nhật';
    }
    return $thuTrongTuan;
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>EZLife</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--    <link href="https://fonts.googleapis.com/css?family=Monoton|Muli:400,700,900&display=swap&subset=vietnamese" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,900&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/owlcarousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="./node_modules/owlcarousel/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="./node_modules/animate.css/animate.css">
    <link rel="stylesheet" href="./assets/scss/style.css">
</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2030381217235124&autoLogAppEvents=1"></script>
<section class="top-header">
</section>
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img src="./assets/image/ezlife-logo-horizonal.svg" alt="DLT">
            </a>
            <button class="btn main-navbar-toggler d-lg-none" type="button"
                    aria-controls="main-navbar-content"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="main-navbar-content">
                <button class="main-navbar-toggler d-lg-none btn">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                <ul class="navbar-nav mb-0">
                    <li class="nav-item nav-item--logo d-lg-none">
                        <a class="navbar-brand" href="#">
                            <img src="./assets/image/logo.gif" alt="DLT">
                        </a>
                    </li>
                    <li class="nav-item nav-item--home">
                        <a class="nav-link" href="#page-hero">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page-intro">
                            VỀ EZLIFE
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page-process">
                            VẬN HÀNH
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page-half-content-right">ƯU ĐIỂM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page-half-content-left">HỢP TÁC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page-partner">ĐỐI TÁC THANH TOÁN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page-footer">LIÊN HỆ</a>
                    </li>
                </ul>
                <!--                <form class="search-form">-->
                <!--                    <input class="form-control" type="search" placeholder="Tim Kiếm">-->
                <!--                    <button class="btn nav-link rounded-0" type="submit">-->
                <!--                        <i class="fa fa-search" aria-hidden="true"></i>-->
                <!--                    </button>-->
                <!--                </form>-->
            </div>
        </nav>
    </div>
</header>

