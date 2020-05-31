<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Liste des ressources - Centre de ressource Terre de Liens</title>
	<?php include 'maquettes-menu.php'; ?>
		<?php include 'header-site_shrinked.php'; ?>
			<section class="fw-section page-header">
				<div class="section__container page-header__container">
					<div class="chimney">
						<ul class="list breadcrumb">
							<li> <a href="#" class="breadcrumb__link"><i class="fas fa-home"></i></a> </li>
							<li> <a href="#" class="breadcrumb__link">Comprendre</a> </li>
							<li> <span href="#" class="breadcrumb__link">Toutes les ressources</span> </li>
						</ul>
					</div>
					<div class="chimney small">
						<h1 class="page__title">Toutes les ressources</h1>
						<h5 class="page__subtitle">1 238 documents disponibles</h5> </div>
				</div>
			</section>
			<div class="fw-section aside">
				<div class="aside__panel left popin popin_small-screens is-visible">
					<div class="aside__trigger">
						<button class="button basic primary number-sticker-wrap"> <span class="button__icon"><i class="fas fa-filter"></i></span> <span class="number-sticker">3</span> </button>
					</div>
					<div class="aside__panel__container popin__container">
						<div class="popin__close">
							<button class="button round small primary"> <span class="button__icon"><i class="fas fa-times"></i></span> </button>
						</div>
						<div class="aside__panel__content popin__content">
							<div class="panel">
								<form class="form small text_white">
									<section class="panel__header panel__title">
										<h4>Filtres</h4>
										<input type="button" value="Effacer" class="button basic x-small secundary"> </section>
									<section class="panel__section is-expanded">
										<div class="panel__header">
											<h6>Type de ressources</h6>
											<button class="button icon x-small secundary expand"><i class="fas fa-chevron-up"></i></button>
										</div>
										<div class="panel__content">
											<fieldset class="form-fieldset block_no-border block_no-padding">
												<div class="form-check-wrap">
													<input type="checkbox" class="form-input form-check" id="u_util_typederessources_alias0">
													<label class="form-check__label" for="u_util_typederessources_alias0">Infographies et schémas</label>
												</div>
												<div class="form-check-wrap">
													<input type="checkbox" class="form-input form-check" id="u_util_typederessources_alias1">
													<label class="form-check__label" for="u_util_typederessources_alias1">Publications périodiques</label>
												</div>
												<div class="form-check-wrap">
													<input type="checkbox" class="form-input form-check" id="u_util_typederessources_alias2">
													<label class="form-check__label" for="u_util_typederessources_alias2">Fiches mémo</label>
												</div>
											</fieldset>
										</div>
									</section>
									<section class="panel__section">
										<div class="panel__header">
											<h6>Editeur</h6> </div>
										<div class="panel__content">
											<div class="form-line tight">
												<label class="form-label form-label_top" for="type-select">Sélectionner un éditeur</label>
												<div class="form-field form-select">
													<button class="form-select__arrow"><i class="fas fa-chevron-down" aria-hidden="true"></i></button>
													<input class="form-select__prompt" type="text" autocomplete="off" placeholder="Sélectionner un type de document">
													<div class="form-select__drop">
														<ul class="form-select__option__list">
															<li class="form-select__option__item">Type 1</li>
															<li class="form-select__option__item">Type 2</li>
															<li class="form-select__option__item">Type 3</li>
															<li class="form-select__option__item">Type 4</li>
															<li class="form-select__option__item">Type 5</li>
															<li class="form-select__option__item">Type 2</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section class="panel__section">
										<div class="panel__header">
											<h6>Thème</h6> </div>
										<div class="panel__content">
											<div class="form-line">
												<label class="form-label form-label_top" for="type-select">Sélectionner un thème</label>
												<div class="form-field form-select">
													<button class="form-select__arrow"><i class="fas fa-chevron-down" aria-hidden="true"></i></button>
													<input class="form-select__prompt" type="text" autocomplete="off" placeholder="Sélectionner un type de document">
													<div class="form-select__drop">
														<ul class="form-select__option__list">
															<li class="form-select__option__item">Type 1</li>
															<li class="form-select__option__item">Type 2</li>
															<li class="form-select__option__item">Type 3</li>
															<li class="form-select__option__item">Type 4</li>
															<li class="form-select__option__item">Type 5</li>
															<li class="form-select__option__item">Type 2</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="form-line">
												<label class="form-label form-label_top" for="type-select">Sélectionner un truc</label>
												<div class="form-field form-select">
													<button class="form-select__arrow"><i class="fas fa-chevron-down" aria-hidden="true"></i></button>
													<ul class="list tags">
														<li> <span class="tag"><span>Accueil paysan</span><a class="button icon tight small primary"><span class="button__icon"><i class="fal fa-times" aria-hidden="true"></i></span></a></span>
														</li>
														<li class="form-item_select__prompt__wrap">
															<input class="form-select__prompt" type="text" autocomplete="off" placeholder="Sélectionner un type de document"> </li>
													</ul>
													<div class="form-select__drop">
														<ul class="form-select__option__list">
															<li class="form-select__option__item">Type 1</li>
															<li class="form-select__option__item">Type 2</li>
															<li class="form-select__option__item">Type 3</li>
															<li class="form-select__option__item">Type 4</li>
															<li class="form-select__option__item">Type 5</li>
															<li class="form-select__option__item">Type 2</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="form-line text_center">
												<input class="form-button button basic secundary" type="button" value="search"> </div>
										</div>
									</section>
								</form>
							</div>
						</div>
					</div>
					<button class="popin__veil"></button>
				</div>
				<div class="aside__leftover-space">
					<div class="fw-section bg-l-pearl">
						<div class="chimney">
							<div class="section__container">
								<h4 class="text_center"><span class="text_color">156</span> résultat(s) :</h4>
								<ul class="list tiles">
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/photo_02_4-3_600.jpg" class="vignette__image" /> </div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-book-open"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
												</ul>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
											</div>
											<div class="tile__content">
												<p class="tile__title">La bergerie de Villelongue dels Monts (66)</p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/vignette_01_4-3.JPG" class="vignette__image" /> </div>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-volume"></i></li>
													<li class="tag tag_icon"><i class="fas fa-chart-network"></i></li>
												</ul>
											</div>
											<div class="tile__content">
												<p class="tile__title">L’animation foncière à Saint-André (66)</p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/photo_01_4-3_600.jpg" class="vignette__image" /> </div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-file-pdf"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
												</ul>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
											</div>
											<div class="tile__content">
												<p class="tile__title">Monographie du GFA Socié'Terres de la Vallée de l'Oust </p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette">
												<div class="vignette__image-wrap vignette__ratio_4-3"></div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-play"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
													<li class="tag">Structure ressource</li>
												</ul>
											</div>
											<div class="tile__content">
												<p class="tile__title">La politique agricole et foncière de Ventalon en Cévennes (48) </p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/photo_01_4-3_600.jpg" class="vignette__image" /> </div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-file-pdf"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
												</ul>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
											</div>
											<div class="tile__content">
												<p class="tile__title">Monographie du GFA Socié'Terres de la Vallée de l'Oust </p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette">
												<div class="vignette__image-wrap vignette__ratio_4-3"></div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-play"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
													<li class="tag">Structure ressource</li>
												</ul>
											</div>
											<div class="tile__content">
												<p class="tile__title">La politique agricole et foncière de Ventalon en Cévennes (48) </p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/photo_02_4-3_600.jpg" class="vignette__image" /> </div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-book-open"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
												</ul>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
											</div>
											<div class="tile__content">
												<p class="tile__title">La bergerie de Villelongue dels Monts (66)</p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/vignette_01_4-3.JPG" class="vignette__image" /> </div>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-volume"></i></li>
													<li class="tag tag_icon"><i class="fas fa-chart-network"></i></li>
												</ul>
											</div>
											<div class="tile__content">
												<p class="tile__title">L’animation foncière à Saint-André (66)</p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/photo_02_4-3_600.jpg" class="vignette__image" /> </div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-book-open"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
												</ul>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
											</div>
											<div class="tile__content">
												<p class="tile__title">La bergerie de Villelongue dels Monts (66)</p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/vignette_01_4-3.JPG" class="vignette__image" /> </div>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-volume"></i></li>
													<li class="tag tag_icon"><i class="fas fa-chart-network"></i></li>
												</ul>
											</div>
											<div class="tile__content">
												<p class="tile__title">L’animation foncière à Saint-André (66)</p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/photo_01_4-3_600.jpg" class="vignette__image" /> </div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-file-pdf"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
												</ul>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
											</div>
											<div class="tile__content">
												<p class="tile__title">Monographie du GFA Socié'Terres de la Vallée de l'Oust </p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette">
												<div class="vignette__image-wrap vignette__ratio_4-3"></div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-play"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
													<li class="tag">Structure ressource</li>
												</ul>
											</div>
											<div class="tile__content">
												<p class="tile__title">La politique agricole et foncière de Ventalon en Cévennes (48) </p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/photo_01_4-3_600.jpg" class="vignette__image" /> </div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-file-pdf"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
												</ul>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
											</div>
											<div class="tile__content">
												<p class="tile__title">Monographie du GFA Socié'Terres de la Vallée de l'Oust </p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette">
												<div class="vignette__image-wrap vignette__ratio_4-3"></div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-play"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
													<li class="tag">Structure ressource</li>
												</ul>
											</div>
											<div class="tile__content">
												<p class="tile__title">La politique agricole et foncière de Ventalon en Cévennes (48) </p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/photo_02_4-3_600.jpg" class="vignette__image" /> </div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-book-open"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
												</ul>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
											</div>
											<div class="tile__content">
												<p class="tile__title">La bergerie de Villelongue dels Monts (66)</p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/vignette_01_4-3.JPG" class="vignette__image" /> </div>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-volume"></i></li>
													<li class="tag tag_icon"><i class="fas fa-chart-network"></i></li>
												</ul>
											</div>
											<div class="tile__content">
												<p class="tile__title">L’animation foncière à Saint-André (66)</p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/photo_02_4-3_600.jpg" class="vignette__image" /> </div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-book-open"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
												</ul>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
											</div>
											<div class="tile__content">
												<p class="tile__title">La bergerie de Villelongue dels Monts (66)</p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/vignette_01_4-3.JPG" class="vignette__image" /> </div>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-volume"></i></li>
													<li class="tag tag_icon"><i class="fas fa-chart-network"></i></li>
												</ul>
											</div>
											<div class="tile__content">
												<p class="tile__title">L’animation foncière à Saint-André (66)</p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette photo">
												<div class="vignette__image-wrap vignette__ratio_4-3"> <img src="../img/vignettes/photo_01_4-3_600.jpg" class="vignette__image" /> </div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-file-pdf"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
												</ul>
												<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
											</div>
											<div class="tile__content">
												<p class="tile__title">Monographie du GFA Socié'Terres de la Vallée de l'Oust </p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
									<li class="tile tile_text-image_v tile_1-4">
										<a class="tile__link">
											<div class="vignette">
												<div class="vignette__image-wrap vignette__ratio_4-3"></div>
												<ul class="tags list bottom right text_on-photo">
													<li class="tag tag_icon"><i class="fas fa-play"></i></li>
												</ul>
												<ul class="tags list list_v">
													<li class="tag">Fiches expériences</li>
													<li class="tag">Structure ressource</li>
												</ul>
											</div>
											<div class="tile__content">
												<p class="tile__title">La politique agricole et foncière de Ventalon en Cévennes (48) </p>
												<p class="button__wrap"> <span class="button round small warning read-more">
              <span class="button__icon"><i class="fas fa-arrow-right"></i></span> </span>
												</p>
											</div>
										</a>
									</li>
								</ul>
								<ul class="list pagination">
									<li> <span class="pagination__link pagination__keyword">Début</span> </li>
									<li> <span class="pagination__link pagination__keyword">Précédent</span> </li>
									<li> <span class="pagination__link is-active">1</span> </li>
									<li> <a href="#" class="pagination__link">2</a> </li>
									<li> <a href="#" class="pagination__link">3</a> </li>
									<li> <span class="pagination__link">...</span> </li>
									<li> <a href="#" class="pagination__link">10</a> </li>
									<li> <a href="#" class="pagination__link">11</a> </li>
									<li> <a href="#" class="pagination__link">12</a> </li>
									<li> <a href="#" class="pagination__link pagination__keyword">Suivant</a> </li>
									<li> <a href="#" class="pagination__link pagination__keyword">Fin</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="fw-section hero">
				<div class="vignette photo">
					<div class="vignette__image-wrap"> <img src="../img/vignettes/photo_06_bandeau_1920.jpg" class="vignette__image"> </div>
					<p class="vignette__credit">Crédit photo Jeanne Cianovitch</p>
					<ul class="tags x-large">
						<li class="tag warning"><i class="fas fa-heart" aria-hidden="true"></i> Le dossier du mois</li>
					</ul>
				</div>
				<div class="hero__container section__container">
					<div class="chimney x-small">
						<div class="tile tile_hero">
							<a class="tile__link tile__content">
								<h4 class="tile__title">Arpenter 1 - Evaluer l'utilité sociale et environnementale</h4>
								<div class="tile__intro">
									<p>La collection Arpenter est une publication de la Mission Utilité sociale et environnementale (MUSE) de Terre de Liens. Cette dynamique...</p>
                                </div>
                                <span class="button round small warning read-more"><span class="button__icon"><i class="fas fa-arrow-right" aria-hidden="true"></i></span> </span>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="fw-section CTA bg-d-blue_light">
				<div class="chimney">
					<div class="section__container CTA__container">
						<h3 class="CTA__title">Soyez au courant des dernières publications !</h3>
						<div class="CTA__content">
							<p>Incrivez-vous à notre newsletter et ne ratez pas une publication.</p>
							<h6>Vous restez informé·e, nous restons motivé·e·s !</h6> </div>
						<form class="form tight text_white">
							<div class="form-line list">
								<div class="form-line__item_field">
									<label class="form-label form-label_top" for="search">Votre adresse email</label>
									<input class="form-input form-field" placeholder="Saisir votre adresse email..." name="search"> </div>
								<div class="form-line__item form-line__item_button">
									<button class="form-button button basic primary"> <span class="button__label">S'inscrire</span> </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
			<section class="fw-section CTA CTA_rapport bg-l-cream bg-trame_champs_light">
				<div class="chimney">
					<div class="section__container">
						<div class="columns">
							<div class="column column_1-5">
								<div class="block_v-center">
									<div class="vignette photo solo"> <img src="../img/illustrations/rapport.jpg" class="vignette__image"> </div>
								</div>
							</div>
							<div class="column column_1-2">
								<div class="block_v-center">
									<h2 class="CTA__title text_left">Télécharger notre dernier<br>rapport annuel !</h2>
									<div class="CTA__content text_left">
										<p>Notre rapport 2019 vous offre une vision unique Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
									</div>
									<p class="button__wrap text_left">
										<a href="#" class="button basic primary"> <span class="button__icon"><i class="fas fa-download" aria-hidden="true"></i></span> <span class="button__label">Télécharger</span> </a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php include 'maquettes-footer.php'; ?>