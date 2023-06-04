<?php

print'
<h2>Pretraži Chuckove mudrosti prema kategoriji</h2>';
if (!isset($_POST['action']) || $_POST['action'] == '') { $_POST['action'] = FALSE; }
		
		if ($_POST['action'] == FALSE) {
            print'
<form class="form-horizontal" action="" name="search" method="POST">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="title">Kategorija:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="marka" placeholder="Unesi kategoriju" name="Kategorija" required>
				  </div>
				</div>
				<input type="hidden" name="action" value="TRUE">
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<input type="submit" value="Pretraži">
				  </div>
				</div>
			  </form>';
        }
        else if ($_POST['action'] == TRUE)  {
            print'
<form class="form-horizontal" action="" name="search" method="POST">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="title">Kategorija:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="marka" placeholder="Unesi kategoriju" name="Kategorija" required>
				  </div>
				</div>
				<input type="hidden" name="action" value="TRUE">
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<input type="submit" value="Pretraži">
				  </div>
				</div>
			  </form>';
$url = 'https://api.chucknorris.io/jokes/search?query='.urlencode($_POST['Kategorija']);
$data = file_get_contents($url);
$result = json_decode($data, true);

print '<table style="width:70%">
        <thead>
                <th width="12" style="text-align:center">Vrijeme nastanka</th>
                <th width="12" style="text-align:center">Mudrost</th>
            </tr>
        </thead>
        <tbody>';

foreach ($result['result'] as $joke) {
    print '
            <tr>
    <td style="color:black; text-align:center">' . ($joke['created_at'] ? $joke['created_at'] : '<span style="color: red;">&#10006;</span>') . '</td>
    <td style="color:black; text-align:center">' . ($joke['value'] ? $joke['value'] : '<span style="color: red;">&#10006;</span>') . '</td>
    
</tr>';
}
print '
        </tbody>
    </table>';
}
?>