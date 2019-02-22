<script src="custom/include/SugarFields/Fields/AutocompleteText/js/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="custom/include/SugarFields/Fields/AutocompleteText/css/chosen.min.css">

{if strlen({{sugarvar key='value' string=true}}) <= 0}
    {assign var="value" value={{sugarvar key='default_value' string=true}} }
{else}
    {assign var="value" value={{sugarvar key='value' string=true}} }
{/if}
{assign var="opts" value={{sugarvar key='options' string=true foo=bar}} }
{assign var="value" value='&'|explode:$value }
{if count($value) > 1}
  <select multiple disabled>
    {foreach from=$value item=v}
      {assign var="label" value=$opts|@array_column:$v }
      <option>{$label[0]}</option>
    {/foreach}
  </select>
{else}
  {foreach from=$value item=v}
    {assign var="label" value=$opts|@array_column:$v }
    <span disabled value="{$v}">{$label[0]}</span>
  {/foreach}
{/if}