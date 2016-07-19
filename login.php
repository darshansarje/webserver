<?PHP
   require_once 'db_config.php';
   $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
   if ($connection->connect_error) die($connection->connect_error);

   $username = $_POST['username'];
   $password = $_POST['password'];

  $query = "Select * from demo_tab where username='$username' and password='$password'";
  $result = $connection->query($query);
  if (!$result) die($connection->error);


	$rows = $result->num_rows;
	if($rows === 1)
	{
		echo "Successful";
	}

?>
