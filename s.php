<?php
require('config/dbconfig.php');
        $sql = "SELECT *, (SELECT first_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) first_name, (SELECT last_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) supportagent2, (SELECT image FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) image FROM ticket_replies p1";
        $replyResult = mysqli_query($con, $sql);
          while($datReply = mysqli_fetch_assoc($replyResult)){
             echo'
                <li class="reverse">  
                   <div class="chat-content">
                     <h5>"'.$datReply["first_name"].'"</h5>
                    <div class="box bg-light-inverse">"'.$datReply["replies"].'"</div>
                    </div>
                    <div class="chat-img"><img src="'.$datReply["image"].'" alt="user" /></div>
                    <div class="chat-time">"'.$datReply["date"].'"</div> 
                </li>';
             }
