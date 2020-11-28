<?php
    session_start();
    session_destroy();
    echo "You seccessfully logout. click here to  <a href='index.php'>login
          again</a>";
 ?> 