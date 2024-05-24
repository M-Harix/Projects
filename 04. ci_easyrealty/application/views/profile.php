<!DOCTYPE html>
<html lang="en">
  <head> 
    <title>Easy Realty</title>
    <link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/profile.css'); ?>" rel="stylesheet" type="text/css">
  </head>
  <body class = "body">
      <div>
        <div class="box col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">My account</h3>
                  </div>
                </div>
              </div> 
              <div class="card-body">
              <form method="POST" autocomplete="on" action="Profile/update">
<?php             
                foreach($fetch as $row)
                {
?>              
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-username">First name</label>
                          <input type="text" name="firstName" class="form-control form-control-alternative"  value="<?php echo $row->firstname; ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Last name</label>
                          <input type="text" name="lastName" class="form-control form-control-alternative" value="<?php echo $row->lastname; ?>">
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-email">Email address</label>
                          <input type="email" name="email" class="form-control form-control-alternative" value="<?php echo $row->email; ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-email">Phone number</label>
                          <input type="number" name="phone" class="form-control form-control-alternative" value="<?php echo $row->phone; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Password</label>
                          <input type="password" name="password" class="form-control form-control-alternative" value="<?php echo $row->password; ?>">
                        </div>
                      </div><br>
                      <div class="col-lg-2 pp">
                        <button type="submit" class="btn btn-primary py-md-1 px-md-3 d-none d-lg-block">Update
                        </button>
                      </div>
                    </div>
                  </div><br>
<?php
                }
?>
                </form>
              </div>
            </div>
          </div>
        </div>  
  </body>
</html>