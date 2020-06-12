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
  <div class='jumbotron p-5 m-5'>
    <form action='../server/st_julius_bknd.php' method='POST'>
        
    <?php
        include('../../server/st_julius_bknd.php');
    ?>

     <div id='form_header'>      
        <Label>
            <h1 id='reg'> REGISTRATION FORM</h1>
            <h5>  PERSONAL INFORMATION  </h5>
        </Label>

      </div class="container m-5 p-5">             
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
        <div class="md-form lg-outline input-with-post-icon datepicker">
            <p>DATE OF BIRTH </p>
            <input placeholder="Select date" type="date" id="dob" class="form-control form-control-lg">
        </div>
        <div class="form-group shadow-textarea">
            <p> ADDRESS</p>
            <textarea class="form-control z-depth-1" id="address" rows="3" placeholder="Your residential address here..."></textarea>
        </div>
        <div class="md-form form-lg">
            <p>EMAIL </p>
            <input type="email" id="email"name= "email" class="form-control form-control-lg "required>
        </div>
        <div class="md-form">
            <p> PHONE NUMBER 1</p> 
            <input type="number" id="tel" name="mobile1" class="form-control">             
        </div>
        <div class="md-form">
            <p> PHONE NUMBER 2</p> 
            <input type="number" id="tel" name="mobile2" class="form-control">             
        </div>
        <div>
            <p> HAVE YOU RECIEVED THE SACRAMENTS OF:</p>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="materialChecked2" checked>
                <label class="custom-control-label" for="materialChecked2">Baptism</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="materialInline1">
                <label class="custom-control-label" for="materialInline1">Confirmation</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="materialInline2">
                <label class="custom-control-label" for="materialInline2">Eucharist</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="materialInline3">
                <label class="custom-control-label" for="materialInline3">Martrimony</label>
            </div>
        </div>
        <div class="md-form form-lg">
            <p>MARITAL STATUS</p>
            <div class="form-check form-control-lg">
                <input type="radio" class="form-check-input" id="single" name="status">
                Single
            </div>
            <div class="form-check form-control-lg">
                <input type="radio" class="form-check-input" id="married" name="status" checked>
                Married
            </div>
            <div class="form-check form-control-lg">
                <input type="radio" class="form-check-input" id="separated" name="status" checked>
                Separated
            </div>
        </div>
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

        <div class= 'col-auto'>
            <input type="submit" value="Next" href="Reg_form_p2">
        </div>

        <br>
  


        
        <div class="md-form md-bg">
        <input type="text" id="formBg1" class="form-control">
        <label for="formBg1">Example label</label>
        </div>

        <div class="md-form md-bg">
           
            <input type="text" id="surname" name='surname'class="form-control form-control-lg "required>
            <label for="formBg1">Example label</label>
            <p>SURNAME </p>
        </div>

    </form>
  </div>


  </div>
  <?php include("./includes/footer.php") ?>





</body>