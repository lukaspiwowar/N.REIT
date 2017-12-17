<?php get_header(); ?>

<?php get_template_part('slider'); ?>

<div id="content-page" class="widthfix">
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>

		<div id="main-description">
			<?php the_content(); ?>
		</div>

	<?php endwhile; endif; ?>
</div>
<?php get_template_part('stats'); ?>

<!--

TA SEKCJA PONIŻEJ POWINNA AUTOMATYCZNIE ZACIĄGAĆ INWESTYCJE Z ODPOWIEDNIEJ KATEGORII. 

1. Dodaj nową kategorię - Inwestycje
2. Zajawka (Excerpt) będzie pojawiał się jako hover 
3. Zdjęcie, które się tu pojawia będzie jako Miniatura (Post Thumbnail)
4. Tytuł wiadomo
5. Link też wiadomo.


-->
<div id="content-page" class="widthfix"><span class="title-page">Nadchodzące inwestycje</span>

    <hr class="blue-line" />

    <div>
        <div id="projects">
            <div id="project-container">
                <div id="project">

                    <img class="alignnone size-full wp-image-311" src="http://digitalzone.pl/projekty/nreit/wp-content/uploads/2017/12/kamienica.png" alt="" width="404" height="408" />
                    <div id="project-div">
                        <div id="project-description-box">
                            <div class="project-description">Dokładnie wiemy jak znaleźć najlepszą</div>
                            <div class="project-description">lokalizację, zaprojektowany optymalny</div>
                            <div class="project-description">budynek oraz dać naszym Inwestorom</div>
                            <div class="project-description">nieruchomość, która będzie inwesytcją</div>
                            <div class="project-description">jakiej oczekują.</div>
                        </div>
                        <img class="alignnone size-full wp-image-268 arrow" src="http://digitalzone.pl/projekty/nreit/wp-content/uploads/2017/12/goin-1.png" alt="" width="42" height="49" />

                    </div>
                </div>
                <span class="project-title">Dietla 109</span>

            </div>
            &nbsp;
            <div id="project-container">
                <div id="project">

                    <img class="alignnone size-full wp-image-312" src="http://digitalzone.pl/projekty/nreit/wp-content/uploads/2017/12/budowa.png" alt="" width="390" height="410" />
                    <div id="project-div">
                        <div id="project-description-box">
                            <div class="project-description">Dokładnie wiemy jak znaleźć najlepszą</div>
                            <div class="project-description">lokalizację, zaprojektowany optymalny</div>
                            <div class="project-description">budynek oraz dać naszym Inwestorom</div>
                            <div class="project-description">nieruchomość, która będzie inwesytcją</div>
                            <div class="project-description">jakiej oczekują.</div>
                        </div>
                        <img class="alignnone size-full wp-image-268 arrow" src="http://digitalzone.pl/projekty/nreit/wp-content/uploads/2017/12/goin-1.png" alt="" width="42" height="49" />

                    </div>
                </div>
                <span class="project-title">Tuwima</span>

            </div>
            &nbsp;
            <div id="project-container">
                <div id="project">

                    <img class="alignnone size-full wp-image-313" src="http://digitalzone.pl/projekty/nreit/wp-content/uploads/2017/12/dom.png" alt="" width="609" height="384" />
                    <div id="project-div">
                        <div id="project-description-box">
                            <div class="project-description">Dokładnie wiemy jak znaleźć najlepszą</div>
                            <div class="project-description">lokalizację, zaprojektowany optymalny</div>
                            <div class="project-description">budynek oraz dać naszym Inwestorom</div>
                            <div class="project-description">nieruchomość, która będzie inwesytcją</div>
                            <div class="project-description">jakiej oczekują.</div>
                        </div>
                        <img class="alignnone size-full wp-image-268 arrow" src="http://digitalzone.pl/projekty/nreit/wp-content/uploads/2017/12/goin-1.png" alt="" width="42" height="49" />

                    </div>
                </div>
                <span class="project-title">Lwowska</span>

            </div>
            &nbsp;

        </div>
        <div id="wrapper-button">
            <div id="show-more">ZOBACZ WSZYSTKIE INWESTYCJE</div>
            &nbsp;

        </div>
    </div>
</div>

<?php get_footer(); ?>