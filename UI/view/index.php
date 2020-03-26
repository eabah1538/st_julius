<?php include("./includes/header.php"); ?>

  <div class="myHero">
        <div class="textInHero">
          <h2 class="text-align-center">"You shall be my people, and I shall be your God..."</h2>
        </div>
  </div> 

  <div class="container-fluid">
      <div class="container">
      <div class='row p-5'>
        <!-- Quick access links -->
        <div class="col-md-2"> 
          <div class='card adCard'>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Dolore officiis labore porro expedita illum excepturi doloremque 
                minima omnis beatae. Veniam, dolore magnam asperiores cumque vitae 
                eius voluptatem omnis deleniti temporibus. 
          </div>
        </div>
       <!-- Quick access links -->

       <!-- Welocome address -->
          <div class="col-md-10">
            <h3 class="lead">Welcome Address from the Priest</h3>
            <div style="height: 200px">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Est illum nesciunt ad aspernatur mollitia quis cupiditate 
            cum maiores harum quod, praesentium ut officiis provident voluptatibus,
             molestiae reiciendis dignissimos repellat quam.
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Est illum nesciunt ad aspernatur mollitia quis cupiditate 
            cum maiores harum quod, praesentium ut officiis provident voluptatibus,
             molestiae reiciendis dignissimos repellat quam.
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Est illum nesciunt ad aspernatur mollitia quis cupiditate 
            cum maiores harum quod, praesentium ut officiis provident voluptatibus,
             molestiae reiciendis dignissimos repellat quam.
            </div>
          </div>
        </div>
      </div>
            
        
        <div class="row m-3">
          <div class="col-md-6">
            <div class="card myCard p-3" id='liturgical_season_calendar'>
              <div id='liturgical-date'><h5></h5></div>
              <div id='liturgical-celebration'></div>
              <div id='liturgical-color'></div>

            </div>
          </div>

          <div class="col-md-6">
            <div class="card myCard" id='saint_of_the_day'>

            </div>
          </div>
        </div>

        

      <div class='row'>
        <div class="col-md-9">
          <div>
            <img src='../../assets/interior.jpg'
               height="250px' width="400px" class='img-square'>
          </div>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Facilis quisquam nesciunt debitis accusantium minima porro nemo, sit 
                tempora. Odio magnam quae voluptates corporis odit sit mollitia,
                 placeat at suscipit aut.
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Dolore officiis labore porro expedita illum excepturi doloremque 
                minima omnis beatae. Veniam, dolore magnam asperiores cumque vitae 
                eius voluptatem omnis deleniti temporibus. 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Dolore officiis labore porro expedita illum excepturi doloremque 
                minima omnis beatae. Veniam, dolore magnam asperiores cumque vitae 
                eius voluptatem omnis deleniti temporibus. 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Dolore officiis labore porro expedita illum excepturi doloremque 
                minima omnis beatae. Veniam, dolore magnam asperiores cumque vitae 
                eius voluptatem omnis deleniti temporibus. 
            
                    <br><br><br><br>

                <a href='#email'> <button> Get Information </button></a>

                    <br><br><br><br>
                    <br><br><br><br>

            <div>
              <form method="POST" action="#">

                <?php
                    include ('../../server/st_julius_bknd.php');
                  ?>

                <input id= 'email' type="email" placeholder="email here">
                <input type="submit" value="Get Information">
              </form>
            </div>
            
        </div>  

        <div class="col-md-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Atque aperiam repellat dicta? Praesentium, perspiciatis est 
            necessitatibus omnis, molestiae expedita, eos aperiam ad numquam
             saepe quos vero. Amet doloremque laboriosam ad. 
        </div>     
      </div>
<br><br>
      <div class= "row">
        <div class= "col-md-1"></div>
        <div class= "col-md-7">
          <video height= '300' width= '350' controls>
            <source src="learn_php.mp4" type="video/mp4">
            <source src="learn_php.ogg" type="video/ogg">
            <source src="learn_php.aac" type="video/aac"> 
             Browser does not support video <br>
          </video>
        </div>
        <div class= "col-md-4">
           <div class= "col-md-8"> 
              Events on video
              <a href="#">
                <li>
              <video height= '100' width= '150' controls>
                <source src="learn_php.mp4" type="video/mp4">
                <source src="learn_php.ogg" type="video/ogg">
                <source src="learn_php.aac" type="video/aac"> 
                 Browser does not support video
              </video><br>
              Youths in action
               </li>
             </a>
             <a href="#">
               <li>
                   <video height= '100' width= '150' controls>
                       <source src="learn_php.mp4" type="video/mp4">
                       <source src="learn_php.ogg" type="video/ogg">
                       <source src="learn_php.aac" type="video/aac"> 
                        Browser does not support video <br>
                     </video><br>
                     Youths in action
               </li>
             </a>
             <a href="#">
               <li>
                   <video height= '100' width= '150' controls>
                       <source src="learn_php.mp4" type="video/mp4">
                       <source src="learn_php.ogg" type="video/ogg">
                       <source src="learn_php.aac" type="video/aac"> 
                        Browser does not support video <br>
                     </video><br>
                     Youths in action
               </li>
             </a>
           </div>
           <div class="col-sm-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae laboriosam perspiciatis, debitis sit blanditiis commodi. Nemo iste dolores excepturi beatae inventore ad, cupiditate itaque quibusdam, quod adipisci quam tempore officia?</div>
        </div>
      </div>




    </div> 
  </div>
  
  <div style="background:lightgray;">

  <?php include("./includes/footer.php"); ?>