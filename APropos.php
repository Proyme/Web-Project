<!DOCTYPE html>
<html>
<header>
  
  <title>A Propos</title>

  <?php include '_Layout/_Header.php' ?>

  <!-- CSS only -->

  <link rel="stylesheet" href="_Layout/aPropos.css">
  <link rel="stylesheet" href="_Layout/animation.css">

    <script type="text/javascript">
      function afficherDetails(id)
      {
        //alert(numero);
        var ajax = new XMLHttpRequest();			
        ajax.open('GET', 'https://www.blexisgame.com/aProposDetail.php?id=' + id, true);
        
        ajax.onreadystatechange = function()
        {
          if(ajax.readyState === 4)
          {
            reponse = JSON.parse(ajax.responseText);
            cible = document.getElementById("zone-details-" + id);
            cible.innerHTML = reponse[0].detail;
          }
        }
        ajax.send("");
      }
    </script>
  </header>
  <body>
   <!-- <p style="text-align: center;">
      <img src="illustration/Blexis-simple.png" class="img-fluid" alt="logo"> 
    </p>-->

  <div class="containerPrincipale">
    <div class="containerInfos">
      <h2 class="texte">
        Qui sommes nous
        <small class="text-muted">?</small>
      </h2>
        <a onmousedown="afficherDetails(1)">
              <button type="button" class="nouvelle btn btn-warning">
                  <div class="nouvelle" id="nouvelle-6">
                      <h3>Afficher</h3>
                  <p id="zone-details-1"></p>
                  </div>
              </button>
              </a>

      <div class="line-1"></div>

      <h2 class="texte">
        Que faisons nous
        <small class="text-muted">?</small>
      </h2>
        <a onmousedown="afficherDetails(2)">
              <button type="button" class="nouvelle btn btn-secondary">
                  <div class="nouvelle" id="nouvelle-7">
                      <h3>Afficher</h3>
                  <p id="zone-details-2"></p>
                  </div>
              </button>
              </a>
    </div>

    <section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
           <!-- Image Zoom HTML -->
                <div class="imageRep card border-light mb-3">
                  <img id="myImg" src="illustration/imageRep.png" alt="Trolltunga, Norway">
                </div>

                <!-- The Modal -->
                <div id="myModal" class="modal">
                  <img class="modal-content" id="img01">
                </div>
            <!-- End Image Zoom HTML -->
              
                </div>
            </div>
      </div>
    </section>
     
      <script>
      // Get the modal
      var modal = document.getElementById('myModal');

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById('myImg');
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          modalImg.alt = this.alt;
          captionText.innerHTML = this.alt;
      }


      // When the user clicks on <span> (x), close the modal
      modal.onclick = function() {
          img01.className += " out";
          setTimeout(function() {
            modal.style.display = "none";
            img01.className = "modal-content";
          }, 400);
          
      }    
          
      </script>

  </div>

  </body>
<?php include '_Layout/_Footer.php'?>
</html>