
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

               
                    <!-- Content Row -->
                    <div class="row">

                  



                      
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                     <!-- Button trigger modal -->
            
                  <a href="<?php echo base_url('reservations/create');?>" class="btn btn-primary m-3"> Add Details</a>

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                              
                                <!-- Card Body -->
                                <div class="card-body">
                                <table class="table" id="myTable">
                                  <thead>
                                   <tr>
                             <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                   <th scope="col">Email</th>
                                     <th scope="col">Status</th>
                                        <th scope="col">Payment Mode</th>
                                        <th scope="col">Table available</th>
                                     <th scope="col">Actions</th>
                                            </tr>   
                                          </thead>
                                       <tbody>
                                       <?php
                                       $i=1;
                                     foreach ($reservations as $reservation) : ?>
                                        
                                       <tr <?php echo $reservation['id'];?>>
                                        <td><?php echo $i++;?></td>
                                               <td><?= $reservation['name'] ?></td>
                                               <td><?= $reservation['email'] ?></td>
                                               <td><?= $reservation['status'] ?></td>
                                               <td><?= $reservation['payment_mode'] ?></td>
                                               <td>
                                            <button style="background-color: <?= ($reservation['available'] == 'yes') ? 'green' : 'red' ?>; color: white;">
                                                    <?= ($reservation['available'] == 'yes') ? 'Available' : 'Not Available' ?>
                                                </button>
                                            </td>
                                             
                                               <td>
                                                   <a href="<?= base_url('reservations/edit/' . $reservation['id']) ?>" class="btn btn-primary btn-sm mb-1">Edit</a>
                                                   <a href="<?= base_url('reservations/delete/' . $reservation['id']) ?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Are you sure?')">Delete</a>
                                               </td>
                                           </tr>
                                       <?php endforeach; ?>
   
                                         </tbody>
                                            </table>
                                </div>
                            </div>
                        </div>

                     
                    </div>

                

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>






    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>







    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/admin_asset/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/admin_asset/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/admin_asset/js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/admin_asset/vendor/chart.js/Chart.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/admin_asset/js/demo/chart-area-demo.js')?>"></script>
    <script src="<?php echo base_url('assets/admin_asset/js/demo/chart-pie-demo.js')?>"></script>

    <script>
//     $(document).ready(function(){
//         let table = new DataTable('#myTable');
// });
</script>

</body>

</html>