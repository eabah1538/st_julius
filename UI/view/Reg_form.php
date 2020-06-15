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
  <div class='container m-5'>
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
        <div class="md-form form-lg">
            <p>SURNAME </p>
            <input type="text" id="surname" name='surname'class="form-control form-control-lg "required>
        </div>
        <div class="md-form form-lg">
            <p> FIRST NAME </p>
            <input type="text" id="firstname" name= "firstname"class="form-control form-control-lg "required>
        </div>
        <div class="md-form form-lg">
            <p>OTHER NAMES </p>
            <input type="text" id="othername"name= "othername"  class="form-control form-control-lg "required>
        </div>
        <div class="md-form form-lg">
            <p>GENDER</p>
            <div class="form-check form-control-lg">
                <input type="radio" class="form-check-input" id="Male" name="gender">
                Male
            </div>
            <div class="form-check form-control-lg">
                <input type="radio" class="form-check-input" id="Female" name="gender" checked>
                Female
            </div>
        </div>        
        <div class="md-form form-lg">
            <p>DATE OF BIRTH </p>
            <input type="date" id="dob" name= "dob" class="form-control form-control-lg "required>
        </div>
  
    ADDRESS <br> &ThickSpace; <textarea name="address" id="address" cols="40" rows="10"></textarea><br><br>

        <div class="md-form form-lg">
            <p>EMAIL </p>
            <input type="email" id="email"name= "email" class="form-control form-control-lg "required>
        </div>
    
    PHONE NUMBER 1<br> &ThickSpace; <input type="tel" name="mobile"><br><br>
    PHONE NUMBER 2 <br>&ThickSpace; <input type="tel" name="mobile"><br><br>
    HAVE YOU RECIEVED THE SACRAMENTS OF: <br>&ThickSpace;Baptism&ThickSpace;<input type="checkbox" name="sacraments_recieved" value="baptism">
                                            &ThickSpace;Confirmation&ThickSpace;<input type="checkbox" name="sacraments_recieved" value="confirmation">
                                            &ThickSpace;Eucharist&ThickSpace;<input type="checkbox" name="sacraments_recieved" value="eucharist">
                                            &ThickSpace;Martrimony&ThickSpace;<input type="checkbox" name="sacraments_recieved" value="matrimony"><br><br>
    MARITAL STATUS <br> &ThickSpace;&ThickSpace;Single&ThickSpace;<input type="radio" name='status' value="single">
                                    &ThickSpace;Married&ThickSpace;<input type="radio" name="status" value="married">
                                    &ThickSpace;Separated&ThickSpace;<input type="radio" name="status" value="separated"><br><br>

        <div class="md-form form-lg">
            <p>SPOUSE NAME </p>
            <input type="text" id="spouse_name" name='spouse_name' class="form-control form-control-lg "required>
        </div>
        <div class="md-form form-lg">
            <p>STATE OF ORIGIN </p>
            <input type="text" id="state_of_origin" name='state_of_origin' class="form-control form-control-lg "required>
        </div> 
        <div class="md-form form-lg">
            <p> L.G.A/ HOMETOWN </p>
            <input type="text" id="hometown" name='hometown' class="form-control form-control-lg "required>
        </div> 
        <div class="md-form form-lg">
            <p> PARISH OF ORIGIN </p>
            <input type="text" id="parish_of_origin" name='parish_of_origin' class="form-control form-control-lg "required>
        </div>
        <div class="md-form form-lg">
            <p>NATIONALITY </p>
            <input type="text" id="nationality" name='nationality' class="form-control form-control-lg "required>
        </div>

         <input type="submit" value="Next" href="Reg_form_p2">

    </form>
  </div>
                <br>
  <a href="Reg_form_p2"> page 1/2</a>

  </div>
  <?php include("./includes/footer.php") ?>


</body>