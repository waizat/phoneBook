  <form action="<?php echo base_url('contacts/update') ?>" method="post" class="form-horizontal">
    <h3>Edit Contact</h3>
    <a href="<?php echo base_url('contacts/index'); ?>" class="btn btn-outline-primary">Back</a>
    <input type="hidden" name="txt_hidden" value="<?php echo $contacts->name;?>">
    <div class="form group">
      <label for="title" class="col-md-2 text-right">Name</label>
      <div class="col-md-20">
        <input type="text" value="<?php echo $contacts->name; ?>" name="contact-name" class="form-control" required>
      </div>
    </div>
    <div class="form group">
      <label for="title" class="col-md-2 text-right">Phone Number</label>
      <div class="col-md-20 ">
        <input type="text" name="contact-number" class="form-control" value="<?php echo $contacts->phoneNumber; ?>">
      </div>
    </div>
    <div class="form group">
      <label class="col-md-2 text-right"></label>
      <div class="col-md-20">
        <input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
      </div>
    </div>

  </form>
