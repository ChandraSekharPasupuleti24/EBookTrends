<?php
$c = mysqli_connect('localhost','root','','ebooks') or die('connection failed');
$title=$_COOKIE['searchText'];
$sql = "SELECT *FROM bookdata where title LIKE'%$title%'";
$arr = array();
$res = mysqli_query($c, $sql);
if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
        $arr[] = $row;
    }
  }
  else{
    echo "No data";
  }
  echo json_encode($arr);
  mysqli_close($c);
?>