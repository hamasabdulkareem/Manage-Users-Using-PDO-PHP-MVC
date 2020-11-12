<?PHP
session_start(); 
?>
 <div class="row">
      	<div class="col-10">
      		<h2>Data</h2>
      	</div>
      	
      </div>
      <div  class="col-10 justify-content-center">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eidet Brand</h5>
      </div>
      <div class="modal-body">
      <?php 
    $rows=$data['userdata'];
    ?>	
        <form method='post' action='login'>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
              <input type='hidden' name='id' value=<?PHP echo $row->id?> >
                <label> Name</label>
                <input type="text" name="user_name" class="form-control"  value="<?PHP echo $row->user_name; ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
              <input type='hidden' name='id' value=<?PHP echo $row->id?> >
                <label> email</label>
                <input type="text" name="email" class="form-control"  value="<?PHP echo $row->email; ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
              <input type='hidden' name='id' value=<?PHP echo $row->id?> >
                <label> password</label>
                <input type="text" name="password" class="form-control"  value="<?PHP echo $row->password; ?>">
              </div>
            </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
</div>