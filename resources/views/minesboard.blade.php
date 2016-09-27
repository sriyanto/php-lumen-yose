<p id="title">Minesweeper</p>
<table border="1">
	<?php
$x=8;
for($i =1; $i<=$x;$i++){
  	echo "<tr>";
	$y = 8;
  	for($ii = 1; $ii<=$y;$ii++){
  		if($i == 3 && $ii==6){
  			echo '<td id="cell-'.$i.'x'.$ii.'" onclick="ganti(this)">empty</td>';
  		}else{
  			echo '<td id="cell-'.$i.'x'.$ii.'">empty</td>';
  		}
    }
  	echo "</tr>";
}
?>
</table>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
	// $(body).load(function(){
	// 	$('#cell-3x6').text('empty');
	// })
	function ganti(elem){
	  $(elem).text('lost');

	}
	// $('#cell-3x6').click(function(){
	// 	console.log('click');
	//   $('#cell-3x6').text('lost');
	// });
</script>