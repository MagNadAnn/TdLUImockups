<!DOCTYPE html>
<html>

<head>
    <title>Tuiles - Guide UI</title>

<?php include 'guide-menu.php'; ?>

        <main class="UGmain">
            <section class="fw-section">
                <div class="UIpageheader vignette vignette_photo">
                    <h1 class="UItitle1">Tuiles</h1>
                </div>
                <nav class="UIsommaire__wrap bg-l-pearl block_padding">
                    <h3 class="UItitle3">Sommaire</h3>
                    <ol class="UIsommaire">
                        <li><a href="#tiles">Liste de tuiles</a></li>
                        <li><a href="#tile_image">Tuile image</a></li>
                        <li><a href="#tile_text-image">Tuile text-image</a></li>
                        <li><a href="#tile_hero">Tuile(s) dans un hero</a></li>
                        <li><a href="#tile_icon-label">Tuile icon-label</a></li>
                    </ol>
                </nav>
                <div class="chimney small">
                    <div class="section__container">
                        <article class="UIarticle">
                            <p>Les tuiles sont une façon élégante et souvent imagée de mettre en valeur un lien vers une
                                autre page, en complément des <a href="button">liens, boutons et call to
                                    action</a>.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="tiles" class="UItitle2">Liste de tuile</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Une liste de tuile utilise <a href="list">les mixins list</a> :
                                <strong>list</strong> à minima et <strong>list_v</strong> pour une liste verticale.</p>
                            <h4 class="UItitle4">Composition d'une tuile</h4>
                            <ul>
                                <li>Chaque tuile est identifiée a minima par la classe <strong>tile</strong>.</li>
                                <li>Elle peut aussi comporter une classe de taille (<strong>tile_1-2</strong>,
                                    <strong>tile_1-3</strong> etc.)</li>
                                <li>Une tuile contient obligatoirement un lien (<strong>tile__link</strong>) qui
                                    enveloppe le
                                    reste.</li>
                                <li>Selon les modèles, une tuile peut contenir un titre, une intro, une vignette, un
                                    bouton
                                    <em>read more</em>. Pour plus de détail, voir les différents modèles de tuile
                                    ci-après.
                                </li>
                            </ul>
                            <pre class="UIcode" title="Structure HTML">
&lt;ul class=&quot;<a href="list">list</a> <strong>tiles</strong>&quot;&gt;
    &lt;li class=&quot;<strong>tile</strong>&quot;&gt;
        &lt;a class=&quot;<strong>tile__link</strong>&quot;&gt;
            &lt;div class=&quot;<a href="vignette">vignette</a>&quot;&gt;<em>*</em>
            &lt;div class=&quot;<strong>tile__content</strong>&quot;&gt;
                &lt;p class=&quot;<strong>tile__pre-title</strong>&quot;&gt;<em>*</em>
                &lt;p class=&quot;<strong>tile__title</strong>&quot;&gt;<em>**</em>
                &lt;div class=&quot;<strong>tile__intro</strong>&quot;&gt;<em>*</em>
                &lt;p class=&quot;<a href="button">button__wrap</a>&quot;&gt;<em>*</em>
                    &lt;span class=&quot;<a href="button#button_read-more">button button_round small warning button_read-more</a>&quot;&gt;<em>*</em>

<em>* factultatif</em>
<em>** p ou h4 en fonction de l'effet recherché, de la taille des tuiles...</em></pre>
                            <h4 class="UItitle4">Vignette, tags etc.</h4>
                            <p>Sur les tuiles avec vignette, celles-ci jouent un rôle important pour afficher des tags.
                                Se référer aux composants <a href="vignette">vignette</a> et au composant <a
                                    href="tag">tag</a>.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="tiles list"</h3>
                            <p class="codepen" data-height="400" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="rNOPppd"
                                style="height: 265; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="tiles - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/rNOPppd">
                                        tiles - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser pour la liste">
