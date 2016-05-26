<?php
/* Smarty version 3.1.30-dev/64, created on 2016-05-18 10:37:56
  from "D:\Server\data\htdocs\day-1\www\smarty\views\templates\my-profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/64',
  'unifunc' => 'content_573c29e4eaa9f7_66616285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac133bf68245e62db9cfcf44267b1cd52f0ebcd3' => 
    array (
      0 => 'D:\\Server\\data\\htdocs\\day-1\\www\\smarty\\views\\templates\\my-profile.tpl',
      1 => 1463560639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_573c29e4eaa9f7_66616285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_title_15806573c29e4e61a84_87533806($_smarty_tpl);
?>


<?php 
new Block_nav_menu_people_24095573c29e4e65189_62646779($_smarty_tpl);
?>


<?php 
new Block_main_content_18070573c29e4ea8d64_88973062($_smarty_tpl);
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\my-profile.tpl */
class Block_title_15806573c29e4e61a84_87533806 extends Smarty_Internal_Block
{
public $name = "title";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Profile<?php
}
}
/* {/block 'title'} */
/* {block 'nav_menu_people'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\my-profile.tpl */
class Block_nav_menu_people_24095573c29e4e65189_62646779 extends Smarty_Internal_Block
{
public $name = "nav_menu_people";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="menu-list_i"><a class="menu-list_i_lk ic-people"
                               href="/smarty/controllers/people.php">People</a></li>
<?php
}
}
/* {/block 'nav_menu_people'} */
/* {block 'block_user_avatar'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\my-profile.tpl */
class Block_block_user_avatar_13676573c29e4e6c629_63827058 extends Smarty_Internal_Block
{
public $name = "block_user_avatar";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <img class="block-user_avatar" src="/smarty/content/img/lg-avatar.png" alt="User-avatar"/>
                <?php
}
}
/* {/block 'block_user_avatar'} */
/* {block 'block_user'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\my-profile.tpl */
class Block_block_user_22325573c29e4e77de1_72379928 extends Smarty_Internal_Block
{
public $name = "block_user";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="block-user">
                <?php 
new Block_block_user_avatar_13676573c29e4e6c629_63827058($_smarty_tpl, $this->tplIndex);
?>

                <ul class="block-user_list">
                    <li class="block-user_list_name"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</li>
                    <li class="block-user_list_post"><?php echo $_smarty_tpl->tpl_vars['user']->value['position'];?>
</li>
                    <li class="block-user_list_address"><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</li>
                </ul>
            </div>
        <?php
}
}
/* {/block 'block_user'} */
/* {block 'features'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\my-profile.tpl */
class Block_features_30666573c29e4e8af18_42316547 extends Smarty_Internal_Block
{
public $name = "features";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                    <?php
}
}
/* {/block 'features'} */
/* {block 'block_summary'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\my-profile.tpl */
class Block_block_summary_15675573c29e4e8c913_76581488 extends Smarty_Internal_Block
{
public $name = "block_summary";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="block-summary">
                <h2 class="content-title"><span>Personal Summary</span></h2>
                <table class="content-table features">
                    <?php 
new Block_features_30666573c29e4e8af18_42316547($_smarty_tpl, $this->tplIndex);
?>

                </table>
            </div>
        <?php
}
}
/* {/block 'block_summary'} */
/* {block 'block_bio'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\my-profile.tpl */
class Block_block_bio_15448573c29e4e91752_81168249 extends Smarty_Internal_Block
{
public $name = "block_bio";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="block-bio">
                <h2 class="content-title"><span>Bio</span></h2>
                <p><?php echo $_smarty_tpl->tpl_vars['userBio']->value['content'];?>
</p>
            </div>
        <?php
}
}
/* {/block 'block_bio'} */
/* {block 'user_address'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\my-profile.tpl */
class Block_user_address_12721573c29e4ea6d82_64305175 extends Smarty_Internal_Block
{
public $name = "user_address";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                <?php
}
}
/* {/block 'user_address'} */
/* {block 'main_content'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\my-profile.tpl */
class Block_main_content_18070573c29e4ea8d64_88973062 extends Smarty_Internal_Block
{
public $name = "main_content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--left column-->
    <div class="left-col">
        <?php 
new Block_block_user_22325573c29e4e77de1_72379928($_smarty_tpl, $this->tplIndex);
?>


        <?php 
new Block_block_summary_15675573c29e4e8c913_76581488($_smarty_tpl, $this->tplIndex);
?>


        <?php 
new Block_block_bio_15448573c29e4e91752_81168249($_smarty_tpl, $this->tplIndex);
?>

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
new Block_user_address_12721573c29e4ea6d82_64305175($_smarty_tpl, $this->tplIndex);
?>

            </table>
        </div>
    </div>
<?php
}
}
/* {/block 'main_content'} */
}
