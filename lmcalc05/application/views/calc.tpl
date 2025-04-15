{extends file="application/views/templates/main.tpl"}

{block name = content}

<section id="main" class="wrapper">

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


    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

        {* wyświeltenie listy błędów, jeśli istnieją *}
        {if $msgs->isError()}
        <h4>Wystąpiły błędy: </h4>
        <ol class="err">
            {foreach $msgs->getErrors() as $err}
            {strip}
            <li>{$err}</li>
            {/strip}
            {/foreach}
        </ol>
        {/if}

        {* wyświeltenie listy informacji, jeśli istnieją *}
        {if $msgs->isInfo()}
        <h4>Informacje: </h4>
        <ol class="inf">
            {foreach $msgs->getInfos() as $inf}
            {strip}
            <li>{$inf}</li>
            {/strip}
            {/foreach}
        </ol>
        {/if}

        {if isset($res->month_quot)}
            <h4>Wynik</h4>
            <p class="res">
                {$res->month_quot}
            </p>
        {/if}



    </div>
</section>
{/block}