<?php
/**
 * @package WordPress
 * @subpackage 
*/
?>

</div>
	<footer>
		<div class="inner container_12">		
			<div class="grid_6">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - all rights reserved </p> 
			</div>
			
			<div class="grid_6">
			<?php wp_nav_menu( array('menu' => 'Footer Menu', 'container' => '' ) ); ?>	
			</div>
		</div>
	</footer>
	
</div>

<?php wp_footer(); ?>

<!-- google analytics script -->
<script>
	var _gaq = [['_setAccount', '<?php echo GOOGLE_ID; ?>'], ['_trackPageview']];
	(function(d, t) {
		var g = d.createElement(t),
		s = d.getElementsByTagName(t)[0];
		g.async = true;
		g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s);
	})(document, 'script');
</script>

<!-- twitter widgets script -->
<script type="text/javascript">
	(function() {
		var t = document.createElement('script'); t.type = 'text/javascript'; t.async = true;
		t.src = 'http://platform.twitter.com/widgets.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(t, s);
	})();
</script>

<!-- Google +1 -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!-- facebook scripts -->
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo FB_APP_ID; ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- end facebook scripts -->

</body>
</html>