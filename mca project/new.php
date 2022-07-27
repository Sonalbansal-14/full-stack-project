<?php
$servername="localhost";
$username="localhost";
$dbpassowrd="localhost";
$dbname="localhost";
$conn = mysqli_connect($servername,$username,$dbpassword,$dbname);

          if(!$conn){
                    echo "Connection fail";
          }
          echo "Connection established";
          
          ?>