	

<?php if ( is_active_sidebar( 'gridly_footer')) { ?>     
   <div id="footer-area">
			<?php dynamic_sidebar( 'gridly_footer' ); ?>
        </div><!-- // footer area -->   
<?php }  ?>     
      


 <div id="copyright">
 <p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> </p>
 </div><!-- // copyright -->   
     
</div><!-- // wrap -->   

	<?php wp_footer(); ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1368144-24', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>