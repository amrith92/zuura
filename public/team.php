<?php

$stylesheets = array(
    '/css/team.css'
);

$currentPage = 'team';
$title = 'The Team';

?>
<?php require_once('header.php'); ?>
<?php require_once('menu.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#2014" data-toggle="tab">Team 2014</a></li>
                <li><a href="#2013" data-toggle="tab">Team 2013</a></li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="2014">
        </div>

        <div class="tab-pane fade" id="2013">
            <div class="row">
                <div class="col-md-12">
                    <h1>Team 2013</h1>
                </div>
                <div class="col-md-4">
                    <div class="list-group">
                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Faculty Advisor</h4>
                            <div class="list-group-item-text">
                                Dr. Jayasankar Variyar
                            </div>
                        </div>

                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Team Captain</h4>
                            <div class="list-group-item-text">
                                Sanchit Chhabra
                            </div>
                        </div>

                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Team Manager</h4>
                            <div class="list-group-item-text">
                                Darsh Shah
                            </div>
                        </div>

                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Treasurer</h4>
                            <div class="list-group-item-text">
                                Somil Bhargava
                            </div>
                        </div>
                    </div>

                    <h3>Non-Technical</h3>

                    <div class="list-group">
                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Marketing</h4>
                            <div class="list-group-item-text">
                                <strong title="Head">Surotham</strong>,
                                Somil,
                                Sanchit,
                                Gautam,
                                Ajay,
                                Prateeksha
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Technical</h3>

                    <div class="list-group">
                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Suspension</h4>
                            <div class="list-group-item-text">
                                <strong title="Head">Akshay</strong>,
                                Siddhant,
                                Surotham,
                                Sarath,
                                Saarang,
                                Hardic,
                                Abhijeet,
                                Dipankar
                            </div>
                        </div>

                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Steering</h4>
                            <div class="list-group-item-text">
                                <strong title="Head">Yash</strong>,
                                Varun,
                                Rahul,
                                Pranav
                            </div>
                        </div>

                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Brakes</h4>
                            <div class="list-group-item-text">
                                <strong title="Head">Somil</strong>,
                                Devanshu,
                                Ajay,
                                Shantanu
                            </div>
                        </div>

                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Chassis</h4>
                            <div class="list-group-item-text">
                                <strong title="Head">Devanshu</strong>,
                                Sanchit,
                                Darsh,
                                Gautam,
                                Shantanu
                            </div>
                        </div>

                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Powertrain</h4>
                            <div class="list-group-item-text">
                                <strong title="Head">Siddhant</strong>,
                                Surotham,
                                Darsh,
                                Pranav,
                                Ajay
                            </div>
                        </div>

                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">Electrical</h4>
                            <div class="list-group-item-text">
                                Shivanshu,
                                Shrikanth
                            </div>
                        </div>

                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">CAD &amp; Analysis</h4>
                            <div class="list-group-item-text">
                                <strong title="Head">Varun</strong>,
                                Sanchit,
                                Gautam,
                                Rahul
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
