<?php
include 'connect.php';
?>

<head>
    <link rel="stylesheet" href="categories-add.css">
</head>
   
<?php
$cols=array();
    $sql = "SELECT *
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = N'product'";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_rows($res) > 0){
        echo "<table>";
        echo "<tr>";
        while($row = mysqli_fetch_row($res)){
            foreach($row as $key => $value){
                if($key == 3){
                echo "<th>$value</th>";
                
           
                }
            }
            }
            echo "</tr>";
            
        }
    
    else{
        echo "not connected";
    }
    $sqlpro = "SELECT *
    FROM category";
    $res1 = mysqli_query($con,$sqlpro);
    if(mysqli_num_rows($res1)>0){
        echo "<tr>";
        while($row2 = mysqli_fetch_row($res1)){
            foreach($row2 as $prod){
                echo "<td>$prod</td>";
            }
        }
        echo "</tr>";
        echo "</table>";
    }

    
?>


<?php    
    mysqli_close($con);
    

?>
    

        
    