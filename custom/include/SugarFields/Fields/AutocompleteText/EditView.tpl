
<script src="custom/include/SugarFields/Fields/AutocompleteText/js/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="custom/include/SugarFields/Fields/AutocompleteText/css/chosen.min.css">

{if strlen({{sugarvar key='value' string=true}}) <= 0}
    {assign var="value" value={{sugarvar key='default_value' string=true}} }
{else}
    {assign var="value" value={{sugarvar key='value' string=true}} }
{/if}

{assign var="opts" value={{sugarvar key='options' string=true}} }
{assign var="value" value='&'|explode:$value string=true}
{assign var="mult" value={{sugarvar key='autocomplete_text__multiselect' string=true}} }

<select fooz='{$mult}' id='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}'
        data-placeholder="Choose a Country..." class="chosen-select" tabindex="4">
  {foreach from=$opts key=kg item=vg}
    {if is_array($vg)}
    <optgroup label='{$kg}'>
      {foreach from=$vg key=k item=v}
        <option value="{$k}" {if in_array($k, $value)} selected {/if}>{$v}</option>
      {/foreach}
    </optgroup>
    {/if}
  {/foreach}
</select>
        
<script>
    {literal}
    $(document).ready(function(){
        $('#{/literal}{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}
        {{$displayParams.idName}}{{/if}}{literal}').chosen({
          allow_single_deselect: true
        });
          console.log("NOW EDITING #{/literal}{{sugarvar key='name'}}{literal}");
    });
    {/literal}
</script>