<?php
/* Smarty version 3.1.30-dev/64, created on 2016-05-18 12:00:18
  from "D:\Server\data\htdocs\day-1\www\views\templates\default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/64',
  'unifunc' => 'content_573c3d32654410_80789460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9180c0171278053f69658016e465dee5e25baab7' => 
    array (
      0 => 'D:\\Server\\data\\htdocs\\day-1\\www\\views\\templates\\default.tpl',
      1 => 1463565617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573c3d32654410_80789460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php 
new Block_title_7419573c3d3263fa38_39020747($_smarty_tpl);
?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="../../content/css/main.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <!--HEADER-->
    <header class="main-header">
        <div class="top-logo">
            <a class="top-logo_lk" href="#">San Francisco<br>Bio Week 2016</a>
        </div>
        <div class="bottom-line">
            <div class="bottom-logo">
                <a class="bottom-logo_lk" href="#"><img src="../../content/img/logo.png" alt="logo"></a>
            </div>
            <div class="search-form">
                <form class="field-it">
                    <label for="example1"></label>
                    <input class="it" id="example1" type="text" placeholder="Search Meet.bio" autocomplete="off">
                    <span class="field-it_btn">
                        <button type="submit">
                            <img src="../../content/img/icon-search.png" alt="icon">
                        </button>
                    </span>
                </form>
            </div>
            <div class="btn-create">
                <button type="submit"></button>
            </div>
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
        </div>
    </header>

    <!--MAIN BLOCK-->
    <div class="flex-container">
        <!--NAV MENU-->
        <div class="nav-menu">
            <div class="menu"><a class="switch-close" href="#"></a>
                <ul class="menu-list">
                    <li class="menu-list_i"><a class="menu-list_i_lk ic-home" href="#">Home</a></li>
                    <li class="menu-list_i <?php echo $_smarty_tpl->tpl_vars['peopleActive']->value;?>
"><a class="menu-list_i_lk ic-people"
                                                               href="/controllers/people.php">People</a></li>
                    <li class="menu-list_i"><a class="menu-list_i_lk ic-company" href="#">Companies</a></li>
                    <li class="menu-list_i"><a class="menu-list_i_lk ic-message" href="#">Messages</a></li>
                    <li class="menu-list_i"><a class="menu-list_i_lk ic-scheduling" href="#">Scheduling</a></li>
                    <li class="menu-list_i <?php echo $_smarty_tpl->tpl_vars['profileActive']->value;?>
"><a class="menu-list_i_lk ic-user" href="../">My Profile</a>
                    </li>
                    <li class="menu-list_i"><a class="menu-list_i_lk ic-support" href="#">Support</a></li>
                </ul>
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
new Block_main_content_280573c3d3264f2f0_58578461($_smarty_tpl);
?>

            </div>
        </main>
    </div>
</div>
</body>
</html><?php }
/* {block 'title'} D:\Server\data\htdocs\day-1\www\views\templates\default.tpl */
class Block_title_7419573c3d3263fa38_39020747 extends Smarty_Internal_Block
{
public $name = "title";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'main_content'} D:\Server\data\htdocs\day-1\www\views\templates\default.tpl */
class Block_main_content_280573c3d3264f2f0_58578461 extends Smarty_Internal_Block
{
public $name = "main_content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php
}
}
/* {/block 'main_content'} */
}
