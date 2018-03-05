<!DOCTYPE html>
<html>
   <title>W3.CSS</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="css/style.css">

   <body>
      <div class="w3-container w3-teal">
         <h1>Summer Holiday</h1>
      </div>
     
      <div class="w3-row-padding w3-margin-top">
         <div class="w3-third">
            <div class="w3-card part">
               <img src="img/2.jpg" style="width:100%" class="img-data">
               <div class="w3-container">
                  <h4>Manarola </h4>
               </div>
               
            </div>
         </div>
         <div class="w3-third">
            <div class="w3-card part">
               <img src="img/1.jpg" style="width:100%" class="img-data">
               <div class="w3-container">
                  <h4>Corniglia</h4>
               </div>
            </div>
         </div>
         <div class="w3-third">
            <div class="w3-card part">
               <img src="img/4.jpg" style="width:100%" class="img-data">
               <div class="w3-container">
                  <h4>Riomaggiore</h4>
               </div>
            </div>
         </div>
      </div>

      <!-- modal content -->
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">OpenModal</button>

      <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-card-4">
          <header class="w3-container w3-teal"> 
            <span onclick="document.getElementById('id01').style.display='none'" 
            class="w3-button w3-display-topright">&times;</span>
            <h2>Modal Header</h2>
          </header>
          <div class="w3-container showpic">
            
          </div>
          <footer class="w3-container w3-teal">
              <p>
                <a href="#" class="next">previous</a> | <a href="#" class="next">1</a> | <a href="#" class="next">2</a> | <a href="#" class="next">next</a>
              </p>
            <p>Modal Footer</p>
          </footer>
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
        $(document).ready(function () {
          $('.img-data').click(function(){
    
            var attr = $(this).attr("src");
            var data = '<img src="'+attr+'">';
            $(".showpic").html(data+data);
            $("#id01").css("display", "block");
          

          });

          $(".next").click(function(){
            var source = $('.showpic img').attr("src");
            var array = source.split('.');
            var first_part = array[1];

            var main = array[0].split('/');
            var data = parseInt(main[1])+1;
            if(data == 4){
              data = 1;
            }

            
            var data = '<img src="img/'+data+"."+first_part+'">';

            $(".showpic").html(data+data);
          

          });

          $(".previous").click(function(){
            var source = $('.showpic img').attr("src");
            var array = source.split('.');
            var first_part = array[1];

            var main = array[0].split('/');
            var data = parseInt(main[1])-1;
            if(data == 0){
              data = 1;
            }

            
            var data = '<img src="img/'+data+"."+first_part+'">';

            $(".showpic").html(data+data);
          
          });

          
        });

      </script>
   </body>
</html>