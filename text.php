<!DOCTYPE html>
<html>

<head>
    <title>Styles de texte - Guide UI</title>

<?php include 'guide-menu.php'; ?>

        <main class="UGmain">
            <section class="fw-section">
                <div class="UIpageheader vignette vignette_photo">
                    <h1 class="UItitle1">Styles de texte</h1>
                </div>
                <nav class="UIsommaire__wrap bg-l-pearl block_padding">
                    <h3 class="UItitle3">Sommaire</h3>
                    <ol class="UIsommaire">
                        <li><a href="#base">Styles de base</a></li>
                        <li><a href="#mixin-text">Mixins de texte</a></li>
                        <li><a href="#list_simple">Liste simple améliorée</a></li>
                        <li><a href="#text_columns">Texte en colonne</a></li>
                        <li><a href="#"></a></li>
                        
                    </ol>
                </nav>

                <div class="chimney small">
                    <div class="section__container">
                        <article class="UIarticle">
                            <p>Tout ce qu'il faut pour mettre en forme sobrement des contenus texte.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="base" class="UItitle2">Styles de base</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Les éléments de base ont été stylés de façon la plus légre possible afin de premettre
                                d'en faire une base solide et stable au reste du CSS, et de pouvoir être utilisé sans
                                ajout de classe dans le corps des pages.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_3-4">
                                <div class="bg-l-pearl block_padding">
                                    <p class="codepen" data-height="1000" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="oNjRjXX"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="base - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/oNjRjXX">
                                                base - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Classes à utiliser">
p
a
h1, h2, h3, h4, h5, h6
ul, ol
blockquote, cite</pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="mixin-text" class="UItitle2">Mixins de texte</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Elles permettent de faire de petite corrections de mise en forme ponctuelles sans toucher
                                au CSS global et créer de nouvelles classes.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="text_size"</h3>
                                    <p class="codepen" data-height="265" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="xxwNLQP"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Text little - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/xxwNLQP">
                                                Text little - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Classes à utiliser">
text_size

x-small
small
large
x-large</pre>
                                </div>
                            </div>
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">Text color</h3>
                                    <p>La classe a privilégier est <strong>text_color</strong> qui est plus résiliente.
                                    </p>
                                    <p>Les autres classes sont mises à disposition au cas où il faudrait faire
                                        co-exister plusieurs couleurs (par exemple dans un tableau).</p>
                                    <p class="codepen" data-height="300" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="YzybxMR"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Text colors">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/YzybxMR">
                                                Text colors</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Classes à utiliser">
text_color
text_green
text_blue
text_red
text_yellow

text_charcoal
text_cream
text_pearl
text_white</pre>
                                </div>
                            </div>
                            <div class="column column_1-1">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">Text align</h3>
                                    <p>Sur mobile, <em>text_left</em> et <em>text_right</em> sont annulées pour revenir
                                        à leur alignement hérité (souvent le centrage) pour s'adapter élégamment à la
                                        mise en une seule colonne.</p>
                                    <p class="codepen" data-height="265" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="QWjRMXy"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Text align - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/QWjRMXy">
                                                Text align - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Classes à utiliser">
text_left
text_center
text_right</pre>
                                </div>
                            </div>
                            
                            <div class="column column_1-1">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="text_on-photo"</h3>
                                    <p>Mise en scène ici dans un <a href="hero.html">hero</a>.</p>
                                    <p class="codepen" data-height="265" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="xxwNXbj"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Text on photo - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/xxwNXbj">
                                                Text on photo - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Classes à utiliser">
text_on-photo</pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="list_simple" class="UItitle2">Listes simples améliorées</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Les puces sont tirées des pictogrammes de <a href="https://fontawesome.com">Font Awesome</a> et sont prévues en teintes <em>charcoal</em> et <em>white</em>. Disponible en SVG, il est assez facile de les décliner en d'<a href="#text_color">autres couleurs de la charte</a>.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                        <p class="codepen" data-height="400" data-theme-id="default" data-default-tab="html,result" data-user="MagNadAnn" data-slug-hash="QWjeqaj" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="list simple - TdL UI guide">
                            <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/QWjeqaj">
                            list simple - TdL UI guide</a> by Margot Nadot (<a href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        <pre class="UIcode" title="Classes à utiliser">
list-simple_arrow
list-simple_long-arrow
list-simple_double-arrow</pre>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="text_columns" class="UItitle2">Texte en colonnes</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Classes <strong class="text_color">text_columns_2</strong> ou <strong class="text_color">text_columns_3</strong> pour entourer le texte à répartir en colonnes sur les grands écrans</p>
                            <p>⚠️ ne pas utiliser sur des sections de texte trop longue : il ne faut pas que l'internaute ait à re-scroller vers le haut pour remonter en haut de la deuxième colonne.
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="text_columns"</h3>
                            <p class="codepen" data-height="700" data-theme-id="default" data-default-tab="result" data-user="MagNadAnn" data-slug-hash="dyYxZOB" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="text columns  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/dyYxZOB">
                                text columns  - TdL UI guide</a> by Margot Nadot (<a href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                on <a href="https://codepen.io">CodePen</a>.</span>
                                </p>
                                <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
text_columns_2
text_columns_3</pre>
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