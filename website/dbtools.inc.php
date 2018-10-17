<?php
  function create_connection()
  {
    $link = mysqli_connect("localhost", "root", "", "deco3500")
      or die("Fail to connect datebase: " . mysqli_connect_error());
	  
    mysqli_query($link, "SET NAMES utf8");
    return $link;
  }
	
  function execute_sql($link, $database, $sql)
  {
    mysqli_select_db($link, $database)
      or die("Fail to open database: " . mysqli_error($link));
						 
    $result = mysqli_query($link, $sql);
		
    return $result;
  }
?>
