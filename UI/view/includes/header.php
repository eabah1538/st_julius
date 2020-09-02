<!DOCTYPE html>

<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>St Julius </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Galada&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Script for Universalis api-->
    <script>
      function receivedUniversalisItem(thing){
        var where=document.getElementById("Universalis_" + thing);
      if (where)
        where.style.display="block";
      };
        function setUniversalisElement(thing,text){
          var where=document.getElementById("Universalis_" + thing);
      if (where)
        where.innerHTML=text;
      };
        function universalisCallback(data){
          for (var thing in data){receivedUniversalisItem(thing);
          var d=data[thing];
          if (typeof d != "object"){setUniversalisElement(thing,d)
            }else{
              for (var t in d){var dd=d[t];
              setUniversalisElement(thing + "." + t,dd);
          }
        }
        }
        }
          !function(d,id,region,day){
            function yyyymmdd(day){
              var now=new Date();
              var delta=day==7?7-now.getDay():0;
              var when=new Date(now.getTime()+86400000*delta);
            return (1900+when.getYear())*10000+(1+when.getMonth())*100+when.getDate();
        };
        var js,fjs=d.getElementsByTagName('script')[0];
        
        if(!d.getElementById(id)){
          js=d.createElement('script');
          js.id=id;
          js.src=document.location.protocol+'//universalis.com/' + (region==""?region:region+"/") + yyyymmdd(day) + '/jsonpmass.js?callback=universalisCallback';
          fjs.parentNode.insertBefore(js,fjs);}}(document, 'universalis-js',

          /* CUSTOMIZATION: the local calendar
        Insert the name of the local calendar: for instance, "Europe.England.Westminster". For the General Calendar, use an empty string: just "".
        */

        "Europe.England.Westminster",
        // Leave this comma here: it really is needed!

        /* CUSTOMIZATION: which day do you want?
        Insert 1 for today's readings.
        Insert 7 for next Sunday's readings.
        */

        1
        );

        /* ADVANCED CUSTOMIZATION:
        If you want to have today's readings and the Sunday readings both on the same page, then you will have to call the web site twice, once for each of the two days, and have a different callback each time. This isn't rocket science but it does mean rewriting the Javascript we have given you, so the best thing is to complain to whoever asked you to do it!
        */

    </script>
 </head>
  <body>
   <!--Navbar-->
      <nav class="navbar navbar-expand-lg transparent navbar-light fixed-top scrolling-navbar white-text" id="thirdLayer">

        <!-- Navbar brand -->
        
        <a class="navbar-brand white-text" style="font-style: bold" href="#">
        <div style="max-width: 100px; padding-left: ">
           <div style="float: left; padding-right: 10px;">
             <img src="../../assets/Pope_Julius_II.jpg" width="55" height="55" alt="">
           </div>
           <div class="mx-auto"><h6>Catholic Diocese of Abeokuta</h6> </div >
          <div class="mx-auto"><h5>Saint Julius Catholic Church</h5> </div >
        </div>
        
      </a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse f_regular" id="basicExampleNav">

          <!-- NavLinks -->
          <ul class="navbar-nav ml-auto pr-5">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <!-- Dropdown menu-->
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="true"><span> About Us</span></a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <ul class="dropdown">
                  <li class="menu-back" style="display: none"><a href="#">                        
                    <li><a href="./about.php">Parish History</a></li>
                    <li><a href="/">Becoming Catholic</a></li>
                    <li><a href="/">Returning Catholics</a></li>
                    <li><a href="/Inquiry">Why Become a Catholic?</a></li>
                    <li><a href="/RCIA">RCIA</a></li>
                    <li><a href="/beliefs">Learn More</a></li>
                    
                </ul>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="true"><span> Our Faith</span></a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <ul class="dropdown">
                  <li class="menu-back" style="display: none"><a href="#">                        
                    <li><a href="/newcomers">What is the Catholic Church</a></li>
                    <li><a href="/newcomers/become">The Catholic Beliefs and Traditions</a></li>
                    <li><a href="/newcomers/return">Sacraments</a></li>
                    <li><a href="/Inquiry"> Daily Mass</a></li>
                    <li><a href="/beliefs"> Marian Devotion</a></li>
                    <li><a href=""> Saints and Relics</a></li>
                    <li><a href="/our-faith"> Being Catholic Today</a></li>
                    <li><a href="/About">We are the Church</a></li>
                   
                </ul>
              </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link link" href="./comunities.php">Communities</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="true"><span> Communities</span></a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <ul class="">
                  <li class="menu-back" style="display: none"><a href="#">                        
                    <li><a href="./comunities.php">Liturgical Group</a></li>
                    <li><a href="">Societies</a></li>
                    <li><a href="">Basic Christian Communities</a></li>
                    <li><a href="">Outstations</a></li>
                    <li><a href="">Parish Council</a></li>
                 </ul>
              </div>
            </li>

          <!-- </li>
          <li class="nav-item">
            <a class="nav-link" href="./projects.php">Projects</a>
          </li> -->
             <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="true"><span> Ministries</span></a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <ul class="">
                  <li class="menu-back" style="display: none"><a href="#">                        
                    <li><a href="/newcomers">Welcome</a></li>
                    <li><a href="/newcomers/become">Becoming Catholic</a></li>
                    <li><a href="/newcomers/return">Returning Catholics</a></li>
                    <li><a href="/Inquiry">Why Become a Catholic?</a></li>
                    <li><a href="/beliefs">Learn More</a></li>
                    <li><a href="http://stphilipsparish.com/media/1/5/parish_registration_form.pdf" target="_blank">Register</a></li>
                    <li><a href="/our-faith">Our Faith</a></li>
                    <li><a href="/About">About Our Parish</a></li>
                    <li><a href="/RCIA">RCIA</a></li>
                </ul>
              </div>
            </li>

          <!-- <li class="nav-item">
            <a class="nav-link " href="./Reg_form.php">Membership</a>
          </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="true"><span> Membership</span></a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <ul class="">
                  <li class="menu-back" style="display: none"><a href="#">                        
                    <li><a href="./Reg_form.php">Newcomer</a></li>
                    <li><a href="">Returning Catholic</a></li>
                    <li><a href="">Practising Catholics</a></li>
                    
                </ul>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="true"><span> Pastoral Services</span></a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <ul class="">
                  <li class="menu-back" style="display: none"><a href="#">                        
                    <li><a href="/newcomers"></a></li>
                    <li><a href="/newcomers/become">Becoming Catholic</a></li>
                    <li><a href="/newcomers/return">Returning Catholics</a></li>
                    <li><a href="/Inquiry">Why Become a Catholic?</a></li>
                    <li><a href="/beliefs">Learn More</a></li>
                    <li><a href="http://stphilipsparish.com/media/1/5/parish_registration_form.pdf" target="_blank">Register</a></li>
                    <li><a href="/our-faith">Our Faith</a></li>
                    <li><a href="/About">About Our Parish</a></li>
                    <li><a href="/RCIA">RCIA</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contact</a>
            </li>
          </ul>

         <!--END/ Dropmenu -->
          <!-- <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text _a" placeholder="Search"  aria-label="Search">
              <i class="fas fa-search" aria-hidden="true"></i>       
            </div>
          </form> -->

           <!-- END/ NavLinks -->
        </div>
           <!-- NavLinks -->

        <!-- Collapsible content -->s
      </nav>
   <!--/.Navbar-->

