<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-field">
        <input id="search" type="search" placeholder="عبارت مورد نظر + اینتر" required value="<?php echo get_search_query(); ?>" name="s">
        <label class="label-icon" for="search"></label>
    </div>
</form>