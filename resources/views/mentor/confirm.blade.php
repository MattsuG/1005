<div class="container">
 	<div class="row">

 		<div class="col-sm-8 col-md-8 col-lg-8">
		 	<h2>Make sure all the contents below are correct.</h2>
			<h4>Title:<?=h($a['title'])?></h4>
			<h4>Date:<?=h($a['date'])?></h4>
			<h4><?=$category?></h4>
			<h4>Starting time:<?=h($a['starting_time'])?></h4>
			<h4><?=h($closing_time)?></h4>
			<h4>Place:<?=h($place_name)?></h4>
			<h4><?=h($capacity)?></h4>
			<h4>Detail:<?=h($a['detail'])?></h4>
			<h4>Map</h4>
			<img class="img-responsive events-pad" src="https://maps.googleapis.com/maps/api/staticmap?center=<?=h($lat)?>%2C<?=h($lng)?>&zoom=16&size=1000x600&key=AIzaSyDf24saS_c-qe8Qy4QPgVbTub1sJi02ov8&markers=<?=h($lat)?>%2C<?=h($lng)?>">
			<?php if ($pic0 !== ''): ?>
				<h4>Thumnail picture</h4>
			<?php endif; ?>

			<?=$pic0?>

			<?=$pic3?>
		</div>
		<form method="post">
			<div class="col-sm-8 col-md-8 col-lg-8 events-pad">
				<a href="">Rewrite</a>
					<button class="btn btn-cebroad" onclick="location.href=''" name="submit" type="submit">Submit</button>
			</div>
		</form>

	</div>
</div>