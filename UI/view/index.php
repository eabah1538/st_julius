<?php include("./includes/header.php"); ?>

  <div class="myHero">
        <div class="textInHero">
          <!-- <h2 class="text-align-center">"You shall be my people, and I shall be your God..."</h2> -->
        </div>
  </div> 

  <div class="container">
      <div class="container">
      <div class='row p-5 '>
        
       <!-- Welocome address -->
          <div class="col-md-9">
            <h3 class="welcomeHead pt-3">Welcome Address from the Priest</h3>
            <div class="welcomeBody" style="min-height: 100px">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Est illum nesciunt ad aspernatur mollitia quis cupiditate 
            cum maiores harum quod, praesentium ut officiis provident voluptatibus,
             molestiae reiciendis dignissimos repellat quam.
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Est illum nesciunt ad aspernatur mollitia quis cupiditate 
            cum maiores harum quod, praesentium ut officiis provident voluptatibus,
             molestiae reiciendis dignissimos repellat quam
            </div>
          </div>
        <!-- welcome address -->

        <!-- News Feeds links -->
        <div class="col-md-3 p-3"> 
          <div class='card quickLinks p-4'>
                <h2 class="lead">
                  News Feeds
                </h2>
                <ul id="newsFeeds"></ul>
          </div>
        </div>
       <!-- News Feeds links -->

        </div>
      </div>

      <!--Card  -->
      <!--Liturgical calendar-->
        <div class="row mr-5 ml-5 mb-5 myCards">
          <div class="col-md-6">
            <div class="card myCard p-4  text-center" id='liturgical_season_calendar'>
            <h4>
              <div id='liturgical-date'></div>
              <div id='liturgical-celebration'></div>
              <div id='liturgical-color'></div>
             </h4>
            </div>
          </div>

      <!-- Saint of the day -->
          <div class="col-md-6">
            <div class="card myCard" id='saint_of_the_day'></div>
          </div>
        </div>
    <!-- Card -->

    <div class="row p-5">
      <div class="col-md-4 mx-auto">
        <h2 class="quoteHead">Quotes of the day</h2>
        <div class="p3 quotes text-align-center">
          "... Give and it shall be given unto you (... NRSV) ..."
        </div>
      </div>
    </div>
        


    
      <div class='row mr-5 ml-5 mb-4 p-3'>
        <div class="col-md-6 testimony">
                <!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Facilis quisquam nesciunt debitis accusantium minima porro nemo, sit 
                tempora. Odio magnam quae voluptates corporis odit sit mollitia,
                 placeat at suscipit aut. -->
            
        </div>  

        <div class="col-md-6" style="font-size: 1.5em">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Atque aperiam repellat dicta? Praesentium, perspiciatis est 
            necessitatibus omnis, molestiae expedita, eos aperiam ad numquam
             saepe quos vero. Amet doloremque laboriosam ad. 
        </div>     
      </div>


    </div> 
  </div>
  
  <div style="background:darkgray;">

  <?php include("./includes/footer.php"); ?>
  </div>