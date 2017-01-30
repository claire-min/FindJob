<br />
<a href="<?php echo URL; ?>find" class="message"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Go back to previous page.</a>
<br /><br />

<h3>Search Results</h3>
<br/><br />
<table class="table" >
    <tr>
        <th>Job Title</th>
        <th>Company</th>
        <th>Location</th>
        <th>Date</th>
    </tr>
 <?php   
    foreach($this->find as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['title'] . '</td>';
        echo '<td>' . $value['company'] . '</td>';
        echo '<td>' . $value['location'] . '</td>';
        echo '<td>' . $value['date'] . '</td>';
        echo '</tr>';
    }
?>
</table>
<br /><br />

