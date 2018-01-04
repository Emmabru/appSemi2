 <?php
include 'dbconfig.php';

        
        $query = "DELETE FROM comments WHERE idcomments =".$_POST["idcomments"].";";
        //echo $query;
        mysqli_query($db, $query);

        $query = "DELETE FROM recipeToComment WHERE commentID =".$_POST["idcomments"].";";
        //echo $query;
        mysqli_query($db, $query);
        header("location: index.php");