<?php
        include "includes/config.php";
        $id=$_GET['id'];
        $delete = $conn->query("DELETE FROM add_owner WHERE id=$id");
            if ($delete) {
                          header("Location: manage-owner.php");
                        }   
?> 