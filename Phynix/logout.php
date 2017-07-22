  <?php
  session_start();
    if(isset($_SESSION['username'])){
    	session_destroy();
    	echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
    }
   
  ?>