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
require("../php/db_connect.php");
?>
<ul>
<?php
//print 10 items
while($result= ($query))
{
    echo "<li>". $query ."</li>";
}
?>
</ul>
<?php
//fetch all the data from database.
$rows= "SELECT * FROM national_parks";
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