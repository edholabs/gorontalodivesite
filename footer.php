<div class="footer-premium">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4>Gorontalo Dive Site</h4>
            <p style="margin-top: 20px; line-height: 1.8;">Explore the underwater wonders of Gorontalo. Find the best dive spots, marine life, and plan your perfect adventure with our interactive map.</p>
          </div>
          <div class="col-md-4">
            <h4>Quick Links</h4>
            <ul style="margin-top: 20px;">
              <li><a href="home"><i class="fa fa-angle-right"></i> Home</a></li>
              <li><a href="data"><i class="fa fa-angle-right"></i> Dive Sites</a></li>
              <li><a href="peta"><i class="fa fa-angle-right"></i> Dive Map</a></li>
              <li><a href="berita"><i class="fa fa-angle-right"></i> Information</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>Contact Info</h4>
            <ul style="margin-top: 20px;">
              <li><i class="fa fa-map-marker" style="width: 20px;"></i> Dinas Pariwisata Provinsi Gorontalo</li>
              <li><i class="fa fa-envelope" style="width: 20px;"></i> info@gorontalodivesite.com</li>
              <li><i class="fa fa-phone" style="width: 20px;"></i> +62 435 123456</li>
            </ul>
            
            <?php
            $counter_file="counter.txt";
            if (!file_exists ($counter_file)) {
             fopen ($counter_file, "w");
            }
            $file = fopen($counter_file, "r");
            $counter = fread($file, 10);
            fclose($file);
            $counter++;
            $file = fopen($counter_file, "w");
            fwrite($file, $counter);
            fclose($file);
            ?>
            <div class="visitor-badge">
                <i class="fa fa-users"></i> Visitors: <?php echo number_format($counter); ?>
            </div>
          </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="footer-bottom">
                    &copy; <?php echo date("Y"); ?> Gorontalo Dive Site. All Rights Reserved.
                </div>
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