			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> <a href="<?php echo get_page_link( get_ID_by_slug( 'about' ) ); ?>" title="About David Timmons">David Timmons</a>. All rights reserved.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

        <!-- scripts -->
        <script>
            // Replace .svg files if no browser support.
            function supportsSVG() {
                return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;
            }
            if (supportsSVG()) {
                document.documentElement.className += ' svg';
            } else {
                document.documentElement.className += ' no-svg';
                var imgs = document.getElementsByTagName('img');
                var dotSVG = /.*\.svg$/;
                for (var i = 0; i != imgs.length; ++i) {
                    if(imgs[i].src.match(dotSVG)) {
                        imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
                    }
                }
            }
        </script>

        <!-- analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-19610273-1', 'timmons.io'); //Modified to track the subdomain.
            ga('require', 'displayfeatures');
            ga('send', 'pageview');
        </script>

	</body>
</html>
