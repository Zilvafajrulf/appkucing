<div class="right_col" role="main">
            <div class="col-9 col-lg-10 mt-5">
                <div class="col-md-12">
                    <div class="col" >
                        <div class="py-2">
                            <a class="d-flex text-decoration-none align-items-center">
                                <h1 class="fs-4 d-none d-sm-inline text-dark">Settings</h1>
                            </a>
                        </div>
                        <div class="add">
                            <div class="row">
                                <div class="col-md-6">
                                    <form class="border rounded-2 p-5 form-horizontal" method="post" action="<?php echo site_url('settings/edit');?>" enctype="multipart/form-data">
                                    <?php foreach($admin as $val){?>
                                        <h4 class="mb-4">My Profile</h4>
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $val->id_admin; ?>">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control rounded-0" id="exampleInputEmail1" placeholder="Olivia" aria-describedby="emailHelp" value="<?php echo $val->username; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control rounded-0" id="exampleInputEmail1" placeholder="Lorem ipsum" aria-describedby="emailHelp" value="<?php echo $val->password; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary rounded-0 float-right">Save Change</button>
                                        </div>
                                    <?php }?>
                                    </form>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>