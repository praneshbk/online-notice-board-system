
<html>
<head>
<script src="jquery.js"></script>
<script>

function bl(){
    $(".rch").fadeOut(500);
    $(".rch").fadeIn(500);
   }
   setInterval(bl,1000);
</script>
</head>
<?php 

$q=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");

while($row=mysqli_fetch_assoc($q))
     {
       $s = $row['status'];
	   $s1 = $row['valid'];
	    }
		//echo $s;
		if($s1=="yes")
		{
		$q1=mysqli_query($conn,"select * from notice where user = '$s' ");
$rr = mysqli_num_rows($q1);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>
<h2  class="rch">All Notifications</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q1))
{
?>
<Tr>

 <td><?php
echo $i; ?></td><?php
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['Date']."</td>";

echo "</Tr>";
$i++;
}
	}}
	else
	{
	echo "<h2 style='color:red'>You are un-verified user !!!</h2>";

	}	?>
		
</table>
</html>