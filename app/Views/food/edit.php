<a href="<?php echo base_url('food');?>" class="btn btn-info float-right mb-3 mr-5">Back</a>

<div class="container card shadow mt-5">

      <form action="<?php echo  base_url('food/update/'.$food['id'])?>" method="post">
      <input type="hidden" name="_method" value="put">
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
     aria-describedby="emailHelp" name="name" value="<?php echo $food['name'] ?>">
    <?php if(isset($validation) && $validation->hasError('name')): ?>
            <div class="text-danger"><?= $validation->getError('name'); ?></div>
        <?php endif; ?>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
     name="description"><?php echo $food['description'] ?></textarea>
    <?php if(isset($validation) && $validation->hasError('description')): ?>
            <div class="text-danger"><?= $validation->getError('description'); ?></div>
        <?php endif; ?>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Price:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="price"
     value="<?php echo $food['price'] ?>">
    <?php if(isset($validation) && $validation->hasError('price')): ?>
            <div class="text-danger"><?= $validation->getError('price'); ?></div>
        <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status:</label>
    <select name="available" class="form-control">
    <option value="yes" <?= ($food['available'] == 'yes') ? 'selected' : '' ?>>Yes</option>
        <option value="no" <?= ($food['available'] == 'no') ? 'selected' : '' ?>>No</option>
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
     





