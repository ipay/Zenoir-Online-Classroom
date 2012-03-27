<!--class management-->

<h4>[Classes]</h4>
<p>
<a id="nc" href="" class="lightbox">Create New</a>
</p>
<?php
$img = array('unlock.png', 'lock.png');
$act = array('data-unlock', 'data-lock');
?>

<table class="tbl_classes">
	<thead>
		<tr>
			<th>Class Code</th>
			<th>Description</th>
			<th>Subject</th>
			<th>Teacher</th>
			<th>Unlock/Lock</th>
			<th>View</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($table as $v){ ?>
		<tr>
			<td><?php echo $v[4]; ?></td>
			<td><?php echo $v[3]; ?></td>
			<td><?php echo $v[5]; ?></td>
			<td><?php echo strtoupper($v[2]) .',  '. ucwords($v[0]) . ' ' . ucwords($v[1]); ?></td>
			<td>
			<a href="#">
			<img src="/zenoir/img/<?php echo $img[$v[7]]; ?>" <?php echo $act[$v[7]]; ?>="<?php echo $v[6]; ?>">
			</a>
			</td>
			<td><a href="/zenoir/index.php/class_loader/view/class_home" data-classid="<?php echo $v[6]; ?>"><img class="icons" src="/zenoir/img/view.png"/></a></td>
			
		</tr>
		<?php } ?>
	</tbody>
</table>
<script>
var datalist = 'options' in document.createElement('datalist');
if(datalist){
	$('#nc').attr('href', '/zenoir/index.php/ajax_loader/view/new_class?dl=1');
}else{
	$('#nc').attr('href', '/zenoir/index.php/ajax_loader/view/new_class?dl=2');
}
</script>