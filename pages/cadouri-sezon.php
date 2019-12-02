<?php require_once '../php/global_navbar.php';?>
<div class="home-content">
    <div class="bg-top">
        <div class="container-content">
            <h2>Cadouri sezon</h2>
        </div>
    </div>
    <div class="container-content">
        <div class="clearfix">
            <?php
            $sql = "SELECT * FROM `produse` WHERE `categorie`='c_sezon' ORDER BY `id` DESC ";
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  //$row['imagine'];
            ?>
            <div class="col-xs-6 col-sm-4 col-md-3 products">
                <div class="thumbnail" id="<?php echo $row['id']; ?>">
                    <div class="image-cont">
                        <img src="../uploads/<?php echo $row['imagine']; ?>" class="img-responsive">
                    </div>
                    <div class="caption">
                        <span><b><?php echo $row['nume_produs']; ?></b></span>
                      <p><?php echo getBreakText($row['descriere']); ?></p>
                    </div>
                </div>
            </div>
            <?php
                }//end while
                } else {
                    echo "Momentan nu este niciun produs din aceasta categorie";
                }
            ?>
        </div><!--end clearfix-->
    </div><!--end container-fluid-->
</div><!--end home-content-->
<?php require_once '../php/global_footer.php';?>