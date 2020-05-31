<!DOCTYPE html>
<html>

<head>
    <title>Petits composants - Guide UI</title>

<?php include 'guide-menu.php'; ?>
        
        <main class="UGmain">
            <section class="fw-section">
                <div class="UIpageheader vignette vignette_photo">
                    <h1 class="UItitle1">Petits composants</h1>
                </div>
                <nav class="UIsommaire__wrap bg-l-pearl block_padding">
                    <h3 class="UItitle3">Sommaire</h3>
                    <ol class="UIsommaire">
                        <li><a href="#logo">Logos</a></li>
                        <li><a href="#favicon">Favicon</a></li>
                        <li><a href="#icon">Pictogrammes</a></li>
                        <li><a href="#figures">Figures (images légendées ou non)</a></li>
                        <li><a href="#tags">Tags</a></li>
                        <li><a href="#">Pastille nombre</a></li>
                    </ol>
                </nav>
                <div class="chimney small">
                    <div class="section__container">
                        <article class="UIarticle">
                            <p class="page__intro">Des composants ponctuels pour agrémenter l'interface.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="logo" class="UItitle2">Logos</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Deux petits composants pour faciliter l'insersion de logos dans les pages.</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;a class=&quot;<strong>logo logo_TdL</strong>&quot;&gt;
    &lt;img /&gt;

&lt;ul class=&quot;<strong>logos</strong> <a href="mixin-block.php#list">list</a>&quot;&gt;
  &lt;li&gt;
    &lt;a class=&quot;<strong>logo</strong>&quot;&gt;
      &lt;img /&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="logo"</h3>
                            <p class="codepen" data-height="300" data-theme-id="default" data-default-tab="css,result"
                                data-user="MagNadAnn" data-slug-hash="OJyKgqg"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="logo - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/OJyKgqg">
                                        logo - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
logo
logo_TdL</pre>
                        </div>
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="logos"</h3>
                            <p>On peut utilier la <a href="text.php#text_size">mixin <strong>text_size</strong></a> pour diminuer ou
                                augmenter la taille des logos de toute la ligne.</p>
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="abveyOb"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="logos line - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/abveyOb">
                                        logos line - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
logos-line

logo
vertical
horizontal</pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="favicon" class="UItitle2">Favicon</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Pour le site de Terre de liens et ses applications qui n'ont pas d'icone.</p>
                            <p class="bg-l-pearl block_padding text_center">
                                <img
                                    src="http://tdlui.semaphore-communication.fr/img/favicon/originaux/favicon_01.png" />
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="icon" class="UItitle2">Pictogrammes</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Les maquettes ont été réalisées avec la librairie de pictogrammes <a
                                    href="https://fontawesome.com/">Font Awesome</a>.</p>
                            <p>
                                <a href="https://fontawesome.com/" class="img-link">
                                    <img
                                        src="http://tdlui.semaphore-communication.fr/img/illustrations/Screenshot_2020-05-30%20Font%20Awesome%20Icons.png" />
                                </a>
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="figures" class="UItitle2">Figures</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Images légendées (ou non) dans le corps d'une page.</p>
                            <p>On peut tout à fait utiliser des figures dans un diaporama.</p>
                            <p>Dans l'exemple ci-dessous, la légende est courte, un <strong>h5</strong> est utilisé pour
                                la mettre en valeur. Ceci est à éviter sur des légende de plus de deux lignes.</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;figure&gt;
    &lt;img&gt;
        &lt;figcaption&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="css,result"
                                data-user="MagNadAnn" data-slug-hash="OJyKjjv"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="figures - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/OJyKjjv">
                                        figures - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="tags" class="UItitle2">Tags</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>A utiliser dans les tuiles, les champs select multiples, avec du texte à l'intérieur ou
                                des pictogrammes.</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;ul class=&quot;<strong>tags</strong> <a href="mixin-block.php#list">list</a>&quot;&gt;
    &lt;li class=&quot;<strong>tag</strong>&gt;

&lt;p class=&quot;<strong>tags</strong>&quot;&gt;
    &lt;a class=&quot;<strong>tag</strong>&gt;

&lt;ul class=&quot;<strong>tags</strong> <a href="mixin-block.php#list">list</a>&quot;&gt;
    &lt;li class=&quot;<strong>tag tag_icon</strong>&gt;
        &lt;i class=&quot;<a href="https://fontawesome.com/icons/times?style=light">fas fa-file-pdf</a>&quot;&gt;&lt;/i&gt;

&lt;span class=&quot;<strong>tag</strong>&gt;
    &lt;a class=&quot;<a href="button.php#icon">button icon tight primary</a>&quot;&gt;
        &lt;span class=&quot;<a href="button.php#icon">button__icon</a>&quot;&gt;
            &lt;i class=&quot;<a href="https://fontawesome.com/icons/file-pdf?style=solid">fal fa-times</a>&quot;&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result"
                                data-user="MagNadAnn" data-slug-hash="ExVqWdy"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Tags  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/ExVqWdy">
                                        Tags - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
<strong>&lt;ul&gt; / &lt;p&gt;</strong><em>*</em>
<em class="text_mouse">Pour réunir des tags</em>
tags
list
list_v<em>*</em>

<strong>&lt;a&gt; / &lt;span&gt; / &lt;li&gt;</strong>
tag
tag_icon
info<em>*</em>
success<em>*</em>
warning<em>*</em>
danger<em>*</em>

<strong>&lt;a&gt;</strong><em>*</em>
<em class="text_mouse">Pour pouvoir retirer le tag (d'une liste par exemple)</em>
<a href="button.php#icon">icon</a>


<em>* facultatif</em></pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="number-sticker" class="UItitle2">Pastille nombre</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p></p>
                            <pre class="UIcode" title="Structure HTML">
&lt;div class=&quot;<strong>number-sticker-wrap</strong>&quot;&gt;<em>*</em>
    &lt;span class=&quot;<strong>number-sticker</strong>&quot;&gt;  

<em>* facultatif</em></pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="number-sticker"</h3>
                                    <p class="codepen" data-height="265" data-theme-id="default"
                                        data-default-tab="html,result" data-user="MagNadAnn" data-slug-hash="JjYgyMK"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="number sticker - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/JjYgyMK">
                                                number sticker - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Classes à utiliser">
number-sticker-wrap
number-sticker</pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

        </main>
    </div>

</body>