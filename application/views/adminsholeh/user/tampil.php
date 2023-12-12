<div class="right_col" role="main">
    <div class="col mt-5">
        <div class="add">
            <div class="row">
                <a class="p-2 text-decoration-none align-items-center mt-3">
                    <h1 class="d-none d-sm-inline text-dark" style="font-size: 28px; font-family: 'Poppins', Arial, Serif;">Kelola Data User</h1>
                </a>
                <div class="col-lg-12 table-responsive mt-3">
                  
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover table text-center mb-0 border table table-bordered"" id="dataTableHover">
                    <thead class="thead-light">
                            <tr style="font-size: 15px; font-family: 'Poppins', Arial, Serif;">
                                <th style="width: 10px">No</th>
                                <th>Avatar</th>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle" style="font-family: 'Poppins', Arial, Serif;">
                        <?php $no=1; foreach($user as $val){?>
                            <tr>
                                <td class="align-middle" style="font-size: 15px;"><?php echo $no; ?></td>
                                <td class="align-middle" style="font-size: 15px;"><?php echo $val->avatar; ?></td>
                                <td class="align-middle" style="font-size: 15px;"><?php echo $val->nama_user; ?></td>
                                <td class="align-middle" style="font-size: 15px;"><?php echo $val->email; ?></td>
                                <td class="align-middle" style="font-size: 15px;">
                                   
                                    <a href="<?php echo site_url('user/delete/'.$val->id_user);?>"><button type="button" class="btn btn-sm fs-4 btn btn-danger"></i>Hapus</button></a>
                                </td>
                            </tr>
                        <?php $no++; }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>