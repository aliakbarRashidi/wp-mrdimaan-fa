      <div class="row no-margin">
        <footer class="page-footer deep-purple accent-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">من و کیبردم یهویی</h5>
                <p class="grey-text text-lighten-4">
                  <?php $footer_cont = esc_attr( get_option( 'footer_content' ) ); echo $footer_cont; ?>
                </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text"> به این ها هم سر بزنید :) </h5>
                <ul>
                <?php  wp_nav_menu( array(
                  'menu' => 'Footer',
                  'theme_location'=>'footer_menu',
                  'items_wrap'    => '%3$s',
                  'menu_class' => 'white-text',
                  'container' => false
                  ));?>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
                ساخته شده توسط سید معین حسینی، منتشر شده تحت مجوز "<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>"
            </div>
          </div>
        </footer>
      </div>
    </main>
    <!-- Import Scripts -->
    <?php wp_footer(); ?>
  </body>
</html>