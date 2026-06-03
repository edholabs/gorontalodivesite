<div class="footer footer1">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
  
          <ul class="list-inline">
          </ul>
          <h5 class="white">2019 Copyright &copy; GorontaloDiveSite - Dinas Pariwisata Provinsi Gorontalo</h5>
          <?php
$counter_file="counter.txt";
if (!file_exists ($counter_file)) {
 fopen ($counter_file, "w");
}
$file = fopen($counter_file, "r");

$counter = fread($file, 10);
fclose($file);

$counter++;

echo "<h5><b>jumlah visitor - <font color=red> $counter<b></h5>";
$file = fopen($counter_file, "w");
fwrite($file, $counter);
fclose($file);
?>
          </div>
        </div>
      </div>
    </div>
    


<script type="text/javascript" src="js3/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js3/jquery.address.js"></script>
    <script type="text/javascript" src="js3/jquery.geocomplete.min.js"></script>
    <script type="text/javascript" src="js3/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js3/jquery.dataTables.sorting.js"></script>
    <script type="text/javascript" src="js3/jquery.dataTables.bootstrap-pagination.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/datatable-bootstrap.js"></script>
    
  </body>
</html>