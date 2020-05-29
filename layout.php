<!DOCTYPE html>
<html>

<head>
    <title>Layout - Guide UI</title>
    
<?php include 'guide-menu.php'; ?>

        <main class="UGmain">
            <section class="fw-section">
                <div class="UIpageheader vignette vignette_photo">
                    <h1 class="UItitle1">Layout</h1>
                </div>
                <nav class="UIsommaire__wrap bg-l-pearl block_padding">
                    <h3 class="UItitle3">Sommaire</h3>
                    <ol class="UIsommaire">
                        <li><a href="#structure">Structure générale</a></li>
                        <li><a href="#section">Sections</a></li>
                        <li><a href="#chimney">Cheminées</a></li>
                        <li><a href="#column">Colonnes</a></li>
                        <li><a href="#aside">Panneau latéral</a></li>
                        <li><a href="#responsive-exceptions">Big and small screen exclusivities</a></li>
                        <li><a href="#"></a></li>
                    </ol>
                </nav>
                <div class="chimney small">
                    <div class="section__container">
                        <article class="UIarticle">
                            <p>Evidemment, il sera certainement plus intéressant de récupérer les éléments de layout de
                                votre framework CSS.</p>
                            <p>Pour concevoir les maquettes de manière agnostique, une architecture la plus simple
                                possible a tout de même été conçue.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="structure" class="UItitle2">Structure générale</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Le but du traitement de la balise body et de la classe <strong>site-wrap</strong> est de
                                ménager une base stable et saine pour le layout.</p>
                            <ul>
                                <li>La balise <strong>&lt;nav class=&quot;main-nav-site&quot;&gt;</strong> qui contient les 3 barres de menus en haut de la page</li>
                                <li>La balise <strong>&lt;main&gt;</strong> qui contient le contenu original de la page.</li>
                                <li>La balise <strong>&lt;footer class=&quot;footer-site&quot;&gt;</strong> qui contient classiquement le footer, c'est à dire 2 barres de menu, l'une contextuelle en fonction des sites, l'autre inter-sites.</li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html"
                                data-user="MagNadAnn" data-slug-hash="LYpoagN"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="body and site-wrap  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/LYpoagN">
                                        body and site-wrap - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classe à utiliser">
site
main-nav-site
tpl_main-nav
footer-site</pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="section" class="UItitle2">Sections</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>La plus utilisée est la classe <strong>fw-section</strong> (<strong>F</strong>ull
                                <strong>W</strong>idth section).</p>
                            <p>Son objet est de découper les pages et objets en section occupant 100% de la largeur
                                disponible dans son contenant.</p>
                            <p>Elle sert notamment de support aux <a href="hero">heros</a> et aux <a
                                    href="button#CTA">call to action</a>.</p>
                            <h4 class="UItitle4">Container</h4>
                            Afin d'avoir pour toutes les sections des marges et des comportements homogènes, il est
                            conseiller d'utiliser à l'intérieur la classe <strong>section__containe</strong></strong>
                            <h4 class="UItitle4">full height section</h4>
                            <p>On peut aussi ajouter la classe <strong>fh-section</strong>pour créer des sections qui
                                font la même hauteur que l'espace visible de la page.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html"
                                data-user="MagNadAnn" data-slug-hash="xxwNewE"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="section - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/xxwNewE">
                                        section - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
fw-section
fh-section
section__container</pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="chimney" class="UItitle2">Cheminées</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Pour accueillir des contenus qui n'occupent pas toute la largeur disponible, notamment le
                                contenu des pages, des articles, des ressources...</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="chimney"</h3>
                            <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="QWjRPEP"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Cheminées - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/QWjRPEP">
                                        Cheminées - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
chimney
small
x-small
fluid</pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="column" class="UItitle2">Colonnes</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Des colonnes souples et responsives.</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;div class=&quot;columns&quot;&gt;
    &lt;div class=&quot;column column_1-2&quot;&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="JjYQWMW"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Colonnes - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/JjYQWMW">
                                        Colonnes - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classe à utiliser">
columns
column

column_1-2
column_1-3
column_2-3
column_1-4
column_3-4
column_1-5
column_2-5
column_3-5
column_4-5
...</pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="aside" class="UItitle2">Panneau latéral</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Ce système permet d'afficher un panneau contextuel, contenant par exemple un menu de
                                filtres.</p>
                            <p>Il utilise le composant d'affichange temporaire <a href="temp#popin">popin</a> dans sa
                                version <strong>small-screens</strong> uniquement.</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;div class=&quot;<strong>aside</strong>&quot;&gt;
    &lt;div class=&quot;<strong>aside__panel is-visible left</strong> <a href="temp#popin">popin popin_small-screens</a>&quot;&gt;
        &lt;div class=&quot;<strong>aside__trigger</strong>&quot;&gt;
            &lt;button class=&quot;<a href="button">button</a>&quot;&gt;
        &lt;div class=&quot;<strong>aside__panel__container</strong> <a href="temp#popin">popin__container</a>&quot;&gt;
        &lt;div class=&quot;<a href="temp#popin">popin__close</a>&quot;&gt;
            &lt;div class=&quot;<strong>aside__panel__content</strong> <a href="temp#popin">popin__veil</a>&quot;&gt;
    &lt;div class=&quot;<strong>aside__leftover-space</strong>&quot;&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="ZEbdKyy"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Aside  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/ZEbdKyy">
                                        Aside - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="GRpbEvN"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Aside  visible - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/GRpbEvN">
                                        Aside visible - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                            <pre class="UIcode" title="Classe à utiliser">
aside
aside__panel + left/right + (is-visible) + popin + popin_small-screens
aside__trigger
aside__panel__container
aside__panel__content
aside__leftover-space</pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="responsive-exceptions" class="UItitle2">Big and small screen exclusivities</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Outil de layout responsive pour faire disparaître des éléments inutiles ou gênant en
                                version mobile ou desktop.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result"
                                data-user="MagNadAnn" data-slug-hash="ZEbdxoV"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Big and small screen exclusivities - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/ZEbdxoV">
                                        Big and small screen exclusivities - TdL UI guide</a> by Margot Nadot
                                    (<a href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classe à utiliser"></pre>
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