<?php
    if(isset($_POST['submit']))
    {
        $c = mysqli_connect('localhost','root','','ebooks') or die('connection failed');
        $url=$_POST['url'];
        $category = $_POST['category'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $price=$_POST['price'];
        $readings=$_POST['readings'];
        $link=$_POST['link'];
        $ins = "INSERT INTO bookdata VALUES('$url','$category','$title','$author','$price','$readings','$link')";
        if (mysqli_query($c,$ins)) {  
        echo '<script type="text/JavaScript"> 
            alert("Success");
          </script>'; 
        } else {
            echo '<script type="text/JavaScript"> 
                    alert("Error occurred");
                  </script>';
        } 
        header("Location:addData.html");
        mysqli_close($c);
    }
?>