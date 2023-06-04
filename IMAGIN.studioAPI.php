<?php
print'
<h2>Pretraži slike automobila</h2>';
if (!isset($_POST['action']) || $_POST['action'] == '') { $_POST['action'] = FALSE; }
		
		if ($_POST['action'] == FALSE) {
            print'
<form class="form-horizontal" action="" name="search" method="POST">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="title">Marka:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="marka" placeholder="Unesi marku automobila" name="marka" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="tip">Tip:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="tip" placeholder="Unesi tip automobila" name="tip">
				  </div>
				</div>
                <div class="form-group">
				  <label class="control-label col-sm-2" for="godina">Godina:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="godina" placeholder="Unesi godinu automobila" name="godina">
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
        else if ($_POST['action'] == TRUE) {
			

              $key = 'hrstudent';
              
              $url = 'https://cdn.imagin.studio/getImage?customer='.$key.'&make='.urlencode($_POST['marka']).'&modelFamily='. urlencode($_POST['tip']).'&modelYear='.urlencode($_POST['godina']);
              
              
print'
              <figure>
            <img src='.$url.' alt="otvaranje" title="otvaranje">             

        </figure>
    ';
        }
?>