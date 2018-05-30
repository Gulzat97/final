<div id="single-post-slider">
	<?php
		//$titles = ['Ысык-Көл', 'Нарын', 'Талас', 'Бишкек', 'Ош', 'Жалал-Абад', 'Баткен'];
    $titles = 'Ысык-Көл';
    for($i = 0; $i < 7; $i++) {
			echo 
			"<div class='single-post-slide'>
				<div class='image'>
					<img class='single-post-slide-img' src='/img/$i.jpg' alt=''>
				</div>
			</div>
			";
		}
	?>
</div>