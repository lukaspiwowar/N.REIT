</div> 
<!-- #main -->

<?php do_action( 'basic_before_footer' ); ?>




<hr class="footerHr widthfix" />

<div id="footer-container"> 
<div id="footer-div"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
</div>

<div id="footer-div">
<span id="fontInfo"> +48 123 345 232</span><br />
<span id="fontInfoBottom"> ZADZWOŃ DO NAS</span>
 </div>


<div id="footer-div">
<span id="fontInfo"> biuro@nreit.pl </span><br/>
<span id="fontInfoBottom"> NAPISZ E-MAIL</span>
</div>
</div>



<footer id="footer" class="<?php echo apply_filters( 'basic_footer_class', '' );?>">

	<div id="footerBlackDiv" class="maxwidth" >
	<span id="footerInfo">© Copyright 2017 N.REIT | Wszelkie prawa zastrzeżone.</span>
	</div>
</footer>
<?php do_action( 'basic_after_footer' ); ?>


</div> 
<!-- .wrapper -->


<?php wp_footer(); ?>

</body>
</html>