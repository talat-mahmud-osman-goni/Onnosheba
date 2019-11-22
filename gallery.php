<?php
include 'header.php'; 
?>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1 style="font-size: 350%;">See <em>Our</em> Gallery</h1>
							<h2>Brought to you by <a target="_blank">onnosheba.com</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-gallery" class="fh5co-section">
		<div class="container ">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Our Gallery</h2>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery1.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery3.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/gallery/gallery2.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery4.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery5.jpg);" data-trigger="zoomerang"></div>
				</div>

				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery6.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery7.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery15.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery9.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/gallery/gallery8.jpg);" data-trigger="zoomerang"></div>
				</div>

				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery11.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery12.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/gallery/gallery10.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery14.png);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery/gallery13.png);" data-trigger="zoomerang"></div>
				</div>
			</div>
		</div>
	</div>

	<?php
		include 'footer.php'; 
	?>

	<script>
		Zoomerang
      .config({
        maxHeight: 600,
        maxWidth: 900,
        bgColor: '#000',
        bgOpacity: .85
      })
      .listen('[data-trigger="zoomerang"]')
	</script>

