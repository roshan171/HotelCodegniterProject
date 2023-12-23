<a href="<?php echo base_url('admin-reservation');?>" class="btn btn-info float-right mb-3 mr-5">Back</a>

<div class="container card shadow mt-5">

      <form action="<?php echo base_url('update-reserve/'.$reserve['id'])?>" method="post">
      <input type="hidden" name="_method" value="put">
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control"  value="<?php echo $reserve['name']; ?>" name="name">
    <?php if(isset($validation) && $validation->hasError('name')): ?>
            <div class="text-danger"><?= $validation->getError('name'); ?></div>
        <?php endif; ?>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
    <input type="text" class="form-control" value="<?= $reserve['email']; ?>" name="email">
    <?php if(isset($validation) && $validation->hasError('email')): ?>
            <div class="text-danger"><?= $validation->getError('email'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone:</label>
    <input type="text" class="form-control" value="<?= $reserve['phone']; ?>" name="phone">
    <?php if(isset($validation) && $validation->hasError('phone')): ?>
            <div class="text-danger"><?= $validation->getError('phone'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date:</label>
    <input type="date" class="form-control" value="<?= $reserve['date']; ?>" name="date">
    <?php if(isset($validation) && $validation->hasError('date')): ?>
            <div class="text-danger"><?= $validation->getError('date'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Time:</label>
    <input type="time" class="form-control" value="<?= $reserve['time']; ?>" name="time">
    <?php if(isset($validation) && $validation->hasError('time')): ?>
            <div class="text-danger"><?= $validation->getError('time'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Persons:</label>
    <input type="text" class="form-control" value="<?= $reserve['person']; ?>" name="person">
    <?php if(isset($validation) && $validation->hasError('person')): ?>
            <div class="text-danger"><?= $validation->getError('person'); ?></div>
        <?php endif; ?>
  </div>

  <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">update </button>
      </div>
</form>
      </div>
     
