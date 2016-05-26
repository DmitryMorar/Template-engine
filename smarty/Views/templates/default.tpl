<!DOCTYPE html>
<html>
<head>
    <title>{block name="title"}{/block}</title>
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
                    <span class="user-panel_messages_figure">{$messageNumber}</span>
                </div>
                <div class="user-panel_info">
                    <span class="user-panel_info_name">{$userName}</span>
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

                    <li class="menu-list_i {if $pageFlag == 'people'}{$classActive}{/if}"><a
                                class="menu-list_i_lk ic-people"
                                href="../../people.php">People</a></li>

                    <li class="menu-list_i"><a class="menu-list_i_lk ic-company" href="#">Companies</a></li>
                    <li class="menu-list_i"><a class="menu-list_i_lk ic-message" href="#">Messages</a></li>
                    <li class="menu-list_i"><a class="menu-list_i_lk ic-scheduling" href="#">Scheduling</a></li>
                    <li class="menu-list_i {if $pageFlag == 'profile'}{$classActive}{/if}"><a
                                class="menu-list_i_lk ic-user"
                                href="../../index.php">My Profile</a>
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
                {block name="main_content"}
                {/block}
            </div>
        </main>
    </div>
</div>
</body>
</html>