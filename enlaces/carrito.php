  <!--Lista-->
  <?php  
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
    if (empty($_POST["idpr"])) {
      $comment= "";
    } else {
      $comment = test_input($_POST["idpr"]);

    }
  
   
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <a href="reservalist.html" class="btn btn-success">Realizar Pedido</a>

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
      
     <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/zapatilla1.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $comment;?></h5>
                                    <p class="card-text">50bs</p>
                                    <button class="card-text btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
               
               
            </div>
    
        </div>
    </div>
