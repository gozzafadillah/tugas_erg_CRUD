<?php
    include "data.php";


   $id = $_GET["id"];
   $query = "DELETE FROM t_minuman WHERE id=$id";

   mysqli_query($conn,$query);

   header("Location:update_delete.php");
?>