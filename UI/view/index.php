<?php include("./includes/header.php"); ?>
 
  <div class="myHero">
    <div class="row" style="padding-top: 35px !important;">
      <div class="col-md-8"></div>
      <div class="col-md-4">

           <!-- Tab -->
        <div class="card heroContent m-5">

          <!--Tab-nav -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#liturgical_calendar_today"
                     role="tab" aria-controls="home" aria-selected="true">Today
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#liturgical_calendar_tomorrow"
                     role="tab" aria-controls="profile" aria-selected="false">Tomorrow
                  </a>
                </li>
              </ul>
              <!-- Tab-nav -->

              <!-- Tab-content -->
              <div class="tab-content" id="liturgical-celebration">
              <!-- Today -->
                <div class="tab-pane fade show active" id="liturgical_calendar_today" role="tabpanel" aria-labelledby="home-tab">
                    <h4>
                      <div id='liturgical-date-tdy'></div>
                      <div id='liturgical-celebration-tdy'></div>
                      <div id='liturgical-color-tdy'></div>
                    </h4> 
                </div>
                <!-- Today -->
                <!-- Tomorrow-->
                <div class="tab-pane fade" id="liturgical_calendar_tomorrow" role="tabpanel" aria-labelledby="profile-tab">
                <h4>
                  <div id='liturgical-date-tmr'></div>
                  <div id='liturgical-celebration-tmr'></div>
                  <div id='liturgical-color-tmr'></div>
                </h4>
                </div>
              </div>
              <!-- Tomorrow -->
              <!-- Tab-content -->
        </div>
          
            <!-- Tab -->

          
      </div>
    </div>
  </div> 
  

  <div class="">
    <div class="container">
      <div class='row p-5 '>
        
       <!-- Welocome address -->
          <div class="col-md-8">
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
            <p id="Universalis_Mass_G.source"></p>
          </div>
        <!-- Welcome address -->

        <!-- News Feeds links -->
        <div class="col-md-4 p-3"> 
          <div class='card newsFeed p-4'>
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
            <div class="card myCard p-4  text-center" id='   '>
            <a href="http://universalis.com">
              <img src="http://universalis.com/banner.gif"
                    alt="Universalis" width="468" height="60" border="0">
            </a>

            </div>
          </div>
        <!--Liturgical calendar-->

      <!-- Saint of the day -->
          <div class="col-md-6">
            <div class="card myCard" id='saint_of_the_day'></div>
          </div>
        </div>
      <!-- Saint of the day -->
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
  
  
<?php include("./includes/footer.php"); ?>
  