<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.759650009090816" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.519189090118011" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7754116654700569" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7775875951177265" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.831902484164099" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5929018874596066" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9542969127415435"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.28808917583343274" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2336187987872682">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8979807607473693">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.0035165393682823343">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.37064799475569554">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2213798047319746"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8945785180216856"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2470201116877524"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6541635381445527"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.736004250185015"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7455584582665036"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9380600389897578"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6899900428749111"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.534702990389575"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5753296218057729"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8268373943885097"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.499713927067553"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.23390109448242646"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8366785730413715"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.00981198964858998"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8228782443835929"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9139740736308362"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5014165318841222"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5647027460919247"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
