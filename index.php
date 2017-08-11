<!DOCTYPE html>
<?php require("_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(0,'topInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(0,'header'); ?>
	<div class="container">
		<div class="row">
			<div class="imgWrapper col-12 col-md-3">
				<img class="" src="http://via.placeholder.com/575x575" alt="">
			</div>
			<div class="text__wrapper col-12 col-md-9">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, culpa nulla hic velit. Nesciunt suscipit veniam, error omnis dolor exercitationem necessitatibus, soluta qui ipsum natus, blanditiis voluptatibus iusto asperiores beatae hic. Vitae explicabo illo ab hic, mollitia repellat atque libero eveniet iure commodi dolores, dignissimos laudantium harum assumenda iusto? Expedita debitis, est officia similique, illo eveniet earum vel. Est, aut quibusdam, ducimus veritatis quis libero neque voluptate quas inventore eaque ipsam aliquid repellat, aperiam non dolore in ea officiis molestias nihil. Blanditiis tempore, quod officiis assumenda cumque necessitatibus unde adipisci asperiores cupiditate perspiciatis doloribus voluptatem, alias mollitia praesentium expedita ut.</p>
			</div>
		</div>
		<div class="row">
			<div class="slideshow__tab slideshow__tab--1 col-12 col-sm-3 active" data-tab="1">Tab 1</div>
			<div class="slideshow__tab slideshow__tab--2 col-12 col-sm-3" data-tab="2">Tab 2</div>
			<div class="slideshow__tab slideshow__tab--3 col-12 col-sm-3" data-tab="3">Tab 3</div>
			<div class="slideshow__tab slideshow__tab--4 col-12 col-sm-3" data-tab="4">Tab 4</div>
			<div class="slideshow__slideContainer col-12">
				<div class="slideshow__slide slideshow__slide--1 active">
					<div class="row">
						<div class="slideshow__img col-12 col-sm-3">
							<img class="" src="https://unsplash.it/500" alt="">
						</div>
						<p class="col-12 col-sm-9"><strong>Slide 1 Caption:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos unde illum dignissimos incidunt repellat fuga magni quod, ipsum ut nam.</p>
					</div>
				</div>
				<div class="slideshow__slide slideshow__slide--2">
					<div class="row">
						<div class="slideshow__img col-12 col-sm-3">
							<img src="https://unsplash.it/g/500/500" alt="">
						</div>
						<p class="col-12 col-sm-9">Slide 2 Caption: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga eum qui tempore iste ipsam explicabo veritatis eius esse, ad provident!</p>
					</div>	
				</div>
				<div class="slideshow__slide slideshow__slide--3">
					<div class="row">
						<div class="slideshow__img col-12 col-sm-3">
							<img src="https://unsplash.it/500" alt="">
						</div>
						<p class="col-12 col-sm-9">Slide 3 Caption: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt accusamus dicta asperiores architecto minima! Mollitia est soluta aut dolores blanditiis.</p>
					</div>		
				</div>
				<div class="slideshow__slide slideshow__slide--4">
					<div class="row">
						<div class="slideshow__img col-12 col-sm-3">
							<img src="https://unsplash.it/g/500/500" alt="">
						</div>
						<p class="col-12 col-sm-9">Slide 4 Caption: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptas repellat nostrum enim unde vel minima ipsum fugit qui voluptatum!</p>
					</div>	
				</div>
			</div>
		</div> 
	</div>
	<? $globalFunction->includeContent(0,'footer'); ?>
	<? $globalFunction->includeContent(0,'botInc'); ?>
</body>
</html>