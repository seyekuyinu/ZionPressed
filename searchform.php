<form method="get" class="searchform" id="searchform" action="<?php bloginfo( 'home' ); ?>/">
	<fieldset class="searchbox">
		<input class="searchbox" onclick="if(this.value == 'Search this site..') this.value='';" onblur="if(this.value.length == 0) this.value='Search this site..';" name="s" id="s" value="" type="text" />
		<input class="searchbtn" type="submit" name="submit" id="searchsubmit" value="Search" />
	</fieldset>
</form>