<?php 
$title = "Dive Site List";
include_once "header.php";
include_once "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
            <div class="section-title">
                <h2><?php echo $title ?></h2>
                <p>Find the perfect spot for your next dive adventure</p>
            </div>
            
            <div class="card-grid">
              <?php
                ob_start();
                include "ambildata.php";
                $data = ob_get_clean();
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
                <div class="dive-card">
                    <div class="dive-card-img">
                        <span class="badge"><i class="fa fa-map-marker"></i> <?php echo $item->lokasi; ?></span>
                    </div>
                    <div class="dive-card-body">
                        <h3><?php echo $item->namadivesite; ?></h3>
                        <p><strong>Kedalaman:</strong> <?php echo isset($item->Kedalaman) ? $item->Kedalaman : 'N/A'; ?><br>
                           <strong>Visibility:</strong> <?php echo isset($item->Visibility) ? $item->Visibility : 'N/A'; ?></p>
                    </div>
                    <div class="dive-card-footer text-center">
                        <a href="detail?Id_dive=<?php echo $item->Id_dive; ?>" class="btn-premium" style="width: 100%; justify-content: center;">
                            <i class="fa fa-info-circle"></i> Info Detail
                        </a>
                    </div>
                </div>
              <?php }} else { ?>
                <div class="col-md-12 text-center">
                    <p>Data tidak ada.</p>
                </div>
              <?php } ?>
            </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>