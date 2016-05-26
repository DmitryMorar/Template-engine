{extends file="default.tpl"}

{block name="title"}DAY 26 My Profile{/block}

{block name="main_content"}
    <!--left column-->
    <div class="left-col">
        <div class="block-user">

            <img class="block-user_avatar" src="{$linkUserAvatar}" alt="User-avatar">
            <ul class="block-user_list">
                <li class="block-user_list_name">{$user.name}</li>
                <li class="block-user_list_post">{$user.position}</li>
                <li class="block-user_list_address">{$user.address}</li>
            </ul>
        </div>

        <div class="block-summary">
            <h2 class="content-title"><span>Personal Summary</span></h2>
            <table class="content-table features">
                {foreach from = $userFeatures item = features}
                    <tr>
                        <td class="label">{$features.label}</td>
                        <td class="value">{$features.value}</td>
                    </tr>
                {/foreach}
            </table>
        </div>

        <div class="block-bio">
            <h2 class="content-title"><span>Bio</span></h2>
            <p>{$userBio.content}</p>
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
                {foreach from = $userAddress item = address}
                    {if $address.label == 'email' or $address.label == 'private email'}
                        <tr>
                            <td class="label">{$address.label}</td>
                            <td class="value"><a href="mailto:">{$address.value}</a></td>
                        </tr>
                    {else}
                        <tr>
                            <td class="label">{$address.label}</td>
                            <td class="value">{$address.value}</td>
                        </tr>
                    {/if}
                {/foreach}
            </table>
        </div>
    </div>
{/block}

