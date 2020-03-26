<?php include("./includes/header.php"); ?>

  <div class="myHero">
        <div class="textInHero">
          <h2 class="text-align-center">"You shall be my people, and I shall be your God..."</h2>
        </div>
  </div> 

  <div class="container-fluid">
    <!-- <div id='landingPage'>
        <img src="file:///C:/Users/Valentine-Marie/Pictures/Saved Pictures/Pope_Julius_II.jpg" class='img-circle' 
        image-border="0">
        <div id="Church_name_header">
          <h1>
                    ST. JULIUS CATHOLIC CHURCH
          </h1>
          <h5>
                  Orudu Junction, Opeilu, Agbado Station.
                    P.O. Box 173, Ifo, Ogun State <br> <thickspace>
                     Email: stjuliuscatholicchurch@gmail.com <br><br>
          </h5> 
        </div>  
      </div> -->
            
        
        <div class="row m-3">
          <div class="col-md-6">
            <div class="card myCard" id='liturgical_season_calendar'>
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
        <div class="col-md-2"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Dolore officiis labore porro expedita illum excepturi doloremque 
                minima omnis beatae. Veniam, dolore magnam asperiores cumque vitae 
                eius voluptatem omnis deleniti temporibus. 
        </div>

        <div class="col-md-7">
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