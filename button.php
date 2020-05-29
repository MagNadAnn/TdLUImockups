<!DOCTYPE html>
<html>

<head>
    <title>Boutons, liens, etc. - Guide UI</title>

<?php include 'guide-menu.php'; ?>

        <main class="UGmain">
            <section class="fw-section">
                <div class="UIpageheader vignette vignette_photo">
                    <h1 class="UItitle1">Boutons, liens, etc.</h1>
                </div>
                <nav class="UIsommaire__wrap bg-l-pearl block_padding">
                    <h3 class="UItitle3">Sommaire</h3>
                    <ol class="UIsommaire">
                        <li><a href="#link">Liens</a></li>
                        <li><a href="#button">Boutons</a></li>
                        <li><a href="#calltoaction">Call to action</a></li>
                    </ol>
                </nav>

                <div class="chimney small">
                    <div class="section__container">
                        <article class="UIarticle">
                            <p>La possibilité de relier les pages les unes aux autres est la fonctionnalité qui est au
                                coeur
                                de la naissance du web au début des années 1990.</p>
                            <p>Pour ce faire, les interfaces sont outillées de liens plus ou moins sophistiqués : du
                                simple
                                lien dans un texte, au <em>Call to action</em>, en passant par le lien proposé dans un
                                menu
                                et de nombreux types de boutons.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="link" class="UItitle2">Liens</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Les liens s'affiche simplement avec la balise html &lt;a&gt; de manière à pouvoir
                                être saisie simplement dans le corps d'un article. Il n'est nécessaire d'ajoutar
                                aucune classe CSS.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <p class="codepen" data-height="265" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="zYvMQvY"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="&amp;lt;a&amp;gt;  - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/zYvMQvY">
                                                &lt;a&gt; - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <h2 id="button" class="UItitle2">Boutons</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Le composant bouton...</p>
                            <ul>
                                <li>fonctionne avec la balise <strong>&lt;a&gt;</strong> et la
                                    <strong>&lt;button&gt;</strong></li>
                                <li>existe sous<strong>3 formes </strong> : basic, icon et round</li>
                                <li>comporte <strong>1 extention</strong> de la forme round pour le
                                    <strong>read-more</strong></li>
                                <li>propose <strong>5 déclinaisons colorées</strong> : primary, secundary, success,
                                    warning,
                                    danger</li>
                                <li>existe en <strong>5 tailles</strong> : par défaut, small, x-small, large x-large
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="columns">
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="button_basic"</h3>
                                    <p class="codepen" data-height="265" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="MWazEEW"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Bouton basique - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/MWazEEW">
                                                Bouton basique - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Variations affichées dans les exemples ci-dessus">
&lt;a&gt;&lt;/a&gt;
&lt;button&gt;&lt;/button&gt;</pre>
                                </div>
                            </div>
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="button_icon"</h3>
                                    <p class="codepen" data-height="265" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="rNOQpar"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Bouton icon - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/rNOQpar">
                                                Bouton icon - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Variations affichées dans les exemples ci-dessus">
x-large
large
[sans classe de taille]
small
x-small</pre>
                                </div>
                            </div>
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 class="UItitle3">class="button_round"</h3>
                                    <p class="codepen" data-height="265" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="GRpwOoe"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Bouton  Round - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/GRpwOoe">
                                                Bouton rond - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Variations affichées dans les exemples ci-dessus">
