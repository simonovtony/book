{* Шаблон новостей *}
{include file="inc/header.tpl" title="Последние новости"}
<h1>Последние новости на {$smarty.now|date_format:"%d.%m.%Y"}</h1>
<ul>
    {foreach from="$news" item="n"}
        <li style="background: {cycle values="#eeeeee,#d0d0d0"}">
            <b>{$n.date}</b> {$n.text}
        </li>
    {/foreach}
</ul>
{include file="inc/footer.tpl"}