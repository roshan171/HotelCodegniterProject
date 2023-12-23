<!-- app/Views/reservation/create.php -->

<a href="<?php echo base_url('reservations');?>" class="btn btn-info float-right mb-3 mr-5">Back</a>

<div class="container card shadow mt-5">

      <form action="<?php echo  base_url('reservations/update/'.$reservation['id'])?>" method="post">
      <input type="hidden" name="_method" value="put">
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
     name="name" value="<?= $reservation['name'] ?>">
    <?php if(isset($validation) && $validation->hasError('name')): ?>
            <div class="text-danger"><?= $validation->getError('name'); ?></div>
        <?php endif; ?>
  </div>
  

  <div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="<?= $reservation['email'] ?>">
    <?php if(isset($validation) && $validation->hasError('email')): ?>
            <div class="text-danger"><?= $validation->getError('email'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status:</label>
    <?php $statusArray = explode(',', $reservation['status']); ?>
    <input type="checkbox" name="status[]" value="Confirmed" <?= in_array('Confirmed', $statusArray) ? 'checked' : '' ?>> Confirmed
    <input type="checkbox" name="status[]" value="Pending" <?= in_array('Pending', $statusArray) ? 'checked' : '' ?>> Pending
    <input type="checkbox" name="status[]" value="Cancelled" <?= in_array('Cancelled', $statusArray) ? 'checked' : '' ?>> Cancelled

    <?php if(isset($validation) && $validation->hasError('status')): ?>
            <div class="text-danger"><?= $validation->getError('status'); ?></div>
        <?php endif; ?>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Payment Mode:</label>

    <input type="radio" name="payment_mode" value="Cash" <?= ($reservation['payment_mode'] == 'Cash') ? 'checked' : '' ?> required> Cash
    <input type="radio" name="payment_mode" value="Credit Card" <?= ($reservation['payment_mode'] == 'Credit Card') ? 'checked' : '' ?> required> Credit Card

    <?php if(isset($validation) && $validation->hasError('payment_mode')): ?>
            <div class="text-danger"><?= $validation->getError('payment_mode'); ?></div>
        <?php endif; ?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Table Available:</label>
    <select name="available" class="form-control">
    <option value="yes" <?= ($reservation['available'] == 'yes') ? 'selected' : '' ?>>Yes</option>
        <option value="no" <?= ($reservation['available'] == 'no') ? 'selected' : '' ?>>No</option>
    </select>
    <?php if(isset($validation) && $validation->hasError('available')): ?>
            <div class="text-danger"><?= $validation->getError('available'); ?></div>
        <?php endif; ?>
    
  </div>

  <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Update </button>
      </div>
</form>
      </div>
     






