primary
secundary
success
warning
danger</pre>
                                </div>
                            </div>
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                    <h3 id="button_read-more" class="UItitle3">class="button_read-more"</h3>
                                    <p class="codepen" data-height="265" data-theme-id="default"
                                        data-default-tab="result" data-user="MagNadAnn" data-slug-hash="mdeQpEV"
                                        style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                        data-pen-title="Bouton read more - TdL UI guide">
                                        <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/mdeQpEV">
                                                Bouton read more - TdL UI guide</a> by Margot Nadot (<a
                                                href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                    <pre class="UIcode" title="Classe à utiliser">
button
button_round
button_read-more</pre>
                                </div>
                            </div>
                            <div class="column column_1-1">
                                <div class="bg-l-pearl block_padding">
                                    <h3 id="button_expand" class="UItitle3">class="button_expand"</h3>
                                        <p>Ce bouton est contenu dans un composant qui a deux états : <strong class="text_color">shrinked</strong> ou <strong class="text_color">expanded</strong>. En fonction de l'état de son container, le bouton pointe vers le haut ou le bas.</p>
                                        <p>Il est construit sur la base d'un <strong>button_icon</strong>.</p>
                                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="MagNadAnn" data-slug-hash="gOaNqKY" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Bouton expand - TdL UI guide">
                                            <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/gOaNqKY">
                                            Bouton expand - TdL UI guide</a> by Margot Nadot (<a href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                            on <a href="https://codepen.io">CodePen</a>.</span>
                                        </p>
                                        <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                                        <pre class="UIcode" title="Classe à utiliser pour le composant autour">
is-shrinked
is-expanded</pre>
                                        <pre class="UIcode" title="Classe à utiliser pour le bouton">
button
button_icon
button_expand</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fw-section">
                <h2 id="calltoaction" class="UItitle2">Call to action</h2>
                <div class="section__container">
                    <div class="chimney small">
                        <article class="UIarticle">
                            <p>Le <strong>call to action</strong> est une manière de mettre en valeur les actions les
                                plus importantes que l'on veut amener lea visiteurice à accomplir.</p>
                            <p>Sur les sites de Terre de Liens, il occupe toute la largeure de page.</p>
                            <h4 class="UItitle4">Balisage</h4>
                            <p>Attention, la classe <em>CTA__wrap</em> ne suffit pas. Le composant utilise aussi les
                                classes <em>CTA__container</em>, <em>CTA__title</em>, <em>CTA__subtitle</em>,
                                <em>CTA__content</em>.</p>
                            <h4 class="UItitle4">Thèmes et enchaînements</h4>
                            <p>Deux thèmes sont proposés afin de gérer au mieux l'enchaînement avec les sections situées
                                juste au dessus et juste au dessous.</p>
                            <p>Une attention toute particulière doit être apportée
                                en bas de page où plusieurs bandeaux se succèdent parfois dans les zonings. <strong>Il
                                    n'est pas
                                    souhaitable de placer coup sur coup deux sections avec une trame.</strong></p>
                            <p>Nous proposons ici de n'utiliser que ces deux thèmes. En cas de besoin, consultez <a
                                    href="mixin-block#bg">les mixins d'arrière plan</a> pour d'autres déclinaisons.
                            </p>
                            <h4 class="UItitle4">Thèmes et couleur du texte</h4>
                            <p>Les composants plus complexe que les &lt;a&gt;, les &lt;p&gt; ou les titres (&lt;h3&gt;,
                                &lt;h4&gt;...) nécessiteront probablement que vous appeliez explicitement leur version
                                <strong>dark</strong>. Se référer à la documentation de chaque composant.</strong></p>
                            <p>Par exemple ici, sur fond bleu, le bouton utilise son thème <em>secundary</em>.</p>
                        </article>
                    </div>
                </div>
                <div class="section__container">
                    <div class="chimney fluid">
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="CTA__wrap bg-theme_01"</h3>
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="zYvMQJB"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Call to Action theme 1- TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/zYvMQJB">
                                        Call to Action theme 1- TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                        <div class="bg-l-pearl block_padding">
                            <h3 class="UItitle3">class="CTA__wrap bg-blue_light"</h3>
                            <p class="codepen" data-height="500" data-theme-id="default" data-default-tab="result"
                                data-user="MagNadAnn" data-slug-hash="bGVQyXy"
                                style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
                                data-pen-title="Call to Action theme 1- TdL UI guide">
                                <span>See the Pen <a href="https://codepen.io/MagNadAnn/pen/bGVQyXy">
                                        Call to Action theme 1- TdL UI guide</a> by Margot Nadot (<a
                                        href="https://codepen.io/MagNadAnn">@MagNadAnn</a>)
                                    on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        </div>
                        <pre class="UIcode" title="Classes à utiliser">
CTA__wrap
CTA__container
CTA__title
CTA__subtitle
CTA__content</pre>
                    </div>
                </div>
            </section>
            <section class="fw-section">
                <h2 id="" class="UItitle2"></h2>
                <div class="chimney fluid">
                    <div class="section__container">
                        <div class="columns">
                            <div class="column column_1-2">
                                <div class="bg-l-pearl block_padding">
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </main>
    </div>

</body>