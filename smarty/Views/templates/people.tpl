{extends file="default.tpl"}

{block name="title"}DAY 26 People{/block}

<li class="menu-list_i {$peopleActive}"><a class="menu-list_i_lk ic-people" href="">People</a></li>

{block name="main_content"}
    <div class="employee-table-wrap">
        <table class="content-table employee-table">
            {foreach from = $peopleList item = people}
                <tr class="employee">
                    <td class="employee_avatar">
                        <img src="/content/img/avatar.jpg" alt="avatar">
                    </td>
                    <td class="employee_name">
                        <h2>{$people.name.first} {$people.name.last}</h2>
                        <p><span>age: </span>{$people.age}</p>
                        <p><span>company: </span>{$people.company}</p>
                        <p><span>registered: </span>{$people.registered}</p>
                    </td>
                    <td class="employee_address">
                        <p><span>phone: </span>{$people.phone}</p>
                        <p><span>email: </span><a href="mailto:">{$people.email}</a></p>
                        <p><span>address: </span>{$people.address}</p>
                    </td>
                    <td class="employee_about">
                        <h2>About</h2>
                        <p>{$people.about}</p>
                    </td>
                </tr>
            {/foreach}
        </table>
    </div>
{/block}