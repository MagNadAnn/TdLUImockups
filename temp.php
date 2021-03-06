<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Affichage temporaires/interactifs - Guide UI</title>

<?php include 'guide-menu.php'; ?>
    
        <main class="UGmain">
            <section class="fw-section">
                <div class="UIpageheader vignette vignette_photo">
                    <h1 class="UItitle1">Affichages temporaires/interactifs</h1>
                </div>
                <nav class="UIsommaire__wrap bg-l-pearl block_padding">
                    <h3 class="UItitle3">Sommaire</h3>
                    <ol class="UIsommaire">
                        <li><a href="#bubble">Bulles</a></li>
                        <li><a href="#popin">Pop in</a></li>
                        <li><a href="#tabs">Onglets</a></li>
                        <li><a href="#accordeon">Accordéon</a></li>
                        <li><a href="#carousel">Carousel</a></li>
                    </ol>
                </nav>
                <div class="chimney small">
                    <div class="section__container">
                        <article class="UIarticle">
                            <div class="page__intro">
                                <p>Les affichages temporaires sont des composants affichés pour un temps limité.</p>
                                <p>En général, ils apparaissent et disparaissent après une action de l'utilisateur.</p>
                                <p>En général également, les affichage temporaires ont deux états : l'un qui les cache et
                                    l'un qui les montre.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="bubble" class="UItitle2">Bulles</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Une bulle est un composant assez simple avec :</p>
                            <ul>
                                <li>un bouton pour déclencher l'apparition de la bulle</li>
                                <li>la bulle et son container interne</li>
                                <li>un état <strong>is-visible</strong></li>
                                <li>un composant autour</li>
                            </ul>
                            <p>On peut insérer dedans un autre composant comme un sous-menu (voir exemple 2 ci-dessous).
                            </p>
                            <p>Plusieurs options sont rajoutables pour étoffer les possibilité de l'outil :</p>
                            <ul>
                                <li>jouer sur la largeur</li>
                                <li>jouer sur la hauteur de la bulle en la rendant scrollable</li>
                                <li>décaler la bulle sur la gauche ou la droite</li>
                                <li>rajouter un titre</li>
                            </ul>
                            <pre class="UIcode" title="Structure HTML">
&lt;div class=&quot;<strong>bubble-wrap</strong>&quot;&gt;
    &lt;a class=&quot;<a href="button">button</a>&quot;&gt;<em>*</em>
    &lt;div class=&quot;<strong>bubble</strong> <strong class="text_color">is-visible</strong> <em>right fluid **</em>&quot;&gt;
        &lt;div class=&quot;<strong>bubble__container</strong>&quot;&gt;
            &lt;h4 class=&quot;<em>bubble__title*</em>&quot;&gt;
            &lt;div class=&quot;<em>bubble__scrollable-wrap **</em>&quot;&gt;
                &lt;div class=&quot;<em>bubble__scrollable **</em>&quot;&gt;
                    &lt;p class=&quot;<em>bubble__content **</em>&quot;&gt;
            &lt;p class=&quot;<em>bubble__content **</em>&quot;&gt;

<em>* bouton déclancheur de la bulle</em>
<em>** facultatif</em></pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="400" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="gOaNyPX"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="bubble - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/gOaNyPX">
                                        bubble - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
bubble
bubble__container
left<em>*</em>
right<em>*</em>
fluid<em>*</em>

<em>* facultatif</em></pre>

                            <p class="block_padding warning">⚠️ La classe <strong>fluid</strong> se règlera sur
                                la largeur du bouton. D'autres réglages de largeurs seront à réaliser par vos soins.
                            </p>
                        </div>
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="400" data-theme-id="default" data-default-tab="html,result"
                                data-user="MagNadAnn" data-slug-hash="gOaNypX"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="bubble right mobile - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/gOaNypX">
                                        bubble right mobile - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode"
                                title="Classes à utiliser pour rendre la bulle scrollable et limiter sa hauteur">
bubble__scrollable-wrap
bubble__scrollable</pre>
                            <pre class="UIcode" title="Classes à utiliser pour mettre en forme le contenu de la bulle">
bubble__title
bubble__content</pre>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="popin" class="UItitle2">Pop in</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Une Pop in peut contenir les même composants qu'une page.</p>
                            <p>On peut définir des Pop in qui n'apparaissent que sur des écrans grands ou petits à
                                l'aide des classes <strong class="text_color">popin_big-screens</strong> et <strong
                                    class="text_color">popin_small-screens</strong>.</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;div class=&quot;<strong>popin</strong> <strong class="text_color">is-visible</strong> <em>popin_big-screens ou popin_small-screens</em>&quot;&gt;
    &lt;div class=&quot;<strong>popin__container</strong>&quot;&gt;
        &lt;div class=&quot;<strong>popin__close</strong>&quot;&gt;
            &lt;button class=&quot;<a href="button">button round small primary</a>&quot;&gt;
        &lt;div class=&quot;<strong>popin__content</strong>&quot;&gt;
    &lt;button class=&quot;<strong>popin__veil</strong>&quot;&gt;&lt;/button&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="700" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="yLYddgK"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="popin  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/yLYddgK">
                                        popin - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classe à utiliser">
popin
is-visible
popin_small-screens
popin_big-screens

popin__close
popin__content
popin__veil</pre>
                        </div>
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result"
                                data-user="MagNadAnn" data-slug-hash="OJyeeQp"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="pop in small screens - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/OJyeeQp">
                                        pop in small screens - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                    </div>
                </div>

            </section>

            <section class="fw-section">
                <h2 id="tabs" class="UItitle2">Onglets</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Ils peuvent contenir de nombreux autres composants : tuiles, éléments de layout, texte...
                            </p>
                            <pre class="UIcode" title="Structure HTML">
