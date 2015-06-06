<?php

//Populate $rows with multidimensional array of the parsed data
$rows = JtXmlParser::get('/var/homewww/apps/front/lib/datasource.xml', 'CODE_COUNTRY')->finishUp();
//Render a nice HTML table

//Optionally, you can also run this as a command-line script which print_r's to std out.
//JtXmlParser::get('foodata.xml', 'CODE_COUNTRY')->setInteractive(true)->finishUp();
?>
<!DOCTYPE html>
<head>
    <title>XML Parsing Tutorial</title>
    <style type="text/css">body{ font-size:10px; line-height:12px; font-family:Verdana, sans-serif; }</style>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#example').DataTable();
    } );
    </script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.3/css/jquery.dataTables.css">
</head>
    <body>
        <h1>My Cool Data</h1>

        <h3><?php echo date('m/d/Y'); ?></h3>
        
        <div>
            <table id="example" class="display">
            <thead>
            <tr>
                <?php foreach($rows[0] as $k=>$v): ?>
                    <td><?php echo $k; ?></td>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach($rows as $row): ?>
            <tr>
                <?php foreach($row as $k=>$v): ?>
                    <td><?php echo $v; ?></td>
                <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
            </tbody></tfoot>

            </tfoot>
            </table>
        </div>
    </body>
</html>
<?php exit(0); ?>


