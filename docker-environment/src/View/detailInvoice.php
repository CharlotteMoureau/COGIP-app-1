<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>COGIP</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">

<!-- Navigation-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/View/includes/nav.php'); ?>
<!-- Masthead-->
<header class="masthead invoices">
    <div class="container">
        <div class="masthead-heading text-uppercase">Invoices Directory</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#invoices">Tell Me More</a>
    </div>
</header>

<!-- Contact -->
<section class="page-section bg-light" id="invoices">
    <div class="container">
        <div class="text-center">
            <h2>COGIP: List of invoices</h2>
        </div>
        <div>
            <h2>Invoice: <?= $detailInvoice['InvoiceNumber'] ?></h2>

            <h3>Company linked to the invoice</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>VAT</th>
                    <th>Company type</th>
                </tr>
                <tr>
                    <td><?= $detailInvoice['Name'] ?></td>
                    <td><?= $detailInvoice['VATNumber'] ?></td>
                    <td><?= $detailInvoice['Type'] ?></td>
                </tr>
            </table>

            <h3>Contact person</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><?= $detailInvoice['FirstName'] . ' ' . $detailInvoice['LastName'] ?></td>
                    <td><?= $detailInvoice['Email'] ?></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © COGIP <?php echo date('Y')?></div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="/assets/mail/jqBootstrapValidation.js"></script>
<script src="/assets/mail/contact_me.js"></script>
<!-- le lien jq permet de faire un prévalidation du form-->
<!-- Core theme JS-->
<script src="/js/scripts.js"></script>
</body>
</html>



