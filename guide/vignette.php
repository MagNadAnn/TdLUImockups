<?php include 'guide-menu.php'; ?>
        <main class="UGmain">
            <section class="fw-section">
                <div class="UIpageheader vignette vignette_photo">
                    <h1 class="UItitle1">Vignettes</h1>
                </div>
                <nav class="UIsommaire__wrap bg-l-pearl block_padding">
                    <h3 class="UItitle3">Sommaire</h3>
                    <ol class="UIsommaire">
                        <li><a href="#vignette_photo">Vignette photo</a></li>
                        <li><a href="#vignette_solo">Vignette solo</a></li>
                        <li><a href="#vignette__ratio">Ratios</a></li>
                        <li><a href="#tile__vignette">Vignette dans des tuiles</a></li>
                    </ol>
                </nav>
                <div class="chimney small">
                    <div class="section__container">
                        <article class="UIarticle">
                            <p>Une vignette est un système de balises qui vise à garantir une <strong>homogénéité dans
                                    le traitement des images du sites</strong>, notamment dans les tuiles et dans le
                                contenu des pages. Un élément <em>Vignette</em> a vocation à :</p>
                            <ul>
                                <li>Proposer un <strong>filtre photo</strong></li>
                                <li>Permettre de donner rapidement un <strong>ratio</strong> à une image (carré, 4/3,
                                    2/1...)</li>
                                <li>Permettre d'afficher un <strong>crédit</strong> pour le visuel.</li>
                                <li>Proposer l'<strong>affichage de tags</strong> dans le cas d'une vignette comprise
                                    dans une tuile.
                                </li>
                            </ul>
                            <h4 class="UItitle4">Architecture</h4>
                            <p>Une vignette est basiquement composée ainsi :</p>
                            <pre class="UIcode" title="Structure HTML">
&lt;div class=&quot;<strong>vignette</strong>&quot;&gt;
    &lt;div class=&quot;<strong>vignette__image-wrap</strong>&quot;&gt;
        &lt;img class=&quot;<strong>vignette__image</strong>&quot; /&gt;
    &lt;p class=&quot;<strong>vignette__credit</strong>&quot;&gt;
    <em>&lt;ul class=&quot;tags&quot;&gt; (facultatif)</em></pre>
                            <h4 class="UItitle4">Crédit</h4>
                            <p>Il est important d'afficher un crédit à tout visuel affiché sur le site.</p>
                            <p>Pour cela on insère dans la balise <em>vignette</em> une balise <em>&lt;p
                                    class=&quot;vignette__credit&quot;&gt;</em>.</p>
                            <p>Le crédit s'affoche au survol de la vignette</p>
                            <h4 class="UItitle4">Variantes</h4>
                            <p>D'autres classes peuvent s'ajouter dans ce balisage, nous allons les aborder ci-dessous.
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="vignette_photo" class="UItitle2">Vignette photo</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <h4 class="UItitle4">Filtre photo</h4>
                            <p>En rajoutant la classe <strong>vignette_photo</strong> on rajoute à l'image un filtre
                                composé d'une trame et d'un dégradé coloré transparent.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="vignette <strong
                                            class="text_color">vignette_photo</strong>"</h3>
                                    <p class="codepen" data-height="500" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="wvKZREv"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Vignette photo - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/wvKZREv">
                                                Vignette photo - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="vignette_solo" class="UItitle2">Vignette solo</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Par défaut, une vignette prend 100% de l'espace disponible prévu par son contenant.</p>
                            <p><strong>La vignette solo sert à afficher une image de manière isolée</strong>, par
                                exemple dans un article ou bien dans le bandeau rapport. <strong>Elle permet de gérer
                                    l'encombrement de la vignette, notamment sur mobile</strong>, en la centrant et en
                                lui attribuant une taille.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_3-4">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="vignette <strong
                                            class="text_color">vignette_solo</strong>
                                        (vignette_photo)"</h3>
                                    <p class="codepen" data-height="600" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="qBOwgWM"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Vignette solo - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/qBOwgWM">
                                                Vignette solo - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="vignette__ratio" class="UItitle2">Ratios</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p class="bg-d-red_light block_padding">⚠️ Le système de ratio ne permet de redimensionner
                                grossièrement les images pour les mettre au bon format. L'affinage est vous est laissé à
                                partir de la librairie Js de votre choix. Il est bien entendu conseillé de
                                redimensionner les images côté back.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="vignette__ratio_1-1"</h3>
                                    <p class="codepen" data-height="265" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="OJyGdJP"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Vignette ratio - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/OJyGdJP">
                                                Vignette ratio - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Valeurs proposées">
vignette__ratio_1-1 <em>vignette carrée</em>
vignette__ratio_4-3 <em>vignette quatre tiers</em>
vignette__ratio_2-1 <em>vignette deux fois plus longue que haute</em></pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="fw-section">
                <h2 id="tile__vignette" class="UItitle2">Vignette dans des tuiles</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <h4 class="UItitle4">Tags</h4>
                            <p>Les <em>vignettes</em> sont très utilisées pour les <a href="tile.html">tuiles</a>. C'est
                                pourquoi elles sont conçu de manière à abriter également les <a href="tag.html">tags</a>
                                liés à la tuile.</p>
                            <p>Le contenant avec la balise tag est automatiquement placé <strong>en haut à
                                    gauche</strong> de la
                                vignette, avec une disposition verticale des tags. Il est possible de placer les tags
                                dans les autres coins de la vignette à l'aide des
                                classes <strong class="text_color">bottom</strong> et <strong
                                    class="text_color">right</strong> ajoutées à la class <strong
                                    class="text_color">tag</strong>.</p>
                            <h4 class="UItitle4">Vignettes sans image</h4>
                            <p>Dans une liste de tuile, une vignette sans image possède néanmoins un ratio. Son
                                emplacement est occupé par un aplat bleu, <a href="button.html">de la couleur des liens
                                    et des boutons</a>.</p>
                            <p>Dans ce cas, évidemment, on n'affiche pas de crédit.</p>
                            <h4 class="UItitle4">Survol</h4>
                            <p>Au survol de la tuile, le filtre photo diminue en intensité.</p>
                            <p>Pour les tuiles <em>image</em>, une animation de zoom sur la vignette vient mettre en
                                valeur l'interactivité.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_3-4">
                                <div class="bg-l-pearl block_padding">
                                    <p class="codepen" data-height="450" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="xxweMwa"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Vignette dans des tuiles (ici text-media) - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/xxweMwa">
                                                Vignette dans des tuiles (ici text-media) - TdL UI guide</a> by Margot
                                            Nadot (<a href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

        </main>
    </div>

</body>