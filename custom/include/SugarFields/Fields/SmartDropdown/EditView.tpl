
<script src="custom/include/SugarFields/Fields/SmartDropdown/js/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="custom/include/SugarFields/Fields/SmartDropdown/css/chosen.min.css">
<link rel="stylesheet" href="custom/include/SugarFields/Fields/SmartDropdown/css/custom.css">

{if strlen({{sugarvar key='value' string=true}}) <= 0}
    {assign var="value" value={{sugarvar key='default_value' string=true}} }
{else}
    {assign var="value" value={{sugarvar key='value' string=true}} }
{/if}

{assign var="opts" value={{sugarvar key='options' string=true}} }
{assign var="value" value='&'|explode:$value string=true}
{if strlen({{sugarvar key='smart_dropdown__multiselect' string=true}}) == 1}
    {assign var="mult" value="multiple" }
    {assign var="chosen_placeholder" value=$APP.LBL_CHOSEN_JS_PLACEHOLDER_MULTIPLE }
{else}
    {assign var="mult" value="" }
    {assign var="chosen_placeholder" value=$APP.LBL_CHOSEN_JS_PLACEHOLDER_SINGLE }
{/if}

<select {$mult} 
  id='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}'
  name='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}'
        data-placeholder='{$chosen_placeholder}' class="chosen-select" tabindex="4"
        type='{{if empty($displayParams.type)}}{{sugarvar key='type'}}{{else}}{{$displayParams.type}}{{/if}}'
        >
  {foreach from=$opts key=kg item=vg}
    {if is_array($vg)}
    <optgroup label='{$kg}'>
      {foreach from=$vg key=k item=v}
        <option value="{$k}" {if in_array($k, $value)} selected {/if}>{$v}</option>
      {/foreach}
    </optgroup>
    {else}
      <option value="{$kg}">{$vg}</option>
    {/if}
  {/foreach}
</select>
        
<script>
    {literal}
    $(document).ready(function(){
        $('#{/literal}{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}
        {{$displayParams.idName}}{{/if}}{literal}').chosen({
          allow_single_deselect: true
        }).trigger('chosen:open');
          console.log("NOW EDITING #{/literal}{{sugarvar key='name'}}{literal}");
    });
    {/literal}
</script>