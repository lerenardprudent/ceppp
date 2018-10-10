
{if empty($fields.experience_maladie_c.value)}
{assign var="value" value=$fields.experience_maladie_c.default_value }
{else}
{assign var="value" value=$fields.experience_maladie_c.value }
{/if}




<textarea  id='{$fields.experience_maladie_c.name}' name='{$fields.experience_maladie_c.name}'
rows="2"
cols="32"
title='' tabindex="1" 
 >{$value}</textarea>


{literal}{/literal}