<?php
$stylesheets = array(
    '/css/about.css'
);

$currentPage = 'about';
$title = 'About';
$navbarStyle = 'inverse';
?>
<?php require_once('header.php'); ?>
<?php require_once('menu.php'); ?>

<div class="container gap-please about">
    <div class="row">
        <div class="col-sm-12">
            <h1>About</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>
                        ZuuRa Formula Racing, a group of Automobile and Motorsport enthusiasts is the Formula-Student team of Vellore Institute of Technology Chennai Campus. ZuuRa, in Sanskrit stands for “Warrior” and Z.F.R. is equipped with some of the highly skilled under-grads who live to engineer the finest high performance race machine. Strong team dynamics and effective management &amp; planning have been the key features towards achieving the goal. The layout of the competition poses a lot of critical challenges which are not restricted to the engineering part but also the administrative parts like funding, endorsement etc. To tackle these challenges in an effective manner, the team is divided into two separate departments.
                    </p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <p>
                        <span class="highlight">First being the Technical department, these engineers prepare themselves technically to focus on the design and fabrication of the car.</span> The second one is the management department, which handles all the administrative work from keeping the accounts to the shipment of the vehicle. These guys are responsible for delivering any kind of resources that are needed for the consistent team progress.
                    </p>
                </div>
            </div>
            <img class="img img-responsive" src="/img/about-bg.jpg" alt="VIT University, Chennai">
        </div>

        <div class="col-md-5">
            <div class="panel teampanel panel-default">
                <div class="panel-heading">
                    <h4>Technical Department</h4>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Vehicle dynamics</li>
                        <li class="list-group-item">Powertrain &amp; Drivetrain</li>
                        <li class="list-group-item">Chassis &amp; Design</li>
                        <li class="list-group-item">Electrical &amp; Electronics</li>
                    </ul>
                </div>
                <div class="panel-heading">
                    <h4>Management Department</h4>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Marketing</li>
                        <li class="list-group-item">Logistics</li>
                        <li class="list-group-item">Finance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
