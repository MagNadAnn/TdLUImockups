<!DOCTYPE html>
<html>

<head>
    <title>Navigations - Guide UI</title>

<?php include 'guide-menu.php'; ?>

        <main class="UGmain">
            <section class="fw-section">
                <div class="UIpageheader vignette vignette_photo">
                    <h1 class="UItitle1">Navigations</h1>
                </div>
                <nav class="UIsommaire__wrap bg-l-pearl block_padding">
                    <h3 class="UItitle3">Sommaire</h3>
                    <ol class="UIsommaire">
                        <li><a href="#menu">Menus</a></li>
                        <li><a href="#main-nav">Navigation principale</a></li>
                        <li><a href="#header-site">Header</a></li>
                        <li><a href="#footer-site">Footer</a></li>
                        <li><a href="#pagination">Pagination</a></li>
                        <li><a href="#breadcrumbs">Fil d'ariane</a></li>
                        <li><a href="#panel">Panneaux de menu</a></li>
                    </ol>
                </nav>
                <div class="chimney small">
                    <div class="section__container">
                        <article class="UIarticle">
                            <div class="page__intro">
                                <p>Les éléments présentés ici on été produits à partir des zonings des 3 sites.</p>
                                <p>Cependant les éléments du menu de navigation principale et du header du site doivent être
                                    adaptés en fonction des besoins.</p>
                                </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="menu" class="UItitle2">Menus</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Avant de présenter la navigation principale et le footer, voici le composant
                                <strong>menu</strong> qui en est une pièce importante.</p>
                            <p>Tous les menus des barre de navigation et du footer sont basés dessus et ont si besoin
                                une classe spéciale supplémentaire : <strong>menu-connexion</strong>,
                                <strong>menu-site</strong>...</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;ul class=&quot;<strong>menu</strong>&quot;&gt;
    &lt;li&gt;
        &lt;a class=&quot;<strong>menu__link</strong>&quot;&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="menu"</h3>
                            <p class="codepen" data-height="150" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="zYvgjRG"
                                style="height: 150px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="menu  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/zYvgjRG">
                                        menu - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser"></pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="main-nav" class="UItitle2">Navigation principale</h2>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="350" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="RwWXyVg"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Navigation principale - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/RwWXyVg">
                                        Navigation principale - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="1000" data-theme-id="default" data-default-tab="html,result"
                                data-user="MagNadAnn" data-slug-hash="RwWXyVg"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Navigation principale - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/RwWXyVg">
                                        Navigation principale - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3" id="launcher">Lanceur d'appli</h3>
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="result" data-user="MagNadAnn" data-slug-hash="dyYxawg" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="lanceur d'appli - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/dyYxawg">
                                lanceur d'appli - TdL UI guide</a> by Margot Nadot (<a href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="header-site" class="UItitle2">Header</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Le header est basé sur la structure d'<a href="hero">hero</a>.</p>
                            <p>Au scroll (sauf sur la page d'accueil), ce header passe de l'état <strong
                                    class="text_color">is-expanded</strong> à l'état <strong
                                    class="text_color">is-shrinked</strong></p>
                            <pre class="UIcode" title="Classes à utiliser">
fw-section
hero
header-site
is-expanded / is-shrinked</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="900" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="GRpVdEM"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="header site  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/GRpVdEM">
                                        header site - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="600" data-theme-id="default" data-default-tab="html,result"
                                data-user="MagNadAnn" data-slug-hash="GRpVdEM"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="header site  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/GRpVdEM">
                                        header site - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="footer-site" class="UItitle2">Footer</h2>
                <div class="section__container">>
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="BaoXVBv"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="footer site  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/BaoXVBv">
                                        footer site - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="pagination" class="UItitle2">Pagination</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p></p>
                            <pre class="UIcode" title="Structure HTML">
&lt;ul class=&quot;<strong>pagination</strong> <a href="mixin-block.php#list">list</a>&quot;&gt;
    &lt;li&gt;
        &lt;span class=&quot;<strong>pagination__link pagination__keyword</strong>&quot;&gt;
    &lt;li&gt;
        &lt;span class=&quot;<strong>pagination__link is-active</strong>&quot;&gt;
                            </pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="pagination"</h3>
                            <p class="codepen" data-height="200" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="KKdORxL"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="pagination - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/KKdORxL">
                                        pagination - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser"></pre>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="breadcrumb" class="UItitle2">Fil d'Arianne</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p></p>
                            <pre class="UIcode" title="Structure HTML">
&lt;ul class=&quot;<strong>breadcrumb</strong> <a href="mixin-block.php#list">list</a>&quot;&gt;
    &lt;li&gt;
      &lt;a class=&quot;<strong>breadcrumb__link</strong>&quot;&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="breadcrumb"</h3>
                            <p class="codepen" data-height="150" data-theme-id="default" data-default-tab="result" data-user="MagNadAnn" data-slug-hash="wvKVjXE" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="breadcrumb - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/wvKVjXE">breadcrumb - TdL UI guide</a> by Margot Nadot (<a href="https://codepen.io/MagNadAnn">@MagNadAnn</a>) on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
breadcrumb 
list

breadcrumb__link</pre>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="panel" class="UItitle2">Panneaux de menu</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Ce panneau peut assez facilement se combiner avec un composant <strong>form small</strong> et une <strong>popin small-screens</strong> comme sur <a href="maquettes/page_list-resources">la maquette de la page liste ressources</a>.</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;div class=&quot;<strong>panel</strong>&quot;&gt;
    &lt;section class=&quot;<strong>panel__header panel__title</strong>&quot;&gt;<em>*</em>
        &lt;h4&gt;, &lt;input class=&quot;button&quot;&gt;...
    &lt;section class=&quot;<strong>panel__section</strong> <strong clas="text_color">is-visible</strong>&quot;&gt;
        &lt;div class=&quot;<strong>panel__header</strong>&quot;&gt;
            &lt;h6&gt;
            &lt;button class=&quot;<a href="button.php#button_expand">button button_icon x-small secundary button_expand</a>&quot;&gt;&lt;i class=&quot;<a href="https://fontawesome.com/icons/chevron-up?style=solid">fas fa-chevron-up</a>&quot;&gt;
        &lt;div class=&quot;<strong>panel__content</strong>&quot;&gt;
                            
<em>* facultatif</em></pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_3-4">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="panel"</h3>
                                    <p class="codepen" data-height="500" data-theme-id="default"
                                        data-default-tab="html,result" data-user="MagNadAnn" data-slug-hash="qBOeJmp"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="panel  - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/qBOeJmp">
                                                panel - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Classes à utiliser">
panel
panel__title
panel__section
panel__header
panel__content</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>

</body>