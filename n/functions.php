<?php
    function addRecord($array, $tbl){
        $next = $fields = $values = "";
        foreach($array as $f=>$v){
            $fields .= $next.$f;
                $values .= $next."'$v'";
            $next = ",";
        }
        $sql = "insert into $tbl ($fields) values ($values)";
        return $sql;
    }
    function editRecord($array, $tbl, $id)
    {
        $next = $set = "";
        foreach ($array as $f => $v) {
            if($f != "oldimage"){
                if ($f == $id) {
                    $where = " where $f=$v";
                }else {
                    $set .= $next.$f."='$v'";
                    $next = ",";
                }
            }
        }
        $sql = "update $tbl set $set $where";
        return $sql;
    }

    function Role()
    {
                $priority = '';
        $query = "SELECT * FROM priority 
        GROUP BY priority_name 
        ORDER BY priority_name ASC";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result))
        {
         $priority .= '
         <option value="'.$row["priority_id"].'">'.$row["priority_name"].'</option>';
     }

    }