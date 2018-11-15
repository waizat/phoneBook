
      <form action="<?php echo base_url('contacts/submit') ?>" method="post" class="form-horizontal">
        <h3>Add New Contact</h3>
        <a href="<?php echo base_url('contacts/index'); ?>" class="btn btn-outline-primary">Back</a>
        <div class="form-group">
          <label for="name" class="col-md-2 text-right">Name</label>
          <div class="col-md-20">
            <input type="text" name="contact-name" class="form-control" required>
          </div>
        </div>
        <div class="form-group">
          <label for="phoneNumber" class="col-md-2 text-right">Phone Number</label>
          <div class="col-md-20">
            <input type="text" name="contact-number" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 text-right"></label>
          <div class="col-md-10">
            <input type="submit" name="inputSave" class="btn btn-primary" value="Save">
          </div>
        </div>
      </form>
