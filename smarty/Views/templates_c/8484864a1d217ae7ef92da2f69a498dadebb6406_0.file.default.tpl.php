<?php
/* Smarty version 3.1.30-dev/64, created on 2016-05-18 10:38:00
  from "D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/64',
  'unifunc' => 'content_573c29e879ea41_09469495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8484864a1d217ae7ef92da2f69a498dadebb6406' => 
    array (
      0 => 'D:\\Server\\data\\htdocs\\day-1\\www\\smarty\\views\\templates\\default.tpl',
      1 => 1463560639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573c29e879ea41_09469495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <head>
        <?php 
new Block_head_29050573c29e877a087_95824387($_smarty_tpl);
?>

    </head>
    <body>
        <div class="wrapper">
            <!--HEADER-->
            <header class="main-header">
                <?php 
new Block_header_11078573c29e878bb32_35059980($_smarty_tpl);
?>

            </header>

            <!--MAIN BLOCK-->
            <div class="flex-container">
                <!--NAV MENU-->
                <div class="nav-menu">
                    <div class="menu"><a class="switch-close" href="#"></a>
                        <?php 
new Block_nav_menu_10333573c29e8797ad2_02065060($_smarty_tpl);
?>

                    </div>
                </div>

                <!--MAIN CONTENT-->
                <main class="main-content">
                    <div class="top-line">
                        <ul class="top-line_nav-tabs">
                            <li class="nav-tabs_i __active"><a class="nav-tabs_i_lk" href="#">My Profile</a></li>
                            <li class="nav-tabs_i"><a class="nav-tabs_i_lk" href="#">Account Settings</a></li>
                        </ul>
                        <div class="top-line_switch">
                            <a class="top-line_switch_lk" href="#"></a>
                        </div>
                    </div>
                    <div class="content">
                        <?php 
new Block_main_content_13778573c29e879c399_00730689($_smarty_tpl);
?>

                    </div>
                </main>
            </div>
        </div>
    </body>
</html><?php }
/* {block 'title'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl */
class Block_title_27045573c29e8778368_40646412 extends Smarty_Internal_Block
{
public $name = "title";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'head'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl */
class Block_head_29050573c29e877a087_95824387 extends Smarty_Internal_Block
{
public $name = "head";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <title><?php 
new Block_title_27045573c29e8778368_40646412($_smarty_tpl, $this->tplIndex);
?>
</title>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'/>
            <link href="/smarty/content/css/main.css" rel="stylesheet"/>
            <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php
}
}
/* {/block 'head'} */
/* {block 'link_logo'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl */
class Block_link_logo_11563573c29e877fcb8_66964279 extends Smarty_Internal_Block
{
public $name = "link_logo";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <a class="bottom-logo_lk" href="#"><img src="/smarty/content/img/logo.png" alt="logo"/></a>
                            <?php
}
}
/* {/block 'link_logo'} */
/* {block 'icon_btn'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl */
class Block_icon_btn_1416573c29e8783815_90547630 extends Smarty_Internal_Block
{
public $name = "icon_btn";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <img src="/smarty/content/img/icon-search.png" alt="icon"/>
                                        <?php
}
}
/* {/block 'icon_btn'} */
/* {block 'user_panel'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl */
class Block_user_panel_31521573c29e8789677_49544697 extends Smarty_Internal_Block
{
public $name = "user_panel";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="user-panel">
                                <div class="user-panel_messages">
                                    <a href="#" class="user-panel_messages_icon"></a>
                                    <span class="user-panel_messages_figure"><?php echo $_smarty_tpl->tpl_vars['messageNumber']->value;?>
</span>
                                </div>
                                <div class="user-panel_info">
                                    <span class="user-panel_info_name"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</span>
                                    <span class="user-panel_info_avatar"></span>
                                    <a href="#" class="user-panel_info_toggle"></a>
                                </div>
                            </div>
                        <?php
}
}
/* {/block 'user_panel'} */
/* {block 'header'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl */
class Block_header_11078573c29e878bb32_35059980 extends Smarty_Internal_Block
{
public $name = "header";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="top-logo">
                        <a class="top-logo_lk" href="#">San Francisco<br>Bio Week 2016</a>
                    </div>
                    <div class="bottom-line">
                        <div class="bottom-logo">
                            <?php 
new Block_link_logo_11563573c29e877fcb8_66964279($_smarty_tpl, $this->tplIndex);
?>

                        </div>
                        <div class="search-form">
                            <form class="field-it">
                                <label for="example1"></label>
                                <input class="it" id="example1" type="text" placeholder="Search Meet.bio" autocomplete="off"/>
                                <span class="field-it_btn">
                                    <button type="submit">
                                        <?php 
new Block_icon_btn_1416573c29e8783815_90547630($_smarty_tpl, $this->tplIndex);
?>

                                    </button>
                                </span>
                            </form>
                        </div>
                        <div class="btn-create">
                            <button type="submit"></button>
                        </div>
                        <?php 
new Block_user_panel_31521573c29e8789677_49544697($_smarty_tpl, $this->tplIndex);
?>

                    </div>
                <?php
}
}
/* {/block 'header'} */
/* {block 'nav_menu_people'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl */
class Block_nav_menu_people_28935573c29e87925c3_34075640 extends Smarty_Internal_Block
{
public $name = "nav_menu_people";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="menu-list_i"><a class="menu-list_i_lk ic-people" href="#">People</a></li>
                                <?php
}
}
/* {/block 'nav_menu_people'} */
/* {block 'nav_menu_profile'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl */
class Block_nav_menu_profile_29236573c29e87961f4_13386630 extends Smarty_Internal_Block
{
public $name = "nav_menu_profile";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="menu-list_i __active"><a class="menu-list_i_lk ic-user" href="#">My Profile</a>
                                    </li>
                                <?php
}
}
/* {/block 'nav_menu_profile'} */
/* {block 'nav_menu'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl */
class Block_nav_menu_10333573c29e8797ad2_02065060 extends Smarty_Internal_Block
{
public $name = "nav_menu";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <ul class="menu-list">
                                <li class="menu-list_i"><a class="menu-list_i_lk ic-home" href="#">Home</a></li>

                                <?php 
new Block_nav_menu_people_28935573c29e87925c3_34075640($_smarty_tpl, $this->tplIndex);
?>


                                <li class="menu-list_i"><a class="menu-list_i_lk ic-company" href="#">Companies</a></li>
                                <li class="menu-list_i"><a class="menu-list_i_lk ic-message" href="#">Messages</a></li>
                                <li class="menu-list_i"><a class="menu-list_i_lk ic-scheduling" href="#">Scheduling</a></li>

                                <?php 
new Block_nav_menu_profile_29236573c29e87961f4_13386630($_smarty_tpl, $this->tplIndex);
?>


                                <li class="menu-list_i"><a class="menu-list_i_lk ic-support" href="#">Support</a></li>
                            </ul>
                        <?php
}
}
/* {/block 'nav_menu'} */
/* {block 'main_content'} D:\Server\data\htdocs\day-1\www\smarty\views\templates\default.tpl */
class Block_main_content_13778573c29e879c399_00730689 extends Smarty_Internal_Block
{
public $name = "main_content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
}
}
/* {/block 'main_content'} */
}
