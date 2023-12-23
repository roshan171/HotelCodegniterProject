<!-- app/Views/reservation/create.php -->

<a href="<?php echo base_url('reservations');?>" class="btn btn-info float-right mb-3 mr-5">Back</a>

<div class="container card shadow mt-5">

      <form action="<?php echo base_url('reservations/store')?>" method="post">
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo set_value('name');?>">
    <?php if(isset($validation) && $validation->hasError('name')): ?>
            <div class="text-danger"><?= $validation->getError('name'); ?></div>
        <?php endif; ?>
  </div>
  

  <div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="<?php echo set_value('email');?>">
    <?php if(isset($validation) && $validation->hasError('email')): ?>
            <div class="text-danger"><?= $validation->getError('email'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status:</label>
    
    <input type="checkbox" name="status[]" value="Confirmed"> Confirmed
    <input type="checkbox" name="status[]" value="Pending"> Pending
    <input type="checkbox" name="status[]" value="Cancelled"> Cancelled

    <?php if(isset($validation) && $validation->hasError('status')): ?>
            <div class="text-danger"><?= $validation->getError('status'); ?></div>
        <?php endif; ?>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Payment Mode:</label>

    <input type="radio" name="payment_mode" value="Cash" required> Cash
    <input type="radio" name="payment_mode" value="Credit Card" required> Credit Card

    <?php if(isset($validation) && $validation->hasError('payment_mode')): ?>
            <div class="text-danger"><?= $validation->getError('payment_mode'); ?></div>
        <?php endif; ?>
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Table Available:</label>
    <select name="available" class="form-control"  value="<?php echo set_value('available');?>">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
    <?php if(isset($validation) && $validation->hasError('available')): ?>
            <div class="text-danger"><?= $validation->getError('available'); ?></div>
        <?php endif; ?>
    
  </div>

  <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Save </button>
      </div>
</form>
      </div>
     






















