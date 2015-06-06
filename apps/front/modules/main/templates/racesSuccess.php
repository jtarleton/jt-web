<h1 >
Races
</h1>

<table id="example" class="display" width="100%" cellspacing="20">
        <thead>
            <tr>
                <th>Date</th>
                <th>Race</th>
                <th>Event</th>
                <th>Overall</th>
                <th>Time</th>
                <th>Location</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
 
        <tbody>
            <?php for($i = 0; $i< 200; $i++): ?>
            <tr>
                <td>2014-04-01</td>
                <td>Scotland Run</td>
                <td>10K</td>
                <td>199</td>
                <td><?php echo rand(1,9); ?>0:48</td>
                <td>New York, NY</td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body></html>