<a href="<?php echo base_url('admin-contact');?>" class="btn btn-info float-right mb-3 mr-5">Back</a>

<div class="container card shadow mt-5">

      <form action="<?php echo base_url('update-contact/'.$contact['id'])?>" method="post">
      <input type="hidden" name="_method" value="put">
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control"  value="<?php echo $contact['name']; ?>" name="name">
    <?php if(isset($validation) && $validation->hasError('name')): ?>
            <div class="text-danger"><?= $validation->getError('name'); ?></div>
        <?php endif; ?>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
    <input type="text" class="form-control" value="<?= $contact['email']; ?>" name="email">
    <?php if(isset($validation) && $validation->hasError('email')): ?>
            <div class="text-danger"><?= $validation->getError('email'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone:</label>
    <input type="text" class="form-control" value="<?= $contact['phone']; ?>" name="phone">
    <?php if(isset($validation) && $validation->hasError('phone')): ?>
            <div class="text-danger"><?= $validation->getError('phone'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address:</label>
    <textarea class="form-control"  rows="3" name="message"><?= $contact['message']; ?></textarea>
    <?php if(isset($validation) && $validation->hasError('message')): ?>
            <div class="text-danger"><?= $validation->getError('message'); ?></div>
        <?php endif; ?>
  </div>

  <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">update </button>
      </div>
</form>
      </div>
     
