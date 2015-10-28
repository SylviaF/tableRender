<!DOCTYPE html>
<html>
<head>
    <title>Mobomatker Data Platform</title>
    <meta charset="GBK" />
    <link rel="stylesheet" type="text/css" href="./static/common/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="./static/extensions/Buttons/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="./static/table.css"/>
</head>
<body>
    <ul id="nav">
        {foreach from = $allData item = tableData name = nav}
            <li class="tab {if $smarty.foreach.nav.index eq 0}active{/if}" data-tab="{$smarty.foreach.nav.index}">{$tableData['title']}</li>
        {/foreach}
    </ul>
    <div class="tabContent">
        {foreach from = $allData item = tableData name = navContent}
        <div id="navContent-{$smarty.foreach.navContent.index}">
            <table class="display csvTable">
                <thead>
                    <tr>
                        {foreach $tableData['columns'] as $col}
                        <th>{$col['title']}</th>
                        {/foreach}
                    </tr>
                </thead>
         
                <tfoot>
                    <tr>
                        {foreach $tableData['columns'] as $col}
                        <th>{$col['title']}</th>
                        {/foreach}
                    </tr>
                </tfoot>
                <tbody>
                    {foreach $tableData['data'] as $line}
                    <tr>
                        {foreach $line as $td}
                        <td>{$td}</td>
                        {/foreach}
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        {/foreach}
    </div>
    <script type="text/javascript" src="./static/common/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="./static/common/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="./static/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="./static/extensions/Buttons/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="./static/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="./static/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="./static/table.js"></script>
</body>
</html>
