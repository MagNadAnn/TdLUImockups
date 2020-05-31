<?php include 'guide-menu.php'; ?>

        <main class="UGmain">
            <section class="fw-section">
                <div class="UIpageheader vignette vignette_photo">
                    <h1 class="UItitle1">Heros</h1>
                </div>
                <nav class="UIsommaire__wrap bg-l-pearl block_padding">
                    <h3 class="UItitle3">Sommaire</h3>
                    <ol class="UIsommaire">
                        <li><a href="#hero">Hero simple</a></li>
                        <li><a href="#hero_v">Hero vertical</a></li>
                    </ol>
                </nav>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p class="page__intro">Un <strong>hero</strong> est un composant qui s'appuie sur le composant <a href="layout.php#section">section</a> et fait la part belle à l'image (contenue dans une <a href="vignette">vignette</a>) et à des textes courts. Il fait donc appel aux balisage de ces deux composants.</p>
                            <h4 class="UItitle4">Et à l'intérieur ?</h4>
                            <p>Un hero peut contenir des éléments de layout comme <a href="layout.php#chimney">une cheminée</a> ou des <a href="layout.php#column">colonnes</a>, mais aussi bien entendu des éléments de contenus comme des <a href="tile">tuiles</a>, des <a href="text.php#text_on-photo">textes avec une ombre dessus</a>...</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="hero" class="UItitle2">Hero simple</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Par défaut, un hero est horizontal et s'adapte à la hauteur des éléments qu'il contient.
                            </p>
                            <pre class="UIcode" title="Structure HTML">
&lt;section class=&quot;<a href="layout.php#section">fw-section</a> <strong>hero</strong>&quot;&gt;
    &lt;div class=&quot;<a href="vignette">vignette vignette_photo</a>&quot;&gt;
    &lt;div class=&quot;<strong>hero__container</strong> <a href="layout.php#section">section__container</a>&quot;&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="hero"</h3>
                            <p class="codepen" data-height="600" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="ExVzpWB"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Hero - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/ExVzpWB">
                                        Hero - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser pour le hero">
<a href="layout.php#section">fw-section</a><em>*</em>
hero

<a href="layout.php#section">section__container</a>
hero__container

<em>* on peut aussi placer le hero DANS une balise fw-section</em></pre>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="hero_v" class="UItitle2">Hero vertical</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>La classe <strong>hero_v</strong> sert uniquement à modifier le recadrage de la vignette.
                            </p>
                            <h4 class="UItitle4">Hero et fh-section</h4>
                            <p>Pour bien gérer les alignements verticaux, il est nécessaire de mettre le
                                <strong>hero</strong> à l'intérieur de la <strong>fh-section</strong>.</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;section class=&quot;<a href="layout.php#section">fw-section fh-section</a>&quot;&gt;
    &lt;div class=&quot;<strong>hero</strong> <a href="mixin-block.php#block_v">hero_v block_v-center</a>&quot;&gt;
        &lt;div class=&quot;<a href="vignette">vignette vignette_photo</a>&quot;&gt;
        &lt;div class=&quot;<strong>hero__container</strong> <a href="layout.php#section">section__container</a>&quot;&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="800" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="zYvQJaZ"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Hero vertical - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/zYvQJaZ">
                                        Hero vertical - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <pre class="UIcode" title="Classes à utiliser autour du hero">
<a href="layout.php#section">fw-section</a>
<a href="layout.php#section">fh-section</a>

hero
hero_v
<a href="mixin-block.php#block_v">block_v-center</a>

hero__container
<a href="layout.php#section">section__container</a></pre>
                        </div>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Ci-dessous, le hero vertical est placé à l'intérieur d'une colonne qui divise la <a
                                    href="layout.php#section">section fh+fw</a>
                                en deux.</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;section class=&quot;<a href="layout.php#section">fw-section fh-section</a>&quot;&gt;
    &lt;div class=&quot;<a href="layout.php#columns">columns block_no-margin</a>&quot;&gt;
        &lt;div class=&quot;<a href="layout.php#section">column column_1-2</a> fh-section <a href="mixin-block.php#block_margin">block_no-margin</a>&quot;&gt;
            &lt;div class=&quot;<strong>hero hero_v</strong> <a href="mixin-block.php#block_v">block_v-center</a>&quot;&gt;
                &lt;div class=&quot;<a href="vignette">vignette vignette_photo</a>&quot;&gt;
                &lt;div class=&quot;<strong>hero__container</strong> <a href="layout.php#section">section__container</a>&quot;&gt;</pre>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <p class="codepen" data-height="800" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="dyYEqYR"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Hero vertical colonne - TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/dyYEqYR">
                                        Hero vertical colonne - TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                    </div>
            </section>

        </main>
    </div>

</body>