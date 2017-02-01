<?php

define("ROOT_LOCATION", "C:\Program Files (x86)\EasyPHP-Devserver-16.1\eds-www");
echo " Today is " . date("l") . "." ;
$username = "Fred Smith";
echo $username;
$current_user = $username;
echo $current_user;

$team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');

foreach($team as $teams)
{
    echo "$teams <br>";
}

$oxo = array (array('x' ,' ', 'o'),
              array('o','o','x'),
              array('x','o', ' '));

$author = "Ronnie Webb";

echo <<<_END
Life is such before you go to far look at what your doing so life is such

- $author
_END;

$directory = ROOT_LOCATION;
echo $directory;

$b = true;

$b ? print "TRUE" : print "FALSE";



function longdate($timestamp)
{
    return date("l F js Y", $timestamp);
}

echo longdate(time());
?>



