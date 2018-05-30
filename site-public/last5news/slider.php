<div id="slider">
	<?php
		//$titles = ['Ысык-Көл', 'Нарын', 'Талас', 'Бишкек', 'Ош', 'Жалал-Абад', 'Баткен'];
		$titles = 'Нарын';
		for($i = 0; $i < 7; $i++) {
			echo 
			"<div class='slide'>
				<img class='slide-img' src='img/$i.jpg' alt=''>
				<div class='slide-text'>
					<div class='slide-text-title'>
						$titles[$i]
					</div>
					<div class='slide-text-desc'>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					</div>
				</div>
			</div>
			";
		}
	?>
</div>