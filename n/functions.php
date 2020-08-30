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

    function selectReply($mid)
    {
        $replies = "SELECT *, (SELECT first_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) first_name, (SELECT last_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) supportagent2, (SELECT image FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) image, (SELECT email FROM `ticket` p2 WHERE p1.ticket_id = p2.ticket_id) email,(SELECT ticket_number FROM `ticket` p2 WHERE p1.ticket_id = p2.ticket_id) ticketNumber FROM ticket_replies p1  where ticket_id = $mid";
        return $replies;
    }

    function selectTicket($mid)
    {
         $sql = "SELECT *, (SELECT status_name FROM status p2 WHERE p1.status_id = p2.status_id) status1, (SELECT priority_name FROM priority p3 WHERE p1.priority_id = p3.priority_id) priority1, (SELECT dept_name FROM department p4 WHERE p1.dept_id = p4.dept_id) department1 FROM ticket p1 where ticket_id=$mid";
        return $sql;
    }

    function selectPriority($mid)
    {
         $sql = "SELECT * FROM priority GROUP BY priority_name ORDER BY priority_name ASC";
        return $sql;
    }

    function selectDepartment($mid)
    {
         $sql = "SELECT * FROM department GROUP BY dept_name ORDER BY dept_name ASC";
        return $sql;
    }

    function selectStatus($mid)
    {
         $sql = "SELECT * FROM status GROUP BY status_name ORDER BY status_name ASC";
        return $sql;
    }

    