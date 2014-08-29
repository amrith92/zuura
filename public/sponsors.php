<?php

$stylesheets = array(
    '/css/sponsors.css'
);

$currentPage = 'sponsors';
$title = 'Sponsors';

?>
<?php require_once('header.php'); ?>
<?php require_once('menu.php'); ?>

<div class="container gap-please">
    <div class="row sponsors-nav">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#2014" role="tab" data-toggle="tab">2014 Sponsors</a></li>
                <li><a href="#2013" role="tab" data-toggle="tab">2013 Sponsors</a></li>
            </ul>
        </div>
    </div>
    
    <!-- Tab Panes -->
    <div class="tab-content">
        <!-- 2014 sponsors -->
        <div class="tab-pane fade in active" id="2014">
            <div class="row stop-gap">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/logos/amdesigns.png" alt="A.M. Designs Ltd.">
                        <div class="caption">
                            <div class="ribbon">
                                Premier Sponsor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/logos/jktyre.jpg" alt="JK Tyres">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/logos/sidhant.jpg" alt="Sidhant Metals">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/logos/virat.jpg" alt="Virat Aluminium">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/logos/obp.jpg" alt="OBP">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/logos/magod.jpg" alt="Magod Laser">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                    <div class="thumbnail">
                        <img src= "img/logos/solidworks.png" alt="SolidWorks">
                    </div>
                </div>
            </div>
        </div>

        <!-- 2013 sponsors -->
        <div class="tab-pane fade" id="2013">
            <div class="row stop-gap">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src= "img/logos/amarprakash-big.png" alt="Amarprakash">
                        <div class="caption">
                            <div class="ribbon">
                                Premier Sponsor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src= "img/logos/bhel.png" alt="BHEL">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src= "img/logos/knorr.jpg" alt="Knorr">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src= "img/logos/quaife.jpg" alt="Quaife">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src= "img/logos/obp.jpg" alt="OBP">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src= "img/logos/wilwood.jpg" alt="Wilwood">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src= "img/logos/solidworks.png" alt="SolidWorks">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src= "img/logos/mak.png" alt="MAK Lubricants">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src= "img/logos/bp.jpg" alt="Bharat Petroleum">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
