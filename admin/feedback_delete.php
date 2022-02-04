<?php
        include "includes/config.php";
        $id=$_GET['id'];
        $delete = $conn->query("DELETE FROM add_feedback WHERE id=$id");
            if ($delete) {
                          header("Location: manage_feedback.php");
                        }   
?> 