
      <h3>Contact List</h3>

      <?php
        if($this->session->flashdata('success_msg')){
      ?>

        <div class="alert alert-success">
          <?php echo $this->session->flashdata('success_msg'); ?>
        </div>

      <?php
        }
       ?>

       <?php
         if($this->session->flashdata('error_msg')){
       ?>

         <div class="alert alert-success">
           <?php echo $this->session->flashdata('error_msg'); ?>
         </div>

       <?php
         }
        ?>


      <a href="<?php echo base_url('contacts/add'); ?>" class="btn btn-outline-primary">Add New</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <td>Name</td>
            <th>Phone Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          if($contacts){
            foreach ($contacts as $contact) {
        ?>
          <tr>
            <td><?php echo $contact->name; ?></td>
            <td><?php echo $contact->phoneNumber; ?></td>
            <td>
              <a href="<?php echo base_url('contacts/edit/'.$contact->name); ?>" class="btn btn-info">Edit</a>
              <a href="<?php echo base_url('contacts/delete/'.$contact->name); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this contact?');">Delete</a>
            </td>
          </tr>
        <?php
            }
          }
        ?>
        </tbody>
      </table>
      <p>
      <?php echo $this->pagination->create_links();?>
      </p>
    </div>
