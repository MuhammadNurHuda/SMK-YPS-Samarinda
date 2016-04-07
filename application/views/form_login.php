<?php 
echo form_open('auth/login');
 ?>
 <style type="text/css">
     body {
  height: 100vh;
  background: url('../../assets/css/img/bg.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
  #huda,.koma{
    margin-top: 100px;
    color: white;
  }
  </style>
<div class="container-fluid" id="huda">
<h2 align="center" class="koma">Login Admin</h2>
<div class="row">
<table align="center" class="table table-border ">
<tr><td><label>Username</label></td><td></td><td><input type="text" class="form-control" name="username" placeholder="Username" autofocus required></input></td></tr>
<tr><td><label>Password</label> </td><td></td><td><input type="password" class="form-control" name="password" placeholder="Password" required></input></td></tr>
<tr>
<td colspan="2"><?php echo anchor('index','Beranda',array('class'=>'btn btn-primary'))?></td>
<td align="right"><button type="submit" class="btn btn-success" name="submit">Login</button></td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>

