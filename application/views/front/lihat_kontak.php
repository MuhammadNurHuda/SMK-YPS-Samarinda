<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style type="text/css">
    iframe{
        margin-top: 50px;
    }
    </style>
</head>
<body>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.696145397877!2d117.166041!3d-0.487272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb85a50c8a8f33448!2sSMK+YPS!5e0!3m2!1sid!2sid!4v1458542291615" width="100%" height="50%" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="container">
	<div class="col-md-12">
        <div class="row-fluid">
                <h3 align="center">Contact Form</h3> 
                <?php echo form_open('kontak/validasi');?>
               	<div class="col-md-8">
                <?php echo $this->session->flashdata('msg');?>
                <?php $attributes = array("class" => "form-horizontal", "name" => "kontak");
                echo form_open("kontak", $attributes);?>
                        <label>Nama :</label>
                        <input type="text" name="name" class="form-control" required="required" placeholder="Nama Anda" value="<?php echo set_value('name');?>"><br><span class="text-danger"><?php echo form_error('name'); ?></span>
                        <label>Email :</label>
                        <input type="text" name="email" class="form-control" placeholder="Email Anda" value="<?php echo set_value('email'); ?>"><br><span class="text-danger"><?php echo form_error('email'); ?></span>
                        <label>Subject :</label>
                        <input type="text" name="subject" class="form-control" placeholder="Judul" value="<?php echo set_value('subject'); ?>"><br><span class="text-danger"><?php echo form_error('subject'); ?></span>
                        <label>Message</label>
                        <textarea name="message" required="required" class="form-control" cols="30" rows="10" placeholder="Your Message Here..."><?php echo set_value('message'); ?></textarea><span class="text-danger"><?php echo form_error('message'); ?></span><br>
                        <label>Captcha : <?php echo $img;?></label>
                        <?php if (validation_errors()) { ?> 
                               <span class="text-danger"><?php echo validation_errors('');?></span>
                        <?php } ?>
                        <input type="text" name="captcha" class="form-control" placeholder="Kode diatas"></input><br>
                        <button type="submit" name="submit" class="btn btn-primary btn-large">Kirim Pesan</button>
                <br><br>
                </div></div>
                <div class="col-md-4">
                <br>
                        <?php foreach ($alamat->result() as $r)
                         {
                        ?>
                        <i class="fa fa-home"></i>
                        <strong>Alamat</strong> : <?php echo $r->alamat;?><br>
                        <i class="fa fa-envelope"></i>
                        <strong>Email</strong> : <?php echo $r->email;?> <br>
                        <i class="fa fa-phone"></i>
                        <strong>Telepon</strong> : <?php echo $r->notlp;?>
                  <?php } ?>
                  </ul>
                </div>
            </form>
            <br><br>
        </div>
</body>
</html>