<?php include('shared/header.php') ?>

<?php include('templates/navbar.php') ?>
<?php include('templates/card.php') ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $(document).ready(function()
        {
            $('.sidenav').sidenav();
            $(".dropdown-trigger").dropdown();
        });   
            
    </script>


      <?php include('shared/footer.php') ?>


    </body>


  </html>