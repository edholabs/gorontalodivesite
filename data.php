<?php 
$title = "Dive Site List";
include_once "header.php";
include_once "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="table-responsive">          
              <table class="table">
              <thead>
                <tr>
                  <th width="1%">No.</th>
                  <th width="7%">Dive Site</th>
                  <th width="3%">Lokasi - <i>Location</i></th>
                </tr>
              </thead>
              <tbody>
              <?php
                $data = file_get_contents('https://gorontalodivesite.com/ambildata.php');
                $id=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td><?php echo $id; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a target="" href="detail.php?Id_dive=<?php echo $item->Id_dive; ?>"">
                    <i class="fa fa-map-marker"> &nbsp;
                  </div></i><?php echo $item->namadivesite; ?></a>&nbsp;
                  </div>
                </td>
                <td><?php echo $item->lokasi; ?></td>
               
              <?php $id++; }}

              else{
                echo "data tidak ada.";
                } ?>
              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>