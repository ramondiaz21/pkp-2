<?php
/* Smarty version 4.3.1, created on 2025-02-20 18:10:18
  from 'app:frontendcomponentsregistrationForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67b7c46ac74c67_09359239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea4d98dd922416eabba9bb0a4e8286e214a0ca4' => 
    array (
      0 => 'app:frontendcomponentsregistrationForm.tpl',
      1 => 1740096469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b7c46ac74c67_09359239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pkp-2\\omp-3.4.0-8\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<fieldset class="identity">
	<legend>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.profile"),$_smarty_tpl ) );?>

	</legend>
	<div class="fields">
		<div class="given_name">
			<label>
				<span class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.givenName"),$_smarty_tpl ) );?>

					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

					</span>
				</span>
				<input type="text" class="form-control" name="givenName" autocomplete="given-name" id="givenName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['givenName']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
" maxlength="255" required aria-required="true">
			</label>
		</div>
		<div class="family_name">
			<label>
				<span class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.familyName"),$_smarty_tpl ) );?>

				</span>
				<input type="text" class="form-control" name="familyName" autocomplete="family-name" id="familyName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['familyName']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
" maxlength="255">
			</label>
		</div>
		<div class="affiliation">
			<label>
				<span class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.affiliation"),$_smarty_tpl ) );?>

					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

					</span>
				</span>
				<input type="text" class="form-control" name="affiliation" autocomplete="organization" id="affiliation" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['affiliation']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
" required aria-required="true">
			</label>
		</div>
		<div class="country">
			<label>
				<span class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.country"),$_smarty_tpl ) );?>

					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

					</span>
				</span>
				<select name="country" class="form-control" id="country" autocomplete="country-name" required aria-required="true">
					<option></option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['countries']->value,'selected'=>$_smarty_tpl->tpl_vars['country']->value),$_smarty_tpl);?>

				</select>
			</label>
		</div>
	</div>
</fieldset>

<fieldset class="login">
	<legend>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login"),$_smarty_tpl ) );?>

	</legend>
	<div class="fields">
		<div class="email">
			<label>
				<span class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.email"),$_smarty_tpl ) );?>

					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

					</span>
				</span>
				<input type="email" class="form-control" name="email" id="email" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['email']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
" maxlength="90" required aria-required="true" autocomplete="email">
			</label>
		</div>
		<div class="username">
			<label>
				<span class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.username"),$_smarty_tpl ) );?>

					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

					</span>
				</span>
				<input type="text" class="form-control" name="username" id="username" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['username']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
" maxlength="32" required aria-required="true" autocomplete="username">
			</label>
		</div>
		<div class="password">
			<label>
				<span class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.password"),$_smarty_tpl ) );?>

					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

					</span>
				</span>
				<input type="password" class="form-control" name="password" id="password" password="true" maxlength="32" required aria-required="true" autocomplete="new-password">
			</label>
		</div>
		<div class="password">
			<label>
				<span class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.repeatPassword"),$_smarty_tpl ) );?>

					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

					</span>
				</span>
				<input type="password" class="form-control" name="password2" id="password2" password="true" maxlength="32" required aria-required="true" autocomplete="new-password">
			</label>
		</div>
	</div>
</fieldset>
<?php }
}
