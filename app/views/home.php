<!DOCTYPE html>  
<html>  
<head>  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
    <title></title>  
</head>  
<body>  
  
            <!-- Modal Header -->
            <div class="modal-header">
                <h4>login</h4> 
            </div>
            <p class="message"></p>
			        <?php if (isset($_GET['message'])) { ?>
                    <p class="message"><?php echo $_GET['message']; ?></p>
                    <?php } ?>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">User Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="User Name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                          </div>
                        </div>  
                        <p>New User <a href="signup">Register Here</a></p>
                        <button name="submit" type="submit" id="submit" value="Login" class="btn btn-primary">Login</button>
                      </form>
                  </div>
            </div>
            <form>
            </div>
            </div>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

 </body>  
</html>  