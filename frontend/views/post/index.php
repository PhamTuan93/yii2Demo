
<div>
	<table border="1px" width="500px">
		<tr>
			<td>Tiêu Đề</td>
			<td>Nội Dung</td>
			<td>Tác giả</td>
		</tr>
	<?php	foreach ($listPosts  as $listPost) { ?>
		<tr>
			<td><?php echo $listPost['title'] ?></td>
			<td><?php echo $listPost['content'] ?></td>
			<td><?php echo $listPost['author'] ?></td>
		</tr>	
	<?php 
		}
	 ?>
	</table>
</div>
