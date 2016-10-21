<!-- variable -->
{$bool}<br>
{$int}<br>
{$float}<br>
{$string}<br>
{$array.0} {*$array[0] *}<br>
{$object->string}<br>
<hr>

<!-- modifier -->
{$smarty.now|date_format:"%d.%m.%Y"}
<hr>

<!-- foreach -->
<table>
    {foreach from="$array" key="k" item="v"}
        <tr>
            <td>{$k}</td>
            <td>{$v}</td>
        </tr>
    {/foreach}
</table>
<hr>

<!-- if else -->
{if $int == 123}
    true
{else}
    false
{/if}
<br>

<!--
== eq   != ne
>  gt   <  lt
>= ge   <= le
-->

{if $int eq 123}
    true
{else}
    false
{/if}
<hr>

<!-- include -->
{include file="example2.tpl" title="test"}
<hr>

<!-- strip (убирает все пробелы и переносы строк как </span><span>)-->
{strip}
    <span>test</span>
    <span>123</span>
{/strip}
<hr>

<!-- assign -->
{assign var="string" value="test123"}
{$string}
<hr>

<!-- capture -->
{capture name="ttl"}
    {strip}
        Последние новости на {$smarty.now|date_format:"%d.%m.%Y"}
    {/strip}
{/capture}

{include file="example3.tpl" title=$smarty.capture.ttl}
<h1>{$smarty.capture.ttl}</h1>
<hr>

<!-- cycle -->
<table width="100%">
    <tr bgcolor="{cycle values="#DDDDDD,#CCCCCC"}">
        <td>Первая строка.</td>
    </tr>
    <tr bgcolor="{cycle}">
        <td>Вторая строка.</td>
    </tr>
    <tr bgcolor="{cycle}">
        <td>Третья строка.</td>
    </tr>
</table>