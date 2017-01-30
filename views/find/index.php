<h3><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Find Jobs</h3>
<br />
<form class="form-inline" method="post" action="/find/find">
    <div class="form-group">
    <label>Job Keyword</label><input type="text" name="keyword" />
    </div>
    <div class="form-group">
    <label>Location</label><input type="text" name="location" />
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<br />

<hr />

<h3>All Jobs</h3>
<br/><br />
<table class="table">
    <tr>
        <th>Job Title</th>
        <th>Company</th>
        <th>Location</th>
        <th>Date</th>
    </tr>

 <?php
    foreach($this->listAll as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['title'] . '</td>';
        echo '<td>' . $value['company'] . '</td>';
        echo '<td>' . $value['location'] . '</td>';
        echo '<td>' . $value['date'] . '</td>';
        echo '</tr>';
    }
?>
    
</table>
<br/><br/>

