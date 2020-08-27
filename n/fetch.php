<?php
  $sql = "SELECT *, (SELECT first_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) first_name, (SELECT last_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) supportagent2, (SELECT image FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) image FROM ticket_replies p1 ";
     require('config/dbconfig.php');
      $result = mysqli_query($con, $sql);
      while($data = mysqli_fetch_assoc($result)){
        echo'
         <li class="reverse">  
          <div class="chat-content">
            <h5>"'.$data["first_name"].'"</h5>
              <div class="box bg-light-inverse">"'.$data["replies"].'"</div>
            </div>
          <div class="chat-img"><img src="'.$data["image"].'" alt="user" /></div>
         <div class="chat-time">"'.$data["date"].'"</div> 
       </li>';                                                                       
      }
      ?> 