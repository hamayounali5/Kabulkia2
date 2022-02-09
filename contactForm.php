
<h3 style="text-align: center; color: darkblue;font-family: B Nazanin"><?php  echo $this->lang->line('leaveMessage'); ?></h3>
    <form class="form" method ="post" action="message.php" style="margin: 30px">
        <div class="row">
            <div class="col-sm-6"> 
                <div class="form-group">
                <input type="text" class="form-control input-lg" id="name" name="name" placeholder="<?php  echo $this->lang->line('name'); ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" id ="Phone" name="Phone" placeholder="<?php  echo $this->lang->line('phoneNumber'); ?>">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control input-lg" id ="email" name="email" placeholder="<?php  echo $this->lang->line('emailAddress'); ?>">
                </div>
            </div>
            <div class="col-sm-6">
                 <div class="form-group">
                    <textarea class="form-control input-lg" id="comments" name="comments" rows="7" cols="79" placeholder="<?php  echo $this->lang->line('message'); ?>"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default btn-lg"><?php  echo $this->lang->line('send'); ?></button>
                
                </div>
            </div>
        </div>
       
    </form>

