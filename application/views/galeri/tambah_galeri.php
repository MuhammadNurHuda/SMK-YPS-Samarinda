<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
<script>
   function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnil");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }    
    }
</script>
</head>
<body>
<?php echo form_open_multipart('galeri/do_upload');?>
<hr>
<table class="table table-bordered">
<input type="file" accept="image/*" name="userfile" onchange="showMyImage(this)" />
<img id="thumbnil" style="width:20%; margin-top:10px;"  src="" alt="image"/>
<br>
<label>Judul</label>
<input type="text" class="form-control" name="title" autofocus required></input>
<label>Isi</label>
<input type="text" class="form-control" name="isi"></input>
<br>
<input type="submit" value="Upload" class="btn btn-success"></input>
<input type="reset" value="Reset" class="btn btn-warning pull-right"></input>
<?php echo anchor('galeri','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>
</table>
</body>
</html>