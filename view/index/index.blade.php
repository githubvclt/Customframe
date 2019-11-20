<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>自定义框架</title>
	<link rel="stylesheet" href="<?php echo env('css_path'); ?>bootstrap.min.css">
	
</head>
<body>
	<div class="container">
		<h1 style="text-align: center; font-size: 100px;">自定义框架</h1>	
		<div class="panel panel-default">
			<p style="padding:10px 0px 10px 10px;">测试数据：</p>
			<table class="table table-hover">
				<thead>
					<tr>
						<td>#</td>
						<td>name</td>
						<td>age</td>
					</tr>
				</thead>
				
				<?php
					foreach($row as $v){
				?>
				<tr>
					<td><?php echo $v['id']; ?></td>
					<td><?php echo $v['name']; ?></td>
					<td><?php echo $v['age']; ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
		
	</div>
		


</body>
</html>