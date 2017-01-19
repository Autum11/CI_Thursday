<h1>List of Customers</h1>
<p>
    <?php
        foreach ($customers as $row){
            echo $row ['fn'], ' '.$row['ln'].'<br/>';
        }

    ?>
</p>
