

<table border="1">
    <thead>
        <?php 
            for($i = 1; $i<=10 ; $i++){
                echo '<th>'."Tabla del $i".'</th>';            }
        ?> 
    </thead>
    <tbody>
        
        <?php 
        
        for($i = 1; $i<=10 ; $i++){
            echo "<td>";
            for($k = 1; $k<=10 ; $k++){
              echo "$i x $k =".($i*$k).'<br>';
            }
            echo "</td>";
        }
       
        ?>       

    </tbody>
</table>
