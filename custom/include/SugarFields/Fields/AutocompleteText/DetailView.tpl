<script src="custom/include/SugarFields/Fields/AutocompleteText/js/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="custom/include/SugarFields/Fields/AutocompleteText/css/chosen.min.css">

{if strlen({{sugarvar key='value' string=true}}) <= 0}
    {assign var="value" value={{sugarvar key='default_value' string=true}} }
{else}
    {assign var="value" value={{sugarvar key='value' string=true}} }
{/if}
{assign var="optgrps" value={{sugarvar key='options' string=true foo=bar}} }
{assign var="value" value='&'|explode:$value }

<select disabled="disabled" type='text' name='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}'
       id='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}'
       size='{{$displayParams.size|default:30}}'
       {{if isset($displayParams.maxlength)}}maxlength='{{$displayParams.maxlength}}'{{elseif isset($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}}
       value='{$value}' title='{{$vardef.help}}' {{if !empty($tabindex)}} tabindex='{{$tabindex}}' {{/if}}
        {{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}} key='{{$atk}}'
  data-placeholder="Choose a Country..." class="chosen-select" multiple tabindex="4">
          {foreach from=$optgrps key=kg item=vg}
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
        {{$displayParams.idName}}{{/if}}{literal}').chosen();
          console.log("NOW DISPLAYING #{/literal}{{sugarvar key='name'}}{literal}");
    });
    {/literal}
</script>