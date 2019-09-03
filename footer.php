        <footer id="footer">
            <div class="wrapper">
                <div class="fwidget one"><?php dynamic_sidebar( 'footer-menu' ); ?></div>
                <div class="copyright">
                    <?php echo date("Y"); echo " "; bloginfo('name'); ?>.<br>
                    Website Built by <a href="https://www.brandcandy.co.za/" target="_blank">Brand Candy</a>
                </div>
                <div class="clearBoth"></div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>