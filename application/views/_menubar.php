<?php
/*
 * Menu navbar, just an unordered list
 */
?>
<ul class = "nav">
	{menudata}
	<li><a href="{link}">{name}</a></li>
	{/menudata}

</ul>
<div class="dropdown">
	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">User Role
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
	  <li><a href="/roles/actor/Guest">Guest</a></li>
	  <li><a href="/roles/actor/Worker">Worker</a></li>
	  <li><a href="/roles/actor/Supervisor">Supervisor</a></li>
	  <li><a href="/roles/actor/Boss">Boss</a></li>
	</ul>
</div>