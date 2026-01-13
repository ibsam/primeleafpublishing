<!DOCTYPE html>
<html lang="en-US">

<head>
<!--====== Title ======-->
<title> Thankyou | Your Brand</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<?php include_once("includes/head.php")?>

<style>

.global_button {
    margin: 30px 0 0 0;
}

.global_button a:hover {
    background: #000;
    color: #fff !important;
}

.global_button a {
    background: #c74e3f;
    width: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 55px;
    border-radius: 14px;
    margin: auto;
    color: #fff;
}

.banner-content p:before {
    content: '';
    display: block;
    position: absolute;
    background-image: url(assets/images/heart_left.webp);
    background-repeat: no-repeat;
    width: 128px;
    height: 116px;
    bottom: -140px;
    left: 22%;
    animation: pulse 1s infinite ease-in-out alternate;
}

.banner-content h1:after{
    left: unset;
    right: 14%;
    background-image: url(assets/images/heart_left.webp);
    width: 10%;
    height: 116px;
    top: -40px;
}


.thanksyou_img img {
    width: 35%;
    margin-top: -60px;
}

section.thanksyou_sec {
    background: #000;
    display: flex;
    align-items: center;
    justify-content: center;
    background-position: center;
    background-size: cover;
    padding: 100px 0 80px 0;
}

header.thank_header {
    position: absolute;
    width: 100%;
    margin: auto;
    top: 0;
}

.thanksyou_img {
    text-align: center;
}

.banner-content {
    text-align: center;
    position: relative;
}

.banner-content h1 {
    font-size: 40px !important;
    line-height: 55px !important;
    text-transform: uppercase;
    color: #fff;
    margin: 0 0 20px 0;
    position: relative;
}

.banner-content p {
    font-size: 17px !important;
    text-transform: capitalize;
    color: #fff;
    line-height: 28px;
    position: relative;
    width: 80% !important;
    margin: auto !important;
    font-family: 'Poppins' !important;
}

.banner-content h1 span {
    color: #C74E3F;
    display: block;
}

.banner-content p span {
    font-weight: 400;
    position: relative;
}

.pulse {
  animation: pulse 1.5s infinite ease-in-out alternate;
}
@keyframes pulse {
  from { transform: scale(1); }
  to { transform: scale(1.1); }
}

@media only screen and (max-width: 1560px){

.banner-content h1 {
    font-size: 60px ;
    line-height: 70px;
}

.banner-content p {
    line-height: 27px;
    font-size: 20px;
    width: 80%;
    margin: auto;
}

section.thanksyou_sec {
    overflow: hidden !important;
}
    
}

@media only screen and (max-width: 767px){

section.thanksyou_sec {
    background-size: cover !important;
    padding: 0 !important;
}

.thanksyou_img img {
    margin: -20px 0 0 0;
    width: 90% !important;
}

.banner-content h1 {
    font-size: 50px !important;
    line-height: 60px !important;
}

.banner-content p {
    width: 100% !important;
    font-size: 20px !important;
    line-height: 30px;
}

.banner-content:before {
    width: 25%;
    bottom: 150px;
}

.banner-content h1:before {
    width: 17%;
    left: 0;
    bottom: 0;
    top: unset;
}

.banner-content h1:after {
    right: 0;
    width: 15%;
}

.banner-content p:before {
    width: 15%;
    background-size: 100%;
    left: 10%;
    top: 90%;
}

    
}
</style>

</head>
<body>   

<?php include_once("includes/header.php")?>

<section class="thanksyou_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <img src="assets/images/astros.webp" alt="">
                    <h1><span>Thank you for your response.</span> We will contact you as soon as possible!</h1>
                    <p>Our team of professional eBook writers will assist you in becoming a best-seller author. If you're looking for a professional eBook writer for your book, we're here to help.</p>
                    <div class="global_button">
                        <a href="/">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Banner End ======-->
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<?php include_once("includes/footer.php")?>

</body>
</html>