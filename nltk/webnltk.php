<html>
<body>


<?php

echo '<h2>Name gender classifier with Naive Bayes</h2>';
echo '<p>Enter a name of your choice and use a trained Naive Bayes classifier to predict if the name is "Male" or "Female".</p>';

//echo exec("pwd");
//echo $output[1];
////////////////////////////////////////////////////////////////////////////////////

//$command = "/var/chroot/home/content/31/5769131/html/cgi/ricardo.py";
//$temp = exec($command, $output);
//echo $temp; //this has data

////////////////////////////////////////////////////////////////////////////////////

echo '<br /><form action="" method="post"><input type="text" name="username" /><input type="submit" value="Click" /></form>';
//$test = $_POST['username'];
//echo $test;
echo '<br />';


//echo $_POST['select'];
//$object_page->edit_status = $_POST['listbox'];
//echo $object_page->edit_status;



//$data = array('as', 'df', 'gh');
$data = 'Robert';
//$data = $test;
$command = '/Applications/XAMPP/htdocs/nltk/ricardo.py ';
$result = shell_exec($command . escapeshellarg(json_encode($data)));

$resultData = json_decode($result, true);
var_dump($resultData);
echo "<br />";
echo $resultData;
echo "<br />";


?>



<br />
<a href="http://www.rcalix.com">rcalix.com</a>
</body>
</html>
