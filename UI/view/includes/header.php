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
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../css/style.css">
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
      <nav class="navbar navbar-expand-lg white navbar-light fixed-top scrolling-navbar">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">St Julius</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Devotional</a>
            </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./projects.php">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Reg_form.php">Membership</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

            <!-- Dropdown -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->

          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search"  aria-label="Search">
              <i class="fas fa-search" aria-hidden="true"></i>       
            </div>
          </form>
        </div>
        <!-- Collapsible content -->

      </nav>
   <!--/.Navbar-->

   