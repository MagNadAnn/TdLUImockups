<!DOCTYPE html>
<html>

<head>
    <title>Mixin de blocs - Guide UI</title>

<?php include 'guide-menu.php'; ?>

        <main class="UGmain">
            <section class="fw-section">
                <div class="UIpageheader vignette vignette_photo">
                    <h1 class="UItitle1">Mixin de blocs</h1>
                </div>
                <nav class="UIsommaire__wrap bg-l-pearl block_padding">
                    <h3 class="UItitle3">Sommaire</h3>
                    <ol class="UIsommaire">
                        <li><a href="#bg">Backgrounds</a></li>
                        <li><a href="#list">Listes</a></li>
                        <li><a href="#block_v">Forcer des modifications ponctuelles</a></li>
                        <li><a href="#"></a></li>
                    </ol>
                </nav>
                <div class="chimney small">
                    <div class="section__container">
                        <article class="UIarticle">
                            <p></p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="bg" class="UItitle2">Backgrounds</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <h4 class="UItitle4">Couleur</h4>
                            <p>Les arrières plans sont issus du nuancier développé pour les sites Terre de Liens.</p>
                            <p>Pour des objets non-interactifs sans effets de survol ou de click, il est conseillé de
                                n'utiliser que la teinte <em>light</em> de chaque couleur.</em></p>
                            <p>Les teintes dark sont en principe réservées aux états <em>hover</em> et <em>focus</em>.
                            </p>
                            <p>Les teintes bright est en principe réservées à l'état <em>active</em>.</p>
                            <h4 class="UItitle4">Trame</h4>
                            <p>Les trames doivent être accompagnées d'une couleur de fond afin de déterminer la couleur
                                de l'écriture par dessus.</p>
                            <p>Les trames doivent rester légères. C'est pourquoi les blanches sont destinées aux fonds
                                clairs et les noires aux fonds foncés.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="VwvOLYg"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Background color - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/VwvOLYg">
                                        Background color - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
<strong>Backgrounds bleu</strong>
bg-d-blue_light
bg-d-blue_dark
bg-d-blue_bright

<strong>Backgrounds vert</strong>
bg-d-green_light
bg-d-green_dark
bg-d-green_bright

<strong>Backgrounds rouge</strong>
bg-d-red_light
bg-d-red_dark
bg-d-red_bright

<strong>Backgrounds yellow</strong>
bg-d-yellow_light
bg-d-yellow_dark
bg-d-yellow_bright

<strong>Backgrounds autres couleurs</strong>
bg-d-charcoal
bg-l-white
bg-l-pearl
bg-l-cream

<strong>Backgrounds tramés</strong>
bg-trame_champs_light
bg-trame_champs_dark
<strong>+ un fond de couleur</strong></pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="list" class="UItitle2">Listes</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Une mixin qui transforme une liste en container flex horizontal sans puces.</p>
                            <p>Cette liste peut être ordonnée ou désordonnée, ça peut aussi être une <em>&lt;div&gt;</em> avec des <em>&lt;p&gt;</em>, ou toute autre structure de ce type.</p>
                            <p>La classe <strong class="text_color">list_v</strong> permet de passer la liste en format vertical</p>
                            <p class="block_padding bg-d-yellow_light">⚠️ Cette mixin est très utilisée dans ces feuilles de style : <a href="nav#menu">menus</a>, <a href="tile">tuiles</a>, <a href="small-components#tags">tags</a>...</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="list"</h3>
                            <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="css,result" data-user="MagNadAnn" data-slug-hash="VwvozBz" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="list  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/VwvozBz">
                                list  - TdL UI guide</a> by Margot Nadot (<a href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                on <a href="https://codepen.io">CodePen</a>.</span>
                                </p>
                                <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
list
list_v<em>*</em>

<em>* facultatif</em></pre>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="" class="UItitle2">Forcer des modifications ponctuelles</h2>
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
                                    <h3 class="UItitle3">Alignement vertical</h3>
                                    <p>à utiliser sur le container de ce qu'on veut positionner verticalement. Cela ne fonctionne que si ce container a une hauteur</p>
                                    <pre class="UIcode" title="Classes à utiliser">
block_v-center
block_v-bottom</pre>
                                </div>
                            </div>
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">Forcer la position relative</h3>
                                    <pre class="UIcode" title="Classes à utiliser">block_pos-relative</pre>
                                </div>
                            </div>
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">Modification du padding</h3>
                                    <pre class="UIcode" title="Classes à utiliser">
block_no-padding
block_padding</pre>
                                </div>
                            </div>
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">Enlever les contours</h3>
                                    <pre class="UIcode" title="Classes à utiliser">block_no-border</pre>
                                </div>
                            </div>
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">Modification des margin</h3>
                                    <pre class="UIcode" title="Classes à utiliser">
block_no-margin

block_margin-big-screens_left
block_margin-big-screens_right
<em class="text_mouse">Les deux mixins ci-dessus servent à faire des espacements
plus harmonieux sur les grands écrans lors de colonages
un peu spéciaux, comme <a href="maquettes/home">le paragraphe "Agriculture et
biodiversite" sur la maquette de la page d'accueil du Centre
de Ressources</a></em></pre>
                                </div>
                            </div>
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3"></h3>
                                    <pre class="UIcode" title="Classes à utiliser"></pre>
                                </div>
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
                            <pre class="UIcode" title="Structure HTML"></pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class=""</h3>
                                    <pre class="UIcode" title="Classes à utiliser"></pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>


        </main>
    </div>

</body>