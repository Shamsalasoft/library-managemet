
<center>
	<table border="3px">
		<tr>
			<td>BOOK ISBN</td><td>BOOK NAME</td><td>AUTHOR NAME</td><td>ACTION</td>
		</tr>


				<?php
				echo $date = date("Y-m-d");
				include_once("header.php");
				include_once("content.php");
				include_once("connection.php");
				$query ="SELECT  student_book.`std_id`, book.book_id, book.`isbn`,book.`author_name`,book.`book_name`
				FROM ((student
				INNER JOIN student_book ON student_book.std_id = student.std_id)
				INNER JOIN book ON book.book_id = student_book.book_id) WHERE student_book.`bookbackdate` = '$date' ";
				$result = $conn->query($query);
								if($result->num_rows > 0)
								{
				while($row=$result->fetch_assoc())
									{
					?>
							<tr>
								<td><?php echo $row["isbn"]; ?></td>
								<td><?php echo $row["book_name"]; ?></td>
								<td><?php echo $row["author_name"]; ?></td>
								<td><a href="view_std.php?id=<?php echo $row["std_id"]; ?>">View</a></td>
							</tr>
							
					<?php
									}
				?>
							
				<?php
								}
?>
	</table>
</center>