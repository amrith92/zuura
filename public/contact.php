<?php

$stylesheets = array(
    '/css/contact.css'
);

$currentPage = 'contact';
$title = 'Contact';

?>
<?php require_once('header.php'); ?>
<?php require_once('menu.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="well email">
                        <p>
                            <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:teamzuura.vitchennai@gmail.com">teamzuura.vitchennai@gmail.com</a>
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-thumbs-up"></span> <a href="https://www.facebook.com/TeamZuura" target="_blank">TeamZuura on Facebook</a>
                        </p>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Captain</th>
                                    <td>Hardik Nasit</td>
                                    <td><span class="glyphicon glyphicon-phone"></span> 801 561 0188</td>
                                </tr>
                                <tr>
                                    <th>Manager</th>
                                    <td>Shantanu Chauhan</td>
                                    <td><span class="glyphicon glyphicon-phone"></span> 729 916 0557</td>
                                </tr>
                                <tr>
                                    <th>Manager</th>
                                    <td>Pranav Kopargaonkar</td>
                                    <td><span class="glyphicon glyphicon-phone"></span> 996 204 4795</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
