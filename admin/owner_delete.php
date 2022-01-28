<?php
        include "includes/config.php";
        $id=$_REQUEST['owner_details_delete'];
        $delete = $conn->query("DELETE FROM add_owner WHERE id=$id");
            if ($delete) {
                          header("Location: manage-owner.php");
                        }   
?> 