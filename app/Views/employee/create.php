 <a href="<?php echo base_url('employee');?>" class="btn btn-info float-right mb-3 mr-5">Back</a>

<div class="container card shadow mt-5">

      <form action="<?php echo base_url('add-employee')?>" method="post">
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
    <label for="exampleInputPassword1">Phone:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="phone" value="<?php echo set_value('phone');?>">
    <?php if(isset($validation) && $validation->hasError('phone')): ?>
            <div class="text-danger"><?= $validation->getError('phone'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" value="<?php echo set_value('address');?>"></textarea>
    <?php if(isset($validation) && $validation->hasError('address')): ?>
            <div class="text-danger"><?= $validation->getError('address'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Joining Date:</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="joining_date" value="<?php echo set_value('joining_date');?>">
    <?php if(isset($validation) && $validation->hasError('joining_date')): ?>
            <div class="text-danger"><?= $validation->getError('joining_date'); ?></div>
        <?php endif; ?>
  </div>

  <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Save </button>
      </div>
</form>
      </div>
     
