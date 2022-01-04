<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Florence</title>
</head>
<style>
    @font-face {
        font-family: playfair;
        src: url(PlayfairDisplay-Italic.ttf);
    }

    @font-face {
        font-family: playfairRegular;
        src: url(PlayfairDisplay-Regular.ttf);
    }

    * {
        font-family: 'Noto Sans', sans-serif;
    }

    .mainBanner {
        height: 730px;
        width: 100%;
        position: relative;
    }

    .mainBanner img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top;
    }

    .skincare {
        font-family: playfairRegular;
        font-size: 48px;
        line-height: 61.34px;
        margin-top: 10px;
    }

    .skincare span {
        font-family: playfair;
    }

    .posAbsol {
        position: absolute;
        top: 50%;
        left: 22.2%;
        transform: translate(-50%, -50%);


    }

    .BannerText {
        color: #fff;
        font-size: 48px;
    }

    .BannerText div:nth-child(1),
    .created {
        font-family: 'Noto Sans', sans-serif;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 400;
        line-height: 16.34px;
    }



    .cblack {
        color: black;
    }

    .withlove {
        background-color: #F4EDE7;
        height: 503px
    }

    .withlove .skinBtn {
        margin-top: 30px
    }

    .withlove .skinBtn:hover {
        color: black;
    }



    .created {
        font-family: 'Noto Sans', sans-serif;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 400;
        line-height: 16.34px;
    }

    .orBB {
        font-family: playfair;
        font-size: 36px;
        line-height: 46.01px;
        margin-top: 15px;
    }

    /* .swiper {
        margin-top: 3rem
    } */

    .pr41 {
        padding-left: 41%;
    }

    .slideCard {
        height: 461.71px
    }

    .illumi {
        font-size: 14px;
        font-weight: 700;
        font-family: Noto Sans;
    }

    /*--start--*/
    /*--created by hassan--*/

    /*--Start Skin Product Styling--*/

    .customContainer {
        max-width: 1440px;
        margin: auto;
    }

    .skinProductImage {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .skinProductImageOne {
        width: 270px;
        height: 342.03px;
        overflow: hidden;
    }

    .skinProductImageTwo {
        width: 202px;
        height: 257px;
        overflow: hidden;
    }

    .skinProductImageThree {
        width: 338px;
        height: 257px;
        overflow: hidden;
    }

    .skinProductImage img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .skinPadding {
        padding: 50px 100px;
    }

    .skinProductSection {
        /* max-height: 713px; */
        background-color: #F4EDE7;
    }

    .skinProductColumnOne {
        display: flex;
        column-gap: 30px;
    }

    .skinProductImageOne {
        margin-top: 72px;
    }

    .skinProductHeadingP p {
        font-size: 12px;
        font-weight: 500;
        font-family: CantarelRegular;
        color: #000000;
    }

    .skinProductColumnTwo {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 80px;

    }

    .skinProductHeading span {
        font-family: playfair;
    }

    .skinProductHeading h1 {
        font-family: playfairRegular;
        color: #000000;
    }

    .skinProductText p {
        font-size: 14px;
        font-family: 'Noto Sans', sans-serif;
        font-weight: 400;
    }

    .saleBtn:hover {
        color: #000000;
    }


    /*--End Skin Product Styling--*/


    /*--Start Skin Product Image Styling--*/

    .skinProductImageColumnOne,
    .skinProductImageColumnTwo,
    .skinProductImageColumnThree,
    .skinProductImageColumnFour,
    .skinProductImageColumnFive {
        position: relative;
    }

    .productImageOne {
        width: 573px;
        height: 752px;
        overflow: hidden;
    }

    .productImageTwo {
        width: 337px;
        height: 409px;
        overflow: hidden;
    }

    .productImageThree {
        width: 337px;
        height: 324px;
        overflow: hidden;
        margin-top: 19px;
    }

    .productImageFour {
        width: 385px;
        height: 494px;
        overflow: hidden;
    }

    .productImageFive {
        width: 385px;
        height: 241px;
        overflow: hidden;
        margin-top: 17px;
    }

    .skinProductImageBox img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .skinProductImageBox {
        justify-content: space-evenly;
    }

    .productImageOneTitle p,
    .productImageTwoTitle p,
    .productImageThreeTitle p,
    .productImageFourTitle p,
    .productImageFiveTitle p {
        font-size: 36px;
        font-family: playfairRegular;
        font-style: italic;
        color: #000000;
    }

    .productImageOneTitle {
        position: absolute;
        top: 4.5%;
        right: 10%;
    }

    .productImageTwoTitle {
        position: absolute;
        top: 9%;
        right: 14%;
    }

    .productImageThreeTitle {
        position: absolute;
        top: 9%;
        right: 14%;
    }

    .productImageFourTitle {
        position: absolute;
        top: 7%;
        right: 14%;
    }

    .productImageFiveTitle {
        position: absolute;
        top: 11%;
        right: 14%;
    }

    /*--End Skin Product Image Styling--*/


    /*--Start Sale Product Styling--*/

    .saleProductSection {
        background-image: url('assets/img/1x/saleBackgroundImage.png');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 600px;
        position: relative;
        margin-bottom: 50px;
    }

    .saleProduct {
        position: absolute;
        top: 18%;
        left: 50%;
        transform: translate(-50%, 50%);
    }

    .saleProductText span {
        font-size: 48px;
        font-family: playfairRegular;
        color: #000000;
    }

    .saleProductText h2 {
        font-size: 48px;
        font-family: playfairRegular;
        font-style: italic;
        color: #000000;
        text-align: center;
    }

    .saleProductButton {
        text-align: center;
        margin-top: 40px;
    }

    .saleButton {
        font-size: 14px;
        font-family: 'Noto Sans', sans-serif;
        background-color: #F4EDE7;
        color: #000000;
        height: 37px;
        padding: 0px 36px;
        border: none;
        outline: none;
        font-weight: 700;
        border: 1px solid transparent;
        transition: 0.5s all ease-in-out;
    }

    .saleButton:hover {
        background-color: #CEA689;
        color: #ffffff;
        outline: 1px solid #ffffff;
    }




    /*--End Sale Product Styling--*/



    /*--Media Query--*/
    @media only screen and (max-width: 2560px) {
        .productImageThree {
            width: 337px;
            height: 303px;
            overflow: hidden;
            margin-top: 40px;
        }

        .productImageFive {
            width: 385px;
            height: 217px;
            overflow: hidden;
            margin-top: 40px;
        }
    }

    @media only screen and (max-width: 1600px) {
        .productImageTwo {
            width: 337px;
            height: 400px;
            overflow: hidden;
        }

        .productImageThree {
            width: 337px;
            height: 312px;
            overflow: hidden;
            margin-top: 40px;
        }

        .productImageFour {
            width: 385px;
            height: 479px;
            overflow: hidden;
        }

        .productImageFive {
            width: 385px;
            height: 232px;
            overflow: hidden;
            margin-top: 40px;
        }
    }

    @media only screen and (max-width: 1366px) {
        .productImageThree {
            width: 337px;
            height: 331px;
            overflow: hidden;
            margin-top: 20px;
        }

        .productImageFive {
            width: 385px;
            height: 252px;
            overflow: hidden;
            margin-top: 20px;
        }
    }


    @media only screen and (max-width: 1024px) {

        .skinProductImageBox {
            column-gap: 17px;
        }

        .productImageOne {
            width: 100%;
            height: 752px;
            overflow: hidden;
        }

        .productImageTwo {
            width: 100%;
            height: 409px;
            overflow: hidden;
        }

        .productImageThree {
            width: 100%;
            height: 324px;
            overflow: hidden;
            margin-top: 19px;
        }

        .productImageFour {
            width: 100%;
            height: 494px;
            overflow: hidden;
        }

        .productImageFive {
            width: 100%;
            height: 241px;
            overflow: hidden;
            margin-top: 17px;
        }

        .skinProduct {
            flex-direction: column;
        }

        .skinProductColumnOne {
            margin: auto;
        }

        .skinProductColumnTwo {
            width: 60%;
            margin: auto;
            padding: 0px;
            margin-top: 20px;
        }

        .productImageFourTitle {
            position: absolute;
            top: 7%;
            right: 10%;
        }
    }


    @media only screen and (max-width: 768px) {
        .skinProductImageBox {
            flex-direction: column;
        }

        .productImageOne {
            height: 650px;
        }

        .productImageTwo,
        .productImageThree,
        .productImageFour,
        .productImageFive {
            height: 500px;
        }

        .productImageThree,
        .productImageFive {
            margin-top: 0px;
        }

        .productImageOneTitle,
        .productImageTwoTitle,
        .productImageThreeTitle,
        .productImageFourTitle,
        .productImageFiveTitle {
            position: absolute;
            top: 7%;
            right: 9%;
        }

        .saleProductSection {
            height: 500px;
        }

        .saleProductText span,
        .saleProductText h2 {
            font-size: 36px;
        }

        .saleProduct {
            position: absolute;
            top: 12%;
            left: 50%;
            transform: translate(-50%, 50%);
        }

        .saleButton {
            padding: 0px 20px;
        }

        /* .skinProduct {
            flex-direction: column;
        }

        .skinProductColumnOne {
            margin: auto;
        }
        .skinProductColumnTwo {
            width: 60%;
            margin: auto;
        } */

    }

    @media only screen and (max-width: 540px) {
        .skinProductColumnTwo {
            padding: 0px;
            margin-top: 25px;
        }

        /* .productImageOne {
            height: 400px;
            overflow: hidden;
        }

        .productImageTwo {
            height: 250px;
            overflow: hidden;
        }

        .productImageThree {
            height: 250px;
            overflow: hidden;
            margin-top: 0px;
        }

        .productImageFour {
            height: 250px;
            overflow: hidden;
        }

        .productImageFive {
            height: 250px;
            overflow: hidden;
            margin-top: 0px;
        } */

        /* .productImageOneTitle {
            position: absolute;
            top: 8%;
            left: 42%;
        }

        .productImageTwoTitle {
            position: absolute;
            top: 46%;
            left: 20%;
        }

        .productImageThreeTitle {
            position: absolute;
            top: 46%;
            left: 80%;
        }

        .productImageFourTitle {
            position: absolute;
            top: 71%;
            left: 3%;
        }

        .productImageFiveTitle {
            position: absolute;
            top: 71%;
            left: 80% */
        /* } */

        .saleProductText h2 {
            font-size: 28px;
        }
    }

    @media only screen and (max-width: 414px) {
        .skinPadding {
            padding: 30px 30px;
        }

        /* .skinProductColumnTwo {
            padding: 10px;
        }

        .skinProductImageOne {
            width: 130px;
            height: 212.03px;
            overflow: hidden;
        }

        .skinProductImageTwo {
            width: 102px;
            height: 137px;
            overflow: hidden;
        }

        .skinProductImageThree {
            width: 198px;
            height: 127px;
        }

        .skinProductImageOne {
            margin-top: 30px;
        }

        .skinProductColumnTwo {
            margin-top: 20px;
        }

        .productImageOne,
        .productImageTwo,
        .productImageThree,
        .productImageFour,
        .productImageFive {
            width: 100%;
        }

        .productImageOne {
            height: 500px;
            overflow: hidden;
        }

        .productImageTwo {
            height: 350px;
            overflow: hidden;
        }

        .productImageThree {
            height: 350px;
            overflow: hidden;
            margin-top: 0px;
        }

        .productImageFour {
            height: 350px;
            overflow: hidden;
        }

        .productImageFive {
            height: 350px;
            overflow: hidden;
            margin-top: 0px;
        }

        .skinProductImageColumnTwo,
        .skinProductImageColumnThree {
            display: flex;
            flex-wrap: wrap;
        }

        .productImageOneTitle {
            position: absolute;
            top: 3.5%;
            left: 29%;
        }

        .productImageTwoTitle {
            position: absolute;
            top: 28.5%;
            left: 58.5%;
        }

        .productImageThreeTitle {
            position: absolute;
            top: 45.8%;
            left: 71%;
        }

        .productImageFourTitle {
            position: absolute;
            top: 63.5%;
            left: 36%;
        }

        .productImageFiveTitle {
            position: absolute;
            top: 81%;
            left: 70%
        }

        .skinProductText p {
            font-size: 12px;
        }

        .saleProductSection {
            height: 300px;
        } */

        .saleProductText span,
        .saleProductText h2 {
            font-size: 20px;
        }

        .saleButton {
            padding: 0px 10px;
            height: 30px;
            font-size: 12px;
        }

        .saleProductButton {
            margin-top: 20px;
        }

        .saleProduct {
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translate(-50%, 50%);
        }

        .skinProduct {
            flex-direction: column;
        }

        .skinProductColumnOne {
            margin: auto;
        }

        .skinProductColumnTwo {
            width: 60%;
            margin: auto;
        }
    }



    /*--created by hassan--*/
    /*--end--*/













    /* slider */

    @media only screen and (max-width:768px) {
        .posAbsol {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
        }
    }

    @media only screen and (max-width:414px) {
        .skincare {
            font-family: playfairRegular;
            font-size: 33px;
            line-height: 48.34px;
            margin-top: 10px;
        }

        .withlove {
            background-color: #F4EDE7;
            height: 370px;
        }

    }

    @media only screen and (max-width:375px) {
        .skincare {
            font-family: playfairRegular;
            font-size: 28px;
            line-height: 38.34px;
            margin-top: 10px;
        }
    }
</style>

<body>
    <div class="head text-center">
        <label for="">FREE SHIPPING ON ALL ORDER OVER $100</label>
    </div>
    <div class="header-sec">
        <div class="container">
            <div class="hover-sec show">
                <div class="container1">
                    <div class="row">
                        <div class="col-lg-2">
                            <ul>
                                <a href="filter.php">
                                    <li> Shop All</li>
                                </a>
                                <a href="">
                                    <li> Moisturizers</li>
                                </a>
                                <a href="">
                                    <li> Oils</li>
                                </a>
                                <a href="">
                                    <li> Tonics</li>
                                </a>
                                <a href="">
                                    <li> Cleansers</li>
                                </a>
                            </ul>
                        </div>
                        <div class="col-lg-2">
                            <ul>
                                <a href="">
                                    <li> Sets</li>
                                </a>
                                <a href="">
                                    <li> Oily Skin</li>
                                </a>
                                <a href="">
                                    <li> Dry Skin</li>
                                </a>
                                <a href="">
                                    <li> Normal Skin</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="headerMain d-flex flex-column">
                <div class="header d-flex justify-content-between" id="myP">
                    <div class="navBtns">
                        <a href="filter.php" class="hoverButton">SHOP</a>
                        <a href="collection.php" class="hoverButton">COLLECTIONS</a>
                        <a href="story.php" class="hoverButton">OUR STORY</a>
                    </div>
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/img/1x/LOGO.png" alt="">
                        </a>
                    </div>
                    <div class="navBtns">
                        <a href="javascript:void(0)">SEARCH</a>
                        <a href="javascript:void(0)" class="cartBtn">MY CART(0)</a>
                        <a href="javascript:void(0)">WISHLIST</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="containers" style="right:-1000px">
        <div class="cart-container">
            <div class="cart-heading">
                <h1>Your Cart</h1>
                <span><i class="fas fa-times sliderClose"></i></span>
            </div>
            <div class="multi-cart-box">
                <div class="cart-box">
                    <div class="cart-box-image">
                        <img src="./assets/img/1x/footerImageFour.png" alt="">
                    </div>
                    <div class="cart-text">
                        <p>Iluminating Serum</p>
                        <span>$120</span>
                        <label>75ML</label>
                        <div class="d-flex plus-minus">
                            <i class="fas fa-plus"></i>1<i class="fas fa-minus"></i>
                        </div>
                        <a href="">remove</a>
                    </div>
                </div>
                <div class="cart-box">
                    <div class="cart-box-image">
                        <img src="./assets/img/1x/footerImageFour.png" alt="">
                    </div>
                    <div class="cart-text">
                        <p>Iluminating Serum</p>
                        <span>$120</span>
                        <label>75ML</label>
                        <div class="d-flex plus-minus">
                            <i class="fas fa-plus"></i>1<i class="fas fa-minus"></i>
                        </div>
                        <a href="">remove</a>
                    </div>
                </div>
                <div class="cart-box">
                    <div class="cart-box-image">
                        <img src="./assets/img/1x/footerImageFour.png" alt="">
                    </div>
                    <div class="cart-text">
                        <p>Iluminating Serum</p>
                        <span>$120</span>
                        <label>75ML</label>
                        <div class="d-flex plus-minus">
                            <i class="fas fa-plus"></i>1<i class="fas fa-minus"></i>
                        </div>
                        <a href="">remove</a>
                    </div>
                </div>
                <div class="cart-box">
                    <div class="cart-box-image">
                        <img src="./assets/img/1x/footerImageFour.png" alt="">
                    </div>
                    <div class="cart-text">
                        <p>Iluminating Serum</p>
                        <span>$120</span>
                        <label>75ML</label>
                        <div class="d-flex plus-minus">
                            <i class="fas fa-plus"></i>1<i class="fas fa-minus"></i>
                        </div>
                        <a href="">remove</a>
                    </div>
                </div>
                <div class="cart-box">
                    <div class="cart-box-image">
                        <img src="./assets/img/1x/footerImageFour.png" alt="">
                    </div>
                    <div class="cart-text">
                        <p>Iluminating Serum</p>
                        <span>$120</span>
                        <label>75ML</label>
                        <div class="d-flex plus-minus">
                            <i class="fas fa-plus"></i>1<i class="fas fa-minus"></i>
                        </div>
                        <a href="">remove</a>
                    </div>
                </div>
                <div class="cart-box">
                    <div class="cart-box-image">
                        <img src="./assets/img/1x/footerImageFour.png" alt="">
                    </div>
                    <div class="cart-text">
                        <p>Iluminating Serum</p>
                        <span>$120</span>
                        <label>75ML</label>
                        <div class="d-flex plus-minus">
                            <i class="fas fa-plus"></i>1<i class="fas fa-minus"></i>
                        </div>
                        <a href="">remove</a>
                    </div>
                </div>
                <div class="cart-box">
                    <div class="cart-box-image">
                        <img src="./assets/img/1x/footerImageFour.png" alt="">
                    </div>
                    <div class="cart-text">
                        <p>Iluminating Serum</p>
                        <span>$120</span>
                        <label>75ML</label>
                        <div class="d-flex plus-minus">
                            <i class="fas fa-plus"></i>1<i class="fas fa-minus"></i>
                        </div>
                        <a href="">remove</a>
                    </div>
                </div>
            </div>
            <div class="for-position">
                <div class="total-amount-butn">
                    <div class="digit-amoun">
                        <span>Total: </span>
                        <span>$120</span>
                    </div>
                    <div class="amount-buton">
                        <button class="skinBtn saleBtn">PROCEED TO CHECKOUT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- imported from other file -->



    <div class="mainBanner">
        <img src="assets/img/1x/headerImage.png" alt="">
        <div class="BannerText posAbsol">
            <div>NEW COLLECTION</div>
            <div class="skincare">Natural <span>SKINCARE <br /> for the</span> EVERYDAY</div>
            <button class="skinBtn">SHOP NOW</button>
        </div>
    </div>

    <div class="withlove d-flex align-items-center justify-content-center">
        <div class="BannerText cblack text-center">
            <div>New Collection</div>
            <div class="skincare">Made with <span>LOVE</span> at the <br> <span>Heart</span> of <span>New York</span>
            </div>
            <button class="skinBtn">SHOP NOW</button>
        </div>
    </div>



    <div class="slider-section mt-5 mb-5">
        <div class="container d-flex flex-wrap">
            <div class="creat_coll">
                <div class="created  text-start">
                    CURATED COLLECTION
                </div>
                <div class="orBB  text-start">
                    Our<br />
                    Best Sellers
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide d-flex flex-column">
                        <div class="swiperImgBox mb-3">
                            <img src="./assets/img/1x/productImageTwo.png" alt="">
                        </div>
                        <p class="title">Iluminating Serum</p>
                        <p class="price"> <span>$127</span> $95 </p>
                    </div>
                    <div class="swiper-slide d-flex flex-column">
                        <div class="swiperImgBox mb-3">
                            <img src="./assets/img/1x/filter4.png" alt="">
                        </div>
                        <p class="title">Iluminating Serum</p>
                        <p class="price"> <span>$127</span> $95 </p>
                    </div>
                    <div class="swiper-slide d-flex flex-column">
                        <div class="swiperImgBox mb-3">
                            <img src="./assets/img/1x/productImageOne.png" alt="">
                        </div>
                        <p class="title">Iluminating Serum</p>
                        <p class="price"> <span>$127</span> $95 </p>
                    </div>
                    <div class="swiper-slide d-flex flex-column">
                        <div class="swiperImgBox mb-3">
                            <img src="./assets/img/1x/productImageTwo.png" alt="">
                        </div>
                        <p class="title">Iluminating Serum</p>
                        <p class="price"> <span>$127</span> $95 </p>
                    </div>
                    <div class="swiper-slide d-flex flex-column">
                        <div class="swiperImgBox mb-3">
                            <img src="./assets/img/1x/filter4.png" alt="">
                        </div>
                        <p class="title">Iluminating Serum</p>
                        <p class="price"> <span>$127</span> $95 </p>
                    </div>
                    <div class="swiper-slide d-flex flex-column">
                        <div class="swiperImgBox mb-3">
                            <img src="./assets/img/1x/productImageOne.png" alt="">
                        </div>
                        <p class="title">Iluminating Serum</p>
                        <p class="price"> <span>$127</span> $95 </p>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <!--start-->
    <!--created by hassan-->

    <!--Start Skin Product-->

    <section class="skinProductSection">
        <div class="customContainer skinPadding">
            <div class="skinProduct d-flex justify-content-between">
                <div class="skinProductColumnOne">
                    <div class="skinProductOne">
                        <div class="skinProductHeadingP">
                            <p>ROUTINES</p>
                        </div>
                        <div class="skinProductImageOne">
                            <img src="assets/img/1x/skinProductImageOne.png" alt="">
                        </div>
                    </div>
                    <div class="skinProductTwo">
                        <div class="skinProductImageTwo">
                            <img src="assets/img/1x/skinProductImageTwo.png" alt="">
                        </div>
                        <div class="skinProductImageThree mt-4">
                            <img src="assets/img/1x/skinProductImageThree.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="skinProductColumnTwo">
                    <div class="skinProductHeading">
                        <h1><span>Iluminated</span><br> SKIN</h1>
                    </div>
                    <div class="skinProductText">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
                            as
                            their default model text, and a search for 'lorem ipsum' will uncover many web sites still
                            in
                            their infancy. Various versions have evolved over the years, sometimes by accident,
                            sometimes on
                            purpose (injected humour and the like).</p>
                    </div>
                    <div class="skinProductButton">
                        <a href="illuminated.php"><button class="skinBtn saleBtn">EXPLORE THE PRODUCTS</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Skin Product-->

    <!--Start Skin Product Image-->

    <section>
        <div class="customContainer">
            <div class="skinProductImage">
                <div class="skinProductImageBox d-flex">
                    <div class="skinProductImageColumnOne">
                        <div class="productImageOne">
                            <img src="assets/img/1x/productImageOne.png" alt="">
                        </div>
                        <div class="productImageOneTitle">
                            <p>MOISTURIZERS</p>
                        </div>
                    </div>
                    <div class="skinProductImageColumnTwoBox">
                        <div class="skinProductImageColumnTwo">
                            <div class="productImageTwo">
                                <img src="assets/img/1x/productImageTwo.png" alt="">
                            </div>
                            <div class="productImageTwoTitle">
                                <p>TONICS</p>
                            </div>
                        </div>
                        <div class="skinProductImageColumnThree">
                            <div class="productImageThree">
                                <img src="assets/img/1x/productImageThree.png" alt="">
                            </div>
                            <div class="productImageThreeTitle">
                                <p>OILS</p>
                            </div>
                        </div>
                    </div>
                    <div class="skinProductImageColumnThreeBox">
                        <div class="skinProductImageColumnFour">
                            <div class="productImageFour">
                                <img src="assets/img/1x/productImageFour.png" alt="">
                            </div>
                            <div class="productImageFourTitle">
                                <p>SUNSCREENS</p>
                            </div>

                        </div>
                        <div class="skinProductImageColumnFive">
                            <div class="productImageFive">
                                <img src="assets/img/1x/productImageFive.png" alt="">
                            </div>
                            <div class="productImageFiveTitle">
                                <p>SETS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Skin Product Image-->

    <!--Start Sale Product-->

    <section class="saleProductSection">
        <div class="customContainer">
            <div class="saleProduct">
                <div class="saleProductText">
                    <h2><span>SALE 40%</span><br>on selected products</h2>
                </div>
                <div class="saleProductButton">
                    <button class="saleButton">SHOP ALL SALE</button>
                </div>
            </div>
        </div>
    </section>

    <!--End Sale Product-->



    <div class="testimonial-sec">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex justify-content-center align-items-center">
                    <div class="comment-sec d-flex flex-column text-center align-items-center">
                        <p>ABOUT ILUMINATING SET</p>
                        <div class="comment">
                            <h1>
                                My skin looks so much better. You should try the illuminating set
                            </h1>
                        </div>
                        <p>BACHEL PESIN</p>
                    </div>
                </div>
            </div>
            <div class="next">
                <div class="arrow">
                    <img src="./assets/img/1x/Arrow 1.png" alt="">
                </div>
            </div>
            <div class="prev">
                <div class="arrow">
                    <img src="./assets/img/1x/Arrow 2.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="followUs">
        <a href="#">
            <p>FOLLOW US</p>
            <p>@FLORENCESKINCARE</p>
        </a>
    </div>


    <!--created by hassan-->
    <!--end-->

    <!--Start Image Footer-->

    <section>
        <div class="customContainer">
            <div class="footerImageBox d-flex">
                <div class="footerImage">
                    <img src="assets/img/1x/footerImageOne.png" alt="">
                </div>

                <div class="footerImage">
                    <img src="assets/img/1x/footerImageTwo.png" alt="">
                </div>

                <div class="footerImage">
                    <img src="assets/img/1x/footerImageThree.png" alt="">
                </div>

                <div class="footerImage">
                    <img src="assets/img/1x/footerImageFour.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--End Image Footer-->

    <!--Start Footer-->


    <footer class="footer">
        <div class="customContainer">
            <div class="row">

                <div class="col-lg-4">
                    <div class="footerColumnOne footerPadding">
                        <div class="footerLogo mt-2">
                            <a href="index.php"><img src="assets/img/1x/LOGO.png" alt=""></a>
                        </div>
                        <P>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English.</P>
                        <div class="socialIcon mt-4">
                            <span><i class="fab fa-facebook"></i></span>
                            <span><i class="fab fa-instagram"></i></span>
                            <span><i class="fab fa-pinterest"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="footerColumnTwo footerPadding">
                        <h2>Be part of our world</h2>
                        <p>Get the latest news and discounts on your inbox</p>
                        <div class="footerInput">
                            <input type="text" placeholder="your name"><br>
                            <input type="text" placeholder="your e-mail">
                        </div>
                        <a href="">
                            <button class="skinBtn">SUBSCRIBE NEWSLETTER</button>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="footerColumnThree footerPadding mt-5">
                        <div class="row">
                            <div class="col-lg-5 col-sm-6"><a href="products.php">SHOP</a></div>
                            <div class="col-lg-7 col-sm-6"><a href="javascript:void(0)">SHIPPING & RETURNS</a></div>
                            <div class="col-lg-5 col-sm-6"><a href="collection.php">COLLECTIONS</a></div>
                            <div class="col-lg-7 col-sm-6"><a href="javascript:void(0)">PRIVACY POLICY</a></div>
                            <div class="col-lg-5 col-sm-6"><a href="story.php">OUR STORY</a></div>
                            <div class="col-lg-7 col-sm-6"><a href="terms-condition.php">TERMS & CONDITIONS</a></div>
                            <div class="col-lg-5 col-sm-6"><a href="faqs.php">FAQs</a></div>
                            <div class="col-lg-7 col-sm-6"><a href="contactus.php">CONTACT US</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!--End Footer-->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            breakpoints: {
                1024: {
                    slidesPerView: 3
                },
                768: {
                    slidesPerView: 2
                }
            }
        });
        var swiper = new Swiper(".testimonial-sec .mySwiper", {
            slidesPerView: 1,
            spaceBetween: 50,
            loop: true,
            navigation: {
                nextEl: ".next",
                prevEl: ".prev",
            },
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="main.js"></script>
</body>

</html>