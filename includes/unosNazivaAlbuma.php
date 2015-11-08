<!--Unos naziva albuma - modalni prozor -->
<?php

if (isset($_POST['naziv']))
        napraviNoviAlbum($_POST['naziv']);
?>

<div class="row text-right">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal">Kreiraj novi album</button>
</div>

<div id="modal" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">Unesite naziv novog albuma</div>             
        <form class="form" method="POST">
            <div class="form-group">
                <input type="text" name="naziv" class="form-control" placeholder="Naziv albuma..."></input><br>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form> 
    </div>
</div>