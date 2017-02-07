<!--Database Structure


<!--
CREATE TABLE 'user_detail'(
    'id' int(11) NOT NULL AUTO_INCREMENT,
    'name' text NOT NULL,
    'Pnumber' int(11) NOT NULL,
    PRIMARY KEY ('id')
    )ENGINE=MYISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
-->

   <html>
       <head>
           <script typr="text/javascript" src="jquery-3.1.1.js"></script>
           <script type="text/javascript" src="modify_records.js"></script>
       </head>
       <body>
           <div id ="wrapper">
               <?php

                    $host = "localhost";
                    $dbname = "publications";
                    $user = "root";
                    $password = "";

                    $pdo = new PDO("mysql:dbname=$dbname; host=$host" , $user, $password);

                    if($pdo)
                    {
                       $smt = $pdo->prepare("select * from user_detail");

                    }
               ?>

            <table align="center" cellpadding="10" border="1" id="user_id">
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
            </tr>
            <?php
                 global $rows;
                 if ($smt->execute())
                        {
                            while($rows = $smt->fetchAll(PDO::FETCH_ASSOC))
                                //print_r($rows);
                            {

            ?>
                             <tr id="rows <?php echo $rows[0]['id'];?>">
                                    <?php print_r($rows[0]['name']);?>

                                <td id="name_val<?php echo $rows[0]['id'];?>"><?php echo $rows[0]['name'];?></td>

                                <td id="email_val<?php echo $rows[0]['id'];?>"><?php echo $rows[0]['email'];?></td>

                               <td id="pnumber_val<?php echo $rows[0]['id'];?>"><?php echo $rows[0]['pnumber'];?></td>
                <td>
                               <input type='button' class="edit_button" id="edit_button<?php echo $rows[0]['id'];?>" value="edit" onclick="edit_row('<?php echo $rows[0]['id'];?>');">

                               <input type='button' class="save_button" id="save_button<?php echo $rows[0]['id'];?>" value="save" onclick="save_row('<?php echo $rows[0]['id'];?>');">


                               <input type='button' class="delete_button" id="delete_button<?php echo $rows[0]['id'];?>" value="delete" onclick="delete_row('<?php echo $rows[0]['id'];?>');">
               </td>
               </tr>
               <?php

                        }
               }
               ?>

               <tr id="new_row">
                  <td><input type="text" id="new_name"</td>
                  <td><input type="text" id="new_email"</td>
                  <td><input type="text" id="new_pnumber"</td>
                  <td><input type="button" value="Insert row" onclick="insert_row();"></td>
               </tr>
            </table>
           </div>
       </body>
   </html>