&lt;div class=&quot;<strong>tabs-wrap</strong>&quot;&gt;
    &lt;ul class=&quot;<a href="mixin-block.php#list">list</a> <strong>tabs</strong>&quot;&gt;
        &lt;li&gt;
            &lt;a class=&quot;<strong>tab__link</strong> <strong class="text_color">is-active</strong>&quot;&gt;
    &lt;div class=&quot;<strong>tab__container</strong>&quot;&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="html,result"
                                data-user="MagNadAnn" data-slug-hash="XWmLLvL"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Tabs  - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/XWmLLvL">
                                        Tabs - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
tabs-wrap
tabs + <a href="mixin-block.php#list">list</a>
tab__link
tab__container</pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="accordeon" class="UItitle2">Accordéons</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Ils sont surtout destiné à accueillir des composants de texte et d'illustration, mais ils
                                peuvent contenir de nombreux autres composants : tuiles, éléments de layout, texte...
                            </p>
                            <pre class="UIcode" title="Structure HTML">
&lt;ul class=&quot;<strong>accordeon</strong> <a href="mixin-block.php#list">list list_v</a>&quot;&gt;
    &lt;li class=&quot;<strong class="text_color">is-expanded</strong>&quot;&gt;
    &lt;button class=&quot;<strong>accordeon__button</strong> <a href="button">button basic primary</a>&quot;&gt;
        &lt;span class=&quot;<strong>accordeon__title</strong> <a href="button">button__label</a>&quot;&gt;
        &lt;span class=&quot;<a href="button.php#expand">button icon expand</a>&quot;&gt;
    &lt;div class=&quot;<strong>accordeon__container</strong>&quot;&gt;
        &lt;div class=&quot;<strong>accordeon__content</strong>&quot;&gt;
                            </pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="html,result"
                                data-user="MagNadAnn" data-slug-hash="RwWzXZj"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="RwWzXZj">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/RwWzXZj">
                                        RwWzXZj</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
accordeon
<a href="mixin-block.php#list">list</a>
<a href="mixin-block.php#list">list_v</a>

is-expanded / is-shrinked

accordeon__button
<a href="button.php#basic">button</a>
<a href="button.php#basic">basic</a>
<a href="button.php#basic">primary</a>

accordeon__title
<a href="button.php#basic">button__label</a>

<a href="button.php#icon">button</a>
<a href="button.php#icon">icon</a>
<a href="button.php#expand">expand</a>

<a href="button">button__icon</a>

accordeon__container

accordeon__content</pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="carousel" class="UItitle2">Carousel</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Le carousel peut accueillir des composants de texte et d'illustration, mais il
                                peut aussi contenir de nombreux autres composants : tuiles, éléments de layout, texte...
                            </p>
                            <p>Les flèches du carousel sortent de la cheminée, il est donc important que le carousel en
                                soit bien entouré.</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;div class=&quot;<strong>carousel</strong>&quot;&gt;
    &lt;div class=&quot;<strong>carousel__container</strong>&quot;&gt;
        &lt;ul class=&quot;<strong>carousel__slides</strong> <a href="list">list</a>&quot;&gt;
            &lt;li class=&quot;<strong>carousel__slide</strong>&quot;&gt;
    &lt;nav class=&quot;<strong>carousel__nav</strong>&quot;&gt;
        &lt;ul class=&quot;<strong>carousel__nav__arrows</strong>&quot;&gt;
            &lt;li class=&quot;<strong>carousel__nav__previous</strong>&quot;&gt;
                &lt;span class=&quot;<a href="button">button round secundary</a>&quot;&gt;
                    &lt;span class=&quot;<a href="button">button__icon</a>&quot;&gt;&lt;i class=&quot;fas fa-arrow-left&quot;&gt;&lt;/i&gt;
            &lt;li class=&quot;<strong>carousel__nav__next</strong>&quot;&gt;
                &lt;span class=&quot;<a href="button">button round secundary</a>&quot;&gt;
                    &lt;span class=&quot;<a href="button">button__icon</a>&quot;&gt;&lt;i class=&quot;fas fa-arrow-right&quot;&gt;
        &lt;ul class=&quot;<strong>carousel__nav__dots</strong> <a href="list">list</a>&quot;&gt;
            &lt;li class=&quot;<strong>carousel__nav__dot</strong> is-active&quot;&gt;
                &lt;button class=&quot;<a href="button">button icon x-small primary</a>&quot;&gt;
                    &lt;span class=&quot;<a href="button">button__icon</a>&quot;&gt;&lt;i class=&quot;fas fa-circle&quot;&gt;</pre>
                            <p>L'architecture HTML proposée est prévue pour un défilement horizontal d'un long container
                                <strong>carousel__slides</strong> <strong class="text_color">à compléter en Js</strong>
                                en jouant sur :</p>
                            <ul>
                                <li>la propriété <strong class="text_color">width</strong> en comptant 70% pour chaque
                                    slide. Exemple : 3 slides = 3 x 70% = 210%</li>
                                <li>la propriété <strong class="text_color">left</strong> pour faire avancer le
                                    défilement d'un cran de 70% modulo 15% (afin que le slide soit entouré de 15% de
                                    marge).</li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="700" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="qBOeWxK"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Carousel - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/qBOeWxK">
                                        Carousel - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser">
carousel
carousel__container

carousel__slides
carousel__slide

carousel__nav

carousel__nav__arrows
carousel__nav__previous / carousel__nav__next

carousel__nav__dots
carousel__nav__dot</pre>
                        </div>
                    </div>
            </section>

        </main>
    </div>

</body>