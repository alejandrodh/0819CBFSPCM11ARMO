<?php
$productos = [
			0 => ["imagen" => "img-phone-01.jpg",
						"titulo" => "Nombre del Producto",
						"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
						"precio" => 1000,
			],
			1 => ["imagen" => "img-phone-02.jpg",
						"titulo" => "Nombre del Producto",
						"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
						"precio" => 1200,
						"oferta" => true,
			],
			2 => ["imagen" => "img-phone-03.jpg",
						"titulo" => "Nombre del Producto",
						"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
						"precio" => 990,
			],
			3 => ["imagen" => "img-phone-01.jpg",
						"titulo" => "Nombre del Producto",
						"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
						"precio" => 1450,
						"oferta" => true,
			],
			4 => ["imagen" => "img-phone-02.jpg",
						"titulo" => "Nombre del Producto",
						"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
						"precio" => 890,
			],
			5 => ["imagen" => "img-phone-03.jpg",
						"titulo" => "Nombre del Producto",
						"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
						"precio" => 1760,
			],

];


?>

<!DOCTYPE html>
<html>
	<?php include "partials/head.php" ?>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
			<?php include "partials/nav.php" ?>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->
					<?php foreach($productos as $producto) :?>
					<article class="producto"><!-- Contenedor de cada producto -->
						<img class="main-photo" src="img/<?= $producto["imagen"] ?>" alt="">
						<h2 class="name"><?= $producto["titulo"] ?></h2>
						<p><?= $producto["descripcion"] ?></p>
						<p>Precio: $<?= $producto["precio"] ?></p>
						<a class="more" href="#">ver más</a>
					</article>
				<?php endforeach ?>
				</section>
				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		</div>

	</body>
</html>
