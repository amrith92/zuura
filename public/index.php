<?php

$stylesheets = array(
    '/css/carousel.css'
);

$currentPage = 'home';

?>
<?php require_once('header.php'); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_IN/sdk.js#xfbml=1&appId=1535497873336021&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="modal" id="info-2013" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">2013</h4>
            </div>

            <div class="modal-body">
                <img class="img-responsive" src="img/2013.png" alt="2013">
                <div class="awesome-caption">ZR-01</div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="info-2014" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">2014</h4>
            </div>

            <div class="modal-body">
                <img class="img-responsive" src="img/2014_compressed.png" alt="2014">
                <div class="awesome-caption">ZR-O2</div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-wrapper">
    <?php require_once('menu.php'); ?>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/five-slider.jpg" alt="2014 ZR-02" title="2014 ZR-02">
            <div class="container">
                <div class="carousel-caption">
                    <h1>2014 ZR-02</h1>
                    <p>All Set!</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/sixth-slider.jpg" alt="2014 ZR-02" title="2014 ZR-02">
            <div class="container">
                <div class="carousel-caption">
                    <h1>2014 ZR-02</h1>
                    <p>Late Evening Photo Shoot</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/first-slider.jpg" alt="2013 ZR-01" title="2013 ZR-01">
            <div class="container">
                <div class="carousel-caption">
                    <h1>2013 ZR-01</h1>
                    <p>In Japan</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/second-slider.jpg" alt="Group Photo Japan 2013" title="Group Photo Japan 2013">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Group Photo</h1>
                    <p>Codename: Japan Showdown</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/third-slider.jpg" alt="Team Driver 2013" title="Team Driver 2013">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Team Driver</h1>
                    <p>Takes ZR-01 for a spin</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/sponsors-bg.jpg" alt="Pre-Flight checks in Japan 2013" title="Pre-Flight checks in Japan 2013">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Team Driver</h1>
                    <p>In Japan, pre-flight checks</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/four-slider.jpg" alt="Team of 2013" title="Team of 2013">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Team of 2013</h1>
                    <p>Just before Japan</p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->

<div class="common road">
    <div class="row">
        <div class="col-xs-2 col-xs-offset-1 col-md-2 col-md-offset-4 year">
            <button data-toggle="modal" data-target="#info-2013">2013</button>
        </div>
        <div class="col-xs-2 col-xs-offset-3 col-md-2 col-md-offset-0 year">
            <button data-toggle="modal" data-target="#info-2014">2014</button>
        </div>
    </div>
</div>

<div class="container countdown">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper">
                <div class="cell">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <hr>
    <div class="row">
        <div class="col-sm-8">
            <div class="fb-like-box" data-href="https://www.facebook.com/TeamZuura" data-width="700px" data-colorscheme="dark" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
        </div>
        <div class="col-sm-4">
            <div class="bottom-gap">
                <div class="fb-facepile" data-href="https://www.facebook.com/TeamZuura" data-max-rows="10" data-colorscheme="dark" data-size="medium" data-show-count="true"></div>
            </div>
        </div>
    </div>
</div>

<?php
$scripts = <<<SCRIPTS
<script src="/js/countdown.js"></script>
<script>
    $(document).ready(function() {
        $('.cell').countdown({
            image: "img/digits-min.png",
        format: "dd:hh:mm:ss",
        endTime: new Date('09/02/14 12:00:00')
        });
    });
</script>
SCRIPTS;
?>

<?php require_once('footer.php'); ?>

