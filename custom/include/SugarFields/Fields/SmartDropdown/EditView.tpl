
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
{if strlen({{sugarvar key='isMultiSelect' string=true}}) == 1}
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
        onchange="updateHidden(event)"
        >
  {foreach from=$opts key=kg item=vg}
    {if is_array($vg)}
    <optgroup label='{$kg}'>
      {foreach from=$vg key=k item=v}
        <option value="{$k}" {if in_array($k, $value)} selected {/if}>{$v}</option>
      {/foreach}
    </optgroup>
    {else}
      <option value="{$kg}" {if in_array($kg, $value)} selected {/if}>{$vg}</option>
    {/if}
  {/foreach}
</select>

{assign var="last_char" value='{{$vardef.help|substr:-1}}' }
<div class='help-text' attr-content='{if {{$vardef.help|count_characters}} > 0}{1}{else}{0}{/if}' prefix='{if $last_char == '?'}{{"Q"}}{else}{{"C"}}{/if}' title='{if $last_char == '?'}{{"Question à laquelle répondre"}}{else}{{"Conseil relatif à la réponse"}}{/if}'> 
  {{$vardef.help}}
</div>
<input type="hidden" id='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}'
  name='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}' value="666" />
        
<script>
    {literal}
    $(document).ready(function(){
        $('#{/literal}{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}
        {{$displayParams.idName}}{{/if}}{literal}').chosen({
          allow_single_deselect: true
        }).trigger('chosen:open');
          console.log("NOW EDITING #{/literal}{{sugarvar key='name'}}{literal}");
    });
    
    function updateHidden(event) {
      $target = $(event.target);
      var name = $target.prop('name');
      $hidden = $('[name="' + name + '"][type="hidden"]' );
      if ( $hidden.length ) {
        var val = $target.val().join('&');
        $hidden.val(val);
        console.log("Hidden field updated");
      }
    }
    {/literal}
</script>