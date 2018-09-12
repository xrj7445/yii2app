<?php

/* @var $this yii\web\View */

$this->title = 'NZHANDYMAN';

use app\assets\AppAsset;
AppAsset::register($this);
/* load template CSS */
AppAsset::addCss($this,Yii::$app->request->baseUrl."/index_theme/css/bootstrap.min.css");
AppAsset::addCss($this,Yii::$app->request->baseUrl."/index_theme/css/fontawesome-all.min.css");
AppAsset::addCss($this,Yii::$app->request->baseUrl."/index_theme/css/tooplate-style.css");
/* load custom CSS */
AppAsset::addCss($this,Yii::$app->request->baseUrl."/index_theme/css/index-style.css");
/* */
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/.js");

?>

  <!-- Loader 
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>-->

  <div class="tm-main">
      <!-- main, background -->
    <div class="tm-welcome-section">
      <div class="container tm-navbar-container">
        <div class="row">
          <div class="col-xl-12">
            
          </div>
        </div>
      </div>
        <!-- main, text -->
      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome welcome-showbox">
          <img src="/yii2app/web/index_theme/img/header-brand-500-58.png" alt="Image" class="img-fluid">
          <h1 class="text-uppercase mb-3 tm-site-name"><br />Have skills?</h1>
          <p class="tm-site-description"><br />Sign in to find more clients, turn your skills into profit.</p>
          <h1 class="text-uppercase mb-3 tm-site-name"><br />Have odd jobs? </h1>
          <p class="tm-site-description"><br />Sign to find trusted handmen, have those odd jobs done.</p>
        </div>
      </div>

    </div>

    <div class="container">
      <!-- search -->
      <div class="tm-search-form-container">
        <form action="index.html" method="GET" class="form-inline tm-search-form">
          <div class="text-uppercase tm-new-release">New Release</div>
          <div class="form-group tm-search-box">
            <input type="text" name="keyword" class="form-control tm-search-input" placeholder="Type here to search ...">
            <input type="submit" value="Search" class="form-control tm-search-submit">
          </div>
          <div class="form-group tm-advanced-box">
            <a href="#" class="tm-text-white">Go Advanced ...</a>
          </div>
        </form>
      </div>

      <div class="row tm-albums-container grid">
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="/yii2app/web/index_theme/img/slide-2.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <!-- <h2>First Album</h2> -->
              <p>Rollover text and description text goes here over mouse over...</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="/yii2app/web/index_theme/img/slide-2.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <!-- <h2>Album Two</h2> -->
              <p>Maecenas iaculis et turpis et iaculis. Aenean at volutpat diam.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="/yii2app/web/index_theme/img/slide-2.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <!-- <h2>Third Album</h2> -->
              <p>Vivamus eget elit purus. Nullam consectetur porttitor elementum.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="/yii2app/web/index_theme/img/slide-2.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <!-- <h2>Album Four</h2> -->
              <p>Praesent nec feugiat dolor, elementum mollis purus. Etiam faucibus.</p>
            </figcaption>
          </figure>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="tm-tag-line">
            <h2 class="tm-tag-line-title">NZHANDYMAN yeah</h2>
          </div>
        </div>
      </div>

      <div class="row mb-5 media-container">
        <div class="col-xl-12">
          <div class="media-boxes">
            <div class="media">
              <img src="/yii2app/web/index_theme/img/shutterstock.jpg" alt="Image" class="mr-3">
              <div class="media-body tm-bg-orange">
                <div class="tm-description-box">
                  <h5 class="tm-text-blue">Vivamus eget urna vitae ante</h5>
                  <p class="mb-0">Insertion HTML Template includes 3 different pages. You can use this layout for your website. Please tell your friends about <a href="https://plus.google.com/+tooplate" target="_parent">Tooplate</a>. Thank you.</p>
                </div>
                <div class="tm-buy-box">
                  <a href="#" class="tm-bg-blue tm-text-white tm-buy">buy</a>
                  <span class="tm-text-blue tm-price-tag">$5.50</span>
                </div>
              </div>
            </div>

            <div class="media">
              <img src="/yii2app/web/index_theme/img/shutterstock.jpg" alt="Image" class="mr-3">
              <div class="media-body tm-bg-orange">
                <div class="tm-description-box">
                  <h5 class="tm-text-pink">Proin fermentum sapien sed nisl</h5>
                  <p class="mb-0">Donec est felis, posuere viverra dapibus ac, pretium vel libero. Aliquam consectetur, arcu eget euismod congue, tortor metus vehicula.</p>
                </div>
                <div class="tm-buy-box">
                  <a href="#" class="tm-bg-pink tm-text-white tm-buy">buy</a>
                  <span class="tm-text-pink tm-price-tag">$7.25</span>
                </div>
              </div>
            </div>

            <div class="media">
              <img src="/yii2app/web/index_theme/img/shutterstock.jpg" alt="Image" class="mr-3">
              <div class="media-body tm-bg-orange">
                <div class="tm-description-box">
                  <h5 class="tm-text-blue">Quisque dignissim porta nunc</h5>
                  <p class="mb-0">In neque felis, fringilla vel orci ut, sodales consectetur purus. Vivamus eget urna vitae ante pellentesque iaculis. Praesent sit amet.</p>
                </div>
                <div class="tm-buy-box">
                  <a href="#" class="tm-bg-blue tm-text-white tm-buy">buy</a>
                  <span class="tm-text-blue tm-price-tag">$6.80</span>
                </div>
              </div>
            </div>

            <div class="media">
              <img src="/yii2app/web/index_theme/img/shutterstock.jpg" alt="Image" class="mr-3">
              <div class="media-body tm-bg-orange">
                <div class="tm-description-box">
                  <h5 class="tm-text-pink">Vestibulum mattis quam sodales</h5>
                  <p class="mb-0">Curabitur id tempor orci. Fusce efficitur in enim sit amet sodales. Proin id gravida leo. Phasellus non quam et justo faucibus rhoncus.</p>
                </div>
                <div class="tm-buy-box">
                  <a href="#" class="tm-bg-pink tm-text-white tm-buy">buy</a>
                  <span class="tm-text-pink tm-price-tag">$3.75</span>
                </div>
              </div>
            </div>

            <div class="media">
              <img src="/yii2app/web/index_theme/img/shutterstock.jpg" alt="Image" class="mr-3">
              <div class="media-body tm-bg-orange">
                <div class="tm-description-box">
                  <h5 class="tm-text-blue">Vestibulum mattis quam sodales</h5>
                  <p class="mb-0">Maecenas sit amet nibh faucibus, tincidunt nisl sit amet, elementum eros. Fusce congue ligula gravida lorem lacinia.</p>
                </div>
                <div class="tm-buy-box">
                  <a href="#" class="tm-bg-blue tm-text-white tm-buy">buy</a>
                  <span class="tm-text-blue tm-price-tag">$5.25</span>
                </div>
              </div>
            </div>
          </div> <!-- media-boxes -->
        </div>
      </div>

      <div class="row tm-mb-big tm-subscribe-row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 tm-bg-orange tm-subscribe-form">
          <h3 class="tm-text-pink tm-mb-30">Subscribe our updates!</h3>
          <p class="tm-mb-30">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi semper, ligula et pretium porttitor, leo orci accumsan ligula.</p>
          <form action="index.html" method="POST">
            <div class="form-group mb-0">
              <input type="text" class="form-control tm-subscribe-input" placeholder="Your Email">
              <input type="submit" value="Submit" class="tm-bg-pink tm-text-white d-block ml-auto tm-subscribe-btn">
            </div>
          </form>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 img-fluid pl-0 tm-subscribe-img"></div>
      </div>

      <div class="row tm-mb-medium">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
          <h4 class="mb-4 tm-font-300">&nbsp;About us</h4>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;Facebook</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;Twitter</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;Google+</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;YouTube</a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
          <h4 class="mb-4 tm-font-300">&nbsp;Get started</h4>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;Free Shipping</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;Money Refund</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;Online Support</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;FAQ</a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
          <h4 class="mb-4 tm-font-300">&nbsp;Company</h4>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;About Us</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;Contact US</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;Sitemap</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">&nbsp;&nbsp;Terms & Conditions</a>
        </div>
      </div>
      <footer class="row">
        <div class="col-xl-12">
          <p class="text-center p-4">Copyright &copy; <span class="tm-current-year">2018</span> Your Company Name - Web Design:  <a href="http://tooplate.com" class="tm-text-gray">Tooplate</a></p>
        </div>
      </footer>
    </div> <!-- .container -->

  </div> <!-- .main -->