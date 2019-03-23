{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

*}

<script src="custom/include/SugarFields/Fields/BlockingRadioenum/js/blockingradioenum.js"></script>
<link rel="stylesheet" href="custom/include/SugarFields/Fields/BlockingRadioenum/css/blockingradioenum.css">
{if empty({{sugarvar key='value' string=true}})}
{assign var="value" value={{sugarvar key='default_value' string=true}} }
{else}
{assign var="value" value={{sugarvar key='value' string=true}} }
{/if}
{capture name=idname assign=idname}{{sugarvar key='name'}}{/capture}
{{if !empty($displayParams.idName)}}
    {assign var=idname value='{{$displayParams.idName}}'}
{{/if}}

{assign var="val" value={{sugarvar key='value' string=true}} }
{if $val == "0" || $val == "non"}
  {assign var="consentwithdrawn" value='1' }
{else}
  {assign var="consentwithdrawn" value='0' }
{/if}

{assign var="blockedlabel" value="{{$APP.LBL_CONSENT__EDIT_BLOCKED}}" }
{assign var="helptext" value='{{$vardef.help}}' string=true }
{if $lang == "en"} {assign var="helptext" value='{{$vardef.help_en}}' } {/if}

{if isset({{sugarvar key='value' string=true}}) && {{sugarvar key='value' string=true}} != ''}
        {html_radios id="$idname" class='blocking-radioenum' consentwithdrawn="$consentwithdrawn" onclick="consent_change(event)" {{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}}   name="$idname" title="{{$vardef.help}}" options={{sugarvar key='options' string=true}} selected={{sugarvar key='value' string=true}} separator="{{$vardef.separator}}" blockedlabel="$blockedlabel" }
{else}
        {html_radios id="$idname" class='blocking-radioenum' consentwithdrawn="$consentwithdrawn"  onclick="consent_change(event)" {{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}}  name="$idname" title="{{$vardef.help}}" options={{sugarvar key='options' string=true}} selected={{sugarvar key='default' string=true}} separator="{{$vardef.separator}}" blockedlabel="$blockedlabel" }
{/if}

<div class='help-text'>
  {$helptext}
</div>