<?php 
$a11="no";
$q=mysqli_query($conn,"select * from user where valid='$a11'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>
<script>
	function AddUser(id)
	{
		if(confirm("You want to Add this record ?"))
		{
		window.location.href="add_user.php?id="+id;
		}
	}
</script>

<h2 style="color:#00FFCC">All Un-verified Users</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>User Name</th>
		<th>Email</th><th>Status</th>
		<th>Mobile</th>
		<th>Gender</th><th>Add</th>
		<th>Delete</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['status']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['gender']."</td>";
?>
<Td><a href="javascript:AddUser('<?php echo $row['id']; ?>')" style='color:Green'><span class='glyphicon glyphicon-user'></span></a></td>
<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td> 
<?php 

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>