<?php
/* Smarty version 3.1.30-dev/64, created on 2016-05-18 13:18:14
  from "D:\Server\data\htdocs\day-1\www\views\templates\people.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/64',
  'unifunc' => 'content_573c4f76983012_32178923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f23e3aee616f536ee4ace67a97362f19b810268' => 
    array (
      0 => 'D:\\Server\\data\\htdocs\\day-1\\www\\views\\templates\\people.tpl',
      1 => 1463564263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_573c4f76983012_32178923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_title_3651573c4f769608e7_99839198($_smarty_tpl);
?>


<li class="menu-list_i <?php echo $_smarty_tpl->tpl_vars['peopleActive']->value;?>
"><a class="menu-list_i_lk ic-people" href="">People</a></li>

<?php 
new Block_main_content_11456573c4f76980bc2_08412798($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} D:\Server\data\htdocs\day-1\www\views\templates\people.tpl */
class Block_title_3651573c4f769608e7_99839198 extends Smarty_Internal_Block
{
public $name = "title";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DAY 26 People<?php
}
}
/* {/block 'title'} */
/* {block 'main_content'} D:\Server\data\htdocs\day-1\www\views\templates\people.tpl */
class Block_main_content_11456573c4f76980bc2_08412798 extends Smarty_Internal_Block
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
                        <img src="/content/img/avatar.jpg" alt="avatar">
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
