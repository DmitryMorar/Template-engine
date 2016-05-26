<?php
/* Smarty version 3.1.30-dev/64, created on 2016-05-18 13:20:10
  from "D:\Server\data\htdocs\day-1\www\views\templates\my-profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/64',
  'unifunc' => 'content_573c4fea64a179_85802779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '948e3c64e3325ddd222d93bb89dce86f77a51c62' => 
    array (
      0 => 'D:\\Server\\data\\htdocs\\day-1\\www\\views\\templates\\my-profile.tpl',
      1 => 1463570405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_573c4fea64a179_85802779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_title_26337573c4fea618a51_60132709($_smarty_tpl);
?>


<?php 
new Block_main_content_3078573c4fea646ab7_47493711($_smarty_tpl);
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} D:\Server\data\htdocs\day-1\www\views\templates\my-profile.tpl */
class Block_title_26337573c4fea618a51_60132709 extends Smarty_Internal_Block
{
public $name = "title";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DAY 26 My Profile<?php
}
}
/* {/block 'title'} */
/* {block 'main_content'} D:\Server\data\htdocs\day-1\www\views\templates\my-profile.tpl */
class Block_main_content_3078573c4fea646ab7_47493711 extends Smarty_Internal_Block
{
public $name = "main_content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--left column-->
    <div class="left-col">
        <div class="block-user">

            <img class="block-user_avatar" src="<?php echo $_smarty_tpl->tpl_vars['linkUserAvatar']->value;?>
" alt="User-avatar">
            <ul class="block-user_list">
                <li class="block-user_list_name"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</li>
                <li class="block-user_list_post"><?php echo $_smarty_tpl->tpl_vars['user']->value['position'];?>
</li>
                <li class="block-user_list_address"><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</li>
            </ul>
        </div>

            <div class="block-summary">
                <h2 class="content-title"><span>Personal Summary</span></h2>
                <table class="content-table features">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userFeatures']->value, 'features');
foreach ($_from as $_smarty_tpl->tpl_vars['features']->value) {
$_smarty_tpl->tpl_vars['features']->_loop = true;
$__foreach_features_0_saved = $_smarty_tpl->tpl_vars['features'];
?>
                        <tr>
                            <td class="label"><?php echo $_smarty_tpl->tpl_vars['features']->value['label'];?>
</td>
                            <td class="value"><?php echo $_smarty_tpl->tpl_vars['features']->value['value'];?>
</td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['features'] = $__foreach_features_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </table>
            </div>

            <div class="block-bio">
                <h2 class="content-title"><span>Bio</span></h2>
                <p><?php echo $_smarty_tpl->tpl_vars['userBio']->value['content'];?>
</p>
            </div>
    </div>
    <!--right column-->
    <div class="right-col offset-right">
        <div class="edit-profile">
            <a class="edit-profile_lk" href="#">Edit profile</a>
        </div>
        <div class="block-address">
            <h2 class="content-title"><span>Personal Address</span></h2>
            <table class="content-table address">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userAddress']->value, 'address');
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
$__foreach_address_1_saved = $_smarty_tpl->tpl_vars['address'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['address']->value['label'] == 'email' || $_smarty_tpl->tpl_vars['address']->value['label'] == 'private email') {?>
                        <tr>
                            <td class="label"><?php echo $_smarty_tpl->tpl_vars['address']->value['label'];?>
</td>
                            <td class="value"><a href="mailto:"><?php echo $_smarty_tpl->tpl_vars['address']->value['value'];?>
</a></td>
                        </tr>
                    <?php } else { ?>
                        <tr>
                            <td class="label"><?php echo $_smarty_tpl->tpl_vars['address']->value['label'];?>
</td>
                            <td class="value"><?php echo $_smarty_tpl->tpl_vars['address']->value['value'];?>
</td>
                        </tr>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['address'] = $__foreach_address_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
            </table>
        </div>
    </div>
<?php
}
}
/* {/block 'main_content'} */
}
