<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="table.css">
        <title>Mathematical Table</title>
    </head>
    <body>
        
        <h1>&bull; Want Mathematical Table ? &bull;</h1>
        
        <form action="index.php" method="post">
            <input type="number" name="table" placeholder="Search Mathematical Table... ">
            <input type="submit" value="Check" name="check" class="button"/>
        </form>
        
        <br><br>
        
            <?php 
                if(isset($_POST['check']))
                {

                $table   = $_POST['table'];

                    for($i=1; $i<=10; $i++)
                    {
                    $t = $table;
                    $m = $t*$i;    
                    $result =  $t . " &emsp; &times; &emsp;" . $i . " &emsp;= &emsp;" . $m . "<br";
                    echo "<p>" . $result . "</p>";
                    }
                
                }
            ?>

    </body>
</html>
