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