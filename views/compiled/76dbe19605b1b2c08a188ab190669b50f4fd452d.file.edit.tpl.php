<?php /* Smarty version Smarty-3.1.18, created on 2016-11-01 14:17:55
         compiled from "views\cms\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:623658186de92bf4b7-73421016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76dbe19605b1b2c08a188ab190669b50f4fd452d' => 
    array (
      0 => 'views\\cms\\edit.tpl',
      1 => 1478006272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '623658186de92bf4b7-73421016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58186de972fbc7_87181093',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58186de972fbc7_87181093')) {function content_58186de972fbc7_87181093($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\school\\jaar2\\Projects\\My_band2\\libs\\plugins\\modifier.date_format.php';
?><?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<div class="newsarticles_edit_item">
  <h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h3>
  <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p>
  <br><img src='images/upload/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
' alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
">
<h3><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%A, %B %e, %Y");?>
</h3>

<form action='' method="post">
    <input type="hidden" name="id_delete" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">
    <input type="submit" name="submit_delete" value="Delete">
</form>

</div>
<form class="" action="" method="post" enctype="multipart/form-data">
<input type="text" name="new_newsarticleTitle" value="" placeholder="newsarticle title"><br>
<input type="text" name="new_content" value="" placeholder="new content"><br>
<input type='file' name='file_upload' id='newsarticle_fileToUpload'><br>
<input type="submit" name="submit_new_newsarticle" value="submit changes">
</form>
<?php } ?><?php }} ?>
