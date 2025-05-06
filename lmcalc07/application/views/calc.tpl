{extends file="application/views/templates/main.tpl"}

{block name = content}

<section id="main" class="wrapper">

    <div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="index.php?action=logout" class="pure-menu-heading pure-menu-link">Logout</a>
        <span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
    </div>
        <form class="pure-form pure-form-stacked" action="index.php?action=calcCompute" method="post">
            <fieldset>

                <label for="id_quota">Quota: </label>
                <input id="id_quota" type="text" name="quota" value="{$form->quota}" placeholder="1,000-5,000,000(PLN)" /><br />
                <label for="id_time">Time:  </label>
                <input id="id_time" type="text" name="time" value="{$form->time}" placeholder="For how long(months)(1-420)" /><br />
                <label for="id_stake">Stake: </label>
                <input id="id_stake" type="text" name="stake" value="{$form->stake}" placeholder="0%-700%" /><br />
                <input type="submit" value="Calculate" />

            </fieldset>
        </form>

    {include file='application/views/templates/messages.tpl'}
    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">
        {if isset($res->month_quot)}
            <div class="messages inf">
                Wynik: {$res->month_quot}
            </div>
        {/if}

</section>
{/block}