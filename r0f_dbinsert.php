<?php
include_once("r0f_dbconnect.php");

function r0f_dbinsert($query)
{
	$connection = r0f_dbconnect();
	if (mysqli_connect_errno())
        return (-1);
	$query = mysqli_real_escape_string($connection, $query);
	if ($result = mysqli_query($connection, $query))
	{
		mysqli_close($connection);
		return ($result);
	}
	mysqli_close($connection);
	return (0);
}
?>