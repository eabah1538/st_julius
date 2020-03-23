<!DOCTYPE html>
<?php
//Setting the cookie variables...
    $cookie_name = 'nyCookie';
    $cookie_value = '';
    $cookie_time = time() + 86400 * 10;
    setcookie($cookie_name, $cookie_value, $cookie_time,'/');
    // setcookie('test_cookie', 'test_time()')
    if (isset($_COOKIE)){
        echo 'Cookie enabled <br>';
    }else{
        echo 'Cookie not set <br>';
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registration Form A </title>
    <!-- MDB icon -->
  <link rel="icon" href="../MDB_lib/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../MDB_lib/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
 <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../St Julius/Homepage.css">
</head>
<body class="Forms">
<div class='container-fluid'></div>
  <div class='container'>
    <form action='st_julius_bknd.php' method='POST'>
        
    <?php
        include 'st_julius_bknd.php';
    ?>
     <div id='form_header'>
        <Label>
            <h1  id='reg'> REGISTRATION FORM</h1>
        
            <h5>  PERSONAL INFORMATION  </h5>
        </Label>
      </div>
    SURNAME <br> &ThickSpace;&ThickSpace; <input type="text" name= 'surname'required><br><br>
    FIRST NAME <br> &ThickSpace; <input type="text" name= 'firstname' required><br><br>
    OTHER NAMES <br> &ThickSpace; <input type="text" name= 'othername' required><br><br>
    GENDER  &ThickSpace; &ThickSpace; Male  &ThickSpace; <input type="radio" name="gender" value="male">
                    &ThickSpace; Female  &ThickSpace; <input type="radio" name="gender" value="female"><br><br>
    DATE OF BIRTH <br> &ThickSpace; <input type="date" name="dob" required><br><br>
    ADDRESS <br> &ThickSpace; <textarea name="address" id="address" cols="40" rows="10"></textarea><br><br>
    EMAIL <br> &ThickSpace; <input type="email" name="email" required><br><br>
    PHONE NUMBER 1<br> &ThickSpace; <input type="tel" name="mobile"><br><br>
    PHONE NUMBER 2 <br>&ThickSpace; <input type="tel" name="mobile"><br><br>
    HAVE YOU RECIEVED THE SACRAMENTS OF: <br>&ThickSpace;Baptism&ThickSpace;<input type="checkbox" name="sacraments_recieved" value="baptism">
                                            &ThickSpace;Confirmation&ThickSpace;<input type="checkbox" name="sacraments_recieved" value="confirmation">
                                            &ThickSpace;Eucharist&ThickSpace;<input type="checkbox" name="sacraments_recieved" value="eucharist">
                                            &ThickSpace;Martrimony&ThickSpace;<input type="checkbox" name="sacraments_recieved" value="matrimony"><br><br>
    MARITAL STATUS <br> &ThickSpace;&ThickSpace;Single&ThickSpace;<input type="radio" name='status' value="single">
                                    &ThickSpace;Married&ThickSpace;<input type="radio" name="status" value="married">
                                    &ThickSpace;Separated&ThickSpace;<input type="radio" name="status" value="separated"><br><br>
    SPOUSE NAME <br> &ThickSpace;<input type="text" name='spouse_name'><br><br>
    STATE OF ORIGIN <br> &ThickSpace;<input type="text" name='state_of_origin' required><br><br>
    L.G.A/ HOMETOWN <br> &ThickSpace; <input type="text" name='hometown'><br><br>
    PARISH OF ORIGIN <br> &ThickSpace;<input type="text" name='parish_of_origin'><br><br>
    NATIONALITY <br> &ThickSpace;<input type="text" name='nationality'><br><br><br>

    <input type="submit" value="Next" href="Reg_form_p2">
    </form>
  </div>
                <br>
  <a href="Reg_form_p2"> page 1/2</a>


</div>


    <!-- jQuery -->
    <script type="text/javascript" src="../MDB_lib/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../MDB_lib/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../MDB_lib/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../MDB_lib/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript" src="../MDB_lib/src/js/free/forms-free.js"></script>
</body>
</html>