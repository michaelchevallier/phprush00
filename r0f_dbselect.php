<?php
include_once("r0f_dbconnect.php");

function r0f_dbselect($query)
{
	$connection = r0f_dbconnect();
	if (mysqli_connect_errno())
		return (-1);
//	$query = mysqli_real_escape_string($connection, $query);
	if ($result = mysqli_query($connection, $query))
	{
		if (mysqli_num_rows($result) == 0)
		{
			mysqli_close($connection);
			return (0);
		}
		else
		{
			while ($data = mysqli_fetch_assoc($result))
				$array[] = $data;
			mysqli_free_result($result);
			mysqli_close($connection);
			return ($array);
		}
	}
	return (-1);
}
?>