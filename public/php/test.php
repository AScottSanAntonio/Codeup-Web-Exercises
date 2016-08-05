<?php  

?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
      <div id="content">
<?php
include("db_connect.php");
$start=0;
$limit=10;
 
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $start=($id-1)*$limit;
}
else{
    $id=1;
}
//Fetch from database first 10 items which is its limit. For that when page open you can see first 10 items. 
$query=mysqli_query($dbc,"SELECT * FROM national_parks LIMIT $start, $limit");
?>
<ul>
<?php
//print 10 items
while($result=mysqli_fetch_array($query))
{
    echo "<li>".$result['username']."</li>";
}
?>
</ul>
<?php
//fetch all the data from database.
$rows=mysqli_num_rows(mysqli_query($dbc,"select * from user"));
//calculate total page number for the given table in the database 
$total=ceil($rows/$limit);
if($id>1)
{
    //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
    echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
}
if($id!=$total)
{
    ////Go to previous page to show next 10 items.
    echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
}
?>
<ul class='page'>
<?php
//show all the page link with page number. When click on these numbers go to particular page. 
        for($i=1;$i<=$total;$i++)
        {
            if($i==$id) { echo "<li class='current'>".$i."</li>"; }
             
            else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
        }
?>
</ul>
</div>



</body>
</html>