<html xmlns="heelp://www.w3.org/1999/html">
    <head>
       <meta http-equv="Content-Type" content="text/html; charset=utf-8"/>
       <title>Using Ajax with PHP/Mysql</title>
       <link rel="stylesheet" href="css/style.css"/>
       <script type="text/javascript" src="js/script.js"></script>
    </head>


    <body>

        <div class="container">
            <div class="header">
                <img src="images/BeWebDeveloper.png"/>
            </div><!--header-->
            <h1 class="main_title">Using Ajax with PHP/MYSQL</h1>
            <div class="contect">
                <fieldset class="field_container">
                    <legend><img src="images/plus.gif"> Add new member</legend>
                    <form>
                        <input type="text" id="full_name" class="frm_input" placeholder="full name">
                        <input type="text" id="email" class="frm_input" placeholder="Email">
                        <input type="text" id="age" class="frm_input" placeholder="Age">
                        <input type="button" class="frm_button" value="frm_input" oneclick="add_member">
                    </form>
                </fieldset>
                <fieldset class="field_container">
                    <legend> <img src="images/arrow.gif">Members List</legend>
                    <div id="list_container">
                        <?php
                            include('condif.php');
                            $pdo = connect();

                            include('list_members.php');
                        ?>
                    </div>
                </fieldset>
                 <div class="footer">
                     Powere by <a href ="#">bewebdeveloper.com</a>
                 </div>

        </div>
<body>
</html>
