<?php include("./includes/header.php"); ?>

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



<body class="Forms">
<div class='container-fluid'></div>
  <div class='container'>
    <form action='../server/st_julius_bknd.php' method='POST'>
        
    <?php
        include('../../server/st_julius_bknd.php');
    ?>
     <div id='form_header'>
        <Label>
            <h1  id='reg'> REGISTRATION FORM</h1>
        
            <h5>  PERSONAL INFORMATION  </h5>
        </Label>
      </div class="card myCard mn-auto">
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
  <?php include("./includes/footer.php") ?>


</body>