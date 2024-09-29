<?php
$c = mysqli_connect('localhost','root','','ebooks') or die('connection failed');
$category=$_COOKIE['category'];
if($category=="All")
{
  $sql = "SELECT *FROM bookdata";
}
else{
$sql = "SELECT *FROM bookdata where category='$category'";
}
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