{extends file="application/views/templates/main.tpl"}

{block name=top}
	<form action="index.php?action=login" method="post" class="pure-form pure-form-aligned">

	<legend>Login into system</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="{$form->login}" />
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" value="{$form->pass}" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>

{/block}
