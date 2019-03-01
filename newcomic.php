<?php
   $page = "newcomic";
   include "static/head.php";
?>
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <form action="/comphp/submitcomic.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
               <div class="form-group">
                  <label for="cfile">Comic File (.zip or .png)</label>
                  <input type="file" id="cfile" name="cfile">
                  <p class="help-block">You can use a single .png or multiple .png files in a .zip.</p>
               </div>
               <label for="cname">Comic Name</label>
               <input type="text" class="form-control" id="cname" name="cname">
            </div>
            <div class="form-group">
               <label for="cdesc">Description</label>
               <textarea class="form-control" rows="3" name="cdesc" id="cdesc"></textarea>
            </div>
            <div class="form-group">
               <label for="ckeys">Keywords (seperated by commas)</label>
               <input type="text" class="form-control" id="ckeys" name="ckeys">
            </div>
            <input type="hidden" class="form-control" id="ckeys" name="uname" value="<?php echo $user->login ?>">
            <input type="hidden" class="form-control" id="ckeys" name="uid" value="<?php echo $user->user_id ?>">
            <button type="submit" class="btn btn-default" name="submit">Submit</button>
         </form>
      </div>
   </div>
</div>
<?php
   include "static/foot.php";
?>
