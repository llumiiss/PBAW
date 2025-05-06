<!DOCTYPE HTML>
<html>
<head>
	<title>Database application</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="{$page_description|default:'Opis domyślny'}">
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">
<!-- Header -->
<header id="header">
	<h1>Database application</h1>
</header>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Lista</a>
	{if count($conf->roles)>0}
		<a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
	{else}
		<a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
	{/if}
</div>
<!-- Signup Form -->

{block name = top} {/block}

{block name=messages}

	{if $msgs->isError()}
		<div class="messages error bottom-margin">
			<ul>
				{foreach $msgs->getErrors() as $msg}
					{strip}
						<li>{$msg}</li>
					{/strip}
				{/foreach}
			</ul>
		</div>
	{/if}

	{if $msgs->isInfo()}
		<div class="messages info bottom-margin">
			<ul>
				{foreach $msgs->getInfos() as $msg}
					{strip}
						<li>{$msg}</li>
					{/strip}
				{/foreach}
			</ul>
		</div>
	{/if}

{/block}
<!-- Footer -->
<footer id="footer" style="position: fixed; bottom: 0; left: 0; width: 100%; background: #111; color: #fff; padding: 1em 0; text-align: center; z-index: 1000;">
	<ul class="icons" style="margin: 0; padding: 0; list-style: none; display: flex; justify-content: center; gap: 1em;">
		<li><a href="https://www.instagram.com/llumiiss/" class="icon brands fa-instagram" style="color: #fff;"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/llumiiss" class="icon brands fa-github" style="color: #fff;"><span class="label">GitHub</span></a></li>
		<li><a href="https://kudlacik.eu/projekty-php" class="icon fa-envelope" style="color: #fff;"><span class="label">Email</span></a></li>
	</ul>
	<ul class="copyright" style="margin-top: 0.5em; padding: 0; list-style: none; font-size: 0.8em;">
		<li>&copy; lumiiss</li>
		<li>Credits: <a href="http://html5up.net" style="color: #ccc;">HTML5 UP</a></li>
	</ul>
</footer>


<!-- Scripts -->
<script src="assets/js/main.js"></script>

{block name=bottom} {/block}

</body>
</html>