list
list_v (optionnel)
tiles</pre>
                            <pre class="UIcode" title="Classes à utiliser pour les tuiles">
tile
tile_1-2, tile_1-3, tile_2-3, tile_1-4, tile_3-4
tile__link
tile__content
tile__title
tile__intro</pre>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="" class="UItitle2">Tuiles image</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Les tuiles image servent à mettre en valeur les propositions éditoriales fortes des sites
                                de Terre de Liens.</p>
                            <p>On les utilise sur les pages importantes comme la page d'accueil, en ouverture vers des
                                contenus selectionnés, en rapport avec la page où elles sont situées, généralement sur
                                une seule ligne.</p>
                            <p>On ne les utilise pas au sein de grandes listes. Pour cet usage on préfèrera les tuile <a
                                    href="#tile_text-image">texte-image</a>.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="tile tile_image"</h3>
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="rNOoVrO"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="tile - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/rNOoVrO">
                                        tile - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
tile
tile_image
vignette, tags, crédit...
tile__container ⚠️ classe propre à ce type de tuile
tile__content
tile__title
tile__intro
button read-more</pre>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="tile_text-image" class="UItitle2">Tuiles Text-média</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Elle existent en format vertical ou horizontal en fonction de besoin de mise en page, de
                                la largeur disponible, du nombre de tuiles à afficher...</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="tile tile_text-image_h"</h3>
                            <p class="codepen" data-height="700" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="oNjmGgN"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="tile text-media - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/oNjmGgN">
                                        tile text-media - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="tile tile_text-image_v"</h3>
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="OJydxdZ"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="tile text-media_h - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/OJydxdZ">
                                        tile text-media_h - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
tile
tile_text-image_v ou tile_text-image_h
vignette, tags, crédit...
tile__content
tile__title
tile__intro
button read-more</pre>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="tile_hero" class="UItitle2">Tuile(s) dans un hero</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>La Tuile hero est en fait une simplification de la tuile image, qui ne garde que le texte
                                et le bouton read-more.</p>
                            <p>On peut en afficher une seule ou bien plusieurs à l'intérieur d'une class
                                <strong>tiles</strong></p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="tile tile_hero" avec 1 tuile</h3>
                            <p class="codepen" data-height="600" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="NWGowrJ"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="tile hero - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/NWGowrJ">
                                        tile hero - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title=""></pre>
                            <div class="bg-l-pearl block_padding">
                                <h3 class="UItitle3">class="tile tile_hero" avec 2 tuiles</h3>
                                <p class="codepen" data-height="800" data-theme-id="default" data-default-tab="result"
                                    data-user="MagNadAnn" data-slug-hash="qBOgVrj"
                                    style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                    data-pen-title="tile hero x3 - TdL UI guide">
                                    <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/qBOgVrj">
                                            tile hero x3 - TdL UI guide</a> by Margot Nadot (<a
                                            href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                        on <a href="https://codepen.io">CodePen</a>.</span>
                                </p>
                                <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                <pre class="UIcode" title="Classes à utiliser">
tile
tile_hero
tile__content
tile__title
tile__intro
button read-more
                                </pre>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="tile_icon-label" class="UItitle2">Tuiles icon-label</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Petite tuile simple utile pour donner accès à des ressources, des sites, des pages ou des
                                applis (comme dans le <a href="menu">lanceur d'appli).</a></p>
                            <p>À gauche, on peut utiliser une icon Font Awesome ou bien une petite image.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_3-4">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="tile tile_icon-label"</h3>
                                    <p class="codepen" data-height="400" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="RwWvxwd"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="tile icon-label - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/RwWvxwd">
                                                tile icon-label - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Classes à utiliser">
tile
tile_icon-label
tile__icon ⚠️ classe propre à ce type de tuile
tile__content
tile__title
tile__intro
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="" class="UItitle2"></h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p></p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class=""</h3>
                                    <pre class="UIcode" title=""></pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

        </main>
    </div>

</body>