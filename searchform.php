<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="15" />
<input type="submit" id="searchsubmit" value="Find it" />
</div>
</form>
