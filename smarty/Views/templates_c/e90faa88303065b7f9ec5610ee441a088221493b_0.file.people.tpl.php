<?php
/* Smarty version 3.1.30-dev/64, created on 2016-05-18 10:38:00
  from "D:\Server\data\htdocs\day-1\www\smarty\views\templates\people.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/64',
  'unifunc' => 'content_573c29e86f50e4_25490405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e90faa88303065b7f9ec5610ee441a088221493b' => 
    array (
      0 => 'D:\\Server\\data\\htdocs\\day-1\\www\\smarty\\views\\templates\\people.tpl',
      1 => 1463560639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_573c29e86f50e4_25490405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_title_6256573c29e86c80d4_04638232($_smarty_tpl);
?>


<?php 
new Block_nav_menu_people_14313573c29e86cbfe1_06088034($_smarty_tpl);
?>


<?php 
new Block_nav_menu_profile_31854573c29e86cfc02_59981895($_smarty_tpl);
?>


<?php 
new Block_main_content_12047573c29e86f2c60_89199467($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\people.tpl */
class Block_title_6256573c29e86c80d4_04638232 extends Smarty_Internal_Block
{
public $name = "title";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
People<?php
}
}
/* {/block 'title'} */
/* {block 'nav_menu_people'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\people.tpl */
class Block_nav_menu_people_14313573c29e86cbfe1_06088034 extends Smarty_Internal_Block
{
public $name = "nav_menu_people";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="menu-list_i __active"><a class="menu-list_i_lk ic-people"
                                        href="/smarty/controllers/people.php">People</a></li>
<?php
}
}
/* {/block 'nav_menu_people'} */
/* {block 'nav_menu_profile'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\people.tpl */
class Block_nav_menu_profile_31854573c29e86cfc02_59981895 extends Smarty_Internal_Block
{
public $name = "nav_menu_profile";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="menu-list_i"><a class="menu-list_i_lk ic-people"
                               href="/smarty">My Profile</a></li>
<?php
}
}
/* {/block 'nav_menu_profile'} */
/* {block 'main_content'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\people.tpl */
class Block_main_content_12047573c29e86f2c60_89199467 extends Smarty_Internal_Block
{
public $name = "main_content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="employee-table-wrap">
        <table class="content-table employee-table">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peopleList']->value, 'people');
foreach ($_from as $_smarty_tpl->tpl_vars['people']->value) {
$_smarty_tpl->tpl_vars['people']->_loop = true;
$__foreach_people_0_saved = $_smarty_tpl->tpl_vars['people'];
?>
                <tr class="employee">
                    <td class="employee_avatar">
                        <img src="/smarty/content/img/avatar.jpg" alt="avatar">
                    </td>
                    <td class="employee_name">
                        <h2><?php echo $_smarty_tpl->tpl_vars['people']->value['name']['first'];?>
 <?php echo $_smarty_tpl->tpl_vars['people']->value['name']['last'];?>
</h2>
                        <p><span>age: </span><?php echo $_smarty_tpl->tpl_vars['people']->value['age'];?>
</p>
                        <p><span>company: </span><?php echo $_smarty_tpl->tpl_vars['people']->value['company'];?>
</p>
                        <p><span>registered: </span><?php echo $_smarty_tpl->tpl_vars['people']->value['registered'];?>
</p>
                    </td>
                    <td class="employee_address">
                        <p><span>phone: </span><?php echo $_smarty_tpl->tpl_vars['people']->value['phone'];?>
</p>
                        <p><span>email: </span><a href="mailto:"><?php echo $_smarty_tpl->tpl_vars['people']->value['email'];?>
</a></p>
                        <p><span>address: </span><?php echo $_smarty_tpl->tpl_vars['people']->value['address'];?>
</p>
                    </td>
                    <td class="employee_about">
                        <h2>About</h2>
                        <p><?php echo $_smarty_tpl->tpl_vars['people']->value['about'];?>
</p>
                    </td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['people'] = $__foreach_people_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
        </table>
    </div>
<?php
}
}
/* {/block 'main_content'} */
}
