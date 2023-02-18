 <!-- Content Wrapper. Contains page content -->

 <!-- Content Header (Page header) -->

 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-12">
         <div class="card">
           <div class="card-header">
             <h3 class="card-title">DataTable with default features</h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                   <th>Kode</th>
                   <th>Nama Perusahaan</th>
                   <th>Alamat</th>
                   <th>Kota</th>
                   <th>Pemilik</th>
                   <th>Action</th>
                   <th>ID PERUSAHAAN</th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                  $mno = 0;
                  $mquery = mysqli_query($konenksi, "SELECT * FROM pt_owner");
                  while ($mpt = mysqli_fetch_array($mquery)) {
                    $mno++
                  ?>
                   <tr>
                     <td width='5'><?php echo $mpt['KODE']; ?></td>
                     <td><?php echo $mpt['NAMAPO']; ?></td>
                     <td><?php echo $mpt['ALAMAT1']; ?></td>
                     <td><?php echo $mpt['KOTA']; ?></td>
                     <td><?php echo $mpt['NAMAPEM']; ?></td>
                     <td><?php echo $mpt['NM_TARIS']; ?></td>
                     <td><?php echo $mpt['ID_PERUS']; ?></td>
                   </tr>
                 <?php } ?>
               </tbody>
               <tfoot>
                 <!-- <tr>
                   <th>Rendering engine</th>
                   <th>Browser</th>
                   <th>Platform(s)</th>
                   <th>Engine version</th>
                   <th>CSS grade</th>
                   <th>CSS gradea</th>
                 </tr> -->
               </tfoot>
             </table>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
 </section>
 <!-- /.content -->