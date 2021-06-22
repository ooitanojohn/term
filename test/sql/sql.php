 <?php
   $sch_name = '新';
   $order_col = 'id';
   $order = 'desc';

   $sql = "SELECT *
        FROM sample
        WHERE name like '%" . $sch_name . "%'
        ORDER BY '.$order_col $order.'";

   echo '$sql:';
   var_dump($sql);
   echo '<br>';
