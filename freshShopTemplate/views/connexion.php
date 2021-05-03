<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<?php require('sections/meta.php'); ?>

<body>
    <!-- Start Main Top -->
    <?php include('sections/mainTop.php'); ?>
    <!-- End Main Top -->

    <!-- start header -->
    <?php include('sections/header.php'); ?>
    <!-- end header -->

    <!-- Start Top Search -->
<?php include('sections/topSearch.php'); ?>
    <!-- End Top Search -->

<body>
    
<form class="row g-3">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
</form>

<!-- Start Footer  -->
<?php require("sections/footer.php"); ?>
<!-- End Footer  -->

<!-- Start copyright  -->
<?php require("sections/copyright.php"); ?>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-------------------------------JS FILE -------------------------------->
<?php require("sections/jsFile.php"); ?>

</body>

</html>