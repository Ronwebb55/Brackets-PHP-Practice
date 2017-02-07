<table class="table_list" cellspacing="2" cellpadding="0">
    <tr class="bg_h">
        <th>Full Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Delete member</th>
    </tr>


    <?php

        $sql = "SELECT * FROM members ORDER By id ASC";
        $query = $pdo->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();
        $bg = 'bg_1';
        foreach ($list as $rs){

            ?>
            <tr class ="<?php echo $bg; ?>">
                <td><?php echo $rs['full_name']</td>




</table>
