<div class="content">
    <div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Detail Kucing
        </h2>
    </div>

        
   <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
            <div class="box">
                    <div class="p-5">
                    <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">

                           <div class="row px-xl-5">

                           <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>
                        
 <table>
        <?php foreach ($kucing as $row) : ?>
          
    <tr>
    <td>
            <!-- Gambar 1 -->
            <div class="form-inline items-start flex-col 2xl:flex-row mt-10"> 
            <div class=" border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            
            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    
            <img class="rounded-md" alt="Midone - HTML Admin Template" src=" <?= base_url() . '/gambar_kucing/' . $row->gambar1 ?>">
                                    
            </div>
            <div class="form-label w-full xl:w-64 xl:!mr-10">
            <div class="text-left">
            <div class="flex items-center">
            <div class="font-medium">Tampak Depan</div>
           
            </div>
            </div>
            <div class="w-full mt-3 xl:mt-0 flex-1">
                  
                </div>
                </div>
        </td>

        <td>
                
            <div class="form-inline items-start flex-col xl:flex-row mt-10"> 
            <div class=" border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            
            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    
            <img class="rounded-md" alt="Midone - HTML Admin Template" src=" <?= base_url() . '/gambar_kucing/' . $row->gambar2 ?>">
                                    
            </div>
            <div class="form-label w-full xl:w-64 xl:!mr-10">
            <div class="text-left">
            <div class="flex items-center">
            <div class="font-medium">Tampak Belakang</div>
           
            </div>
            </div>
            <div class="w-full mt-3 xl:mt-0 flex-1">
                  
                </div>
                </div>
    </td>

    <td>
                
            <div class="form-inline items-start flex-col xl:flex-row mt-10"> 
            <div class=" border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            
            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    
            <img class="rounded-md" alt="Midone - HTML Admin Template" src=" <?= base_url() . '/gambar_kucing/' . $row->gambar3 ?>">
                                    
            </div>
            <div class="form-label w-full xl:w-64 xl:!mr-10">
            <div class="text-left">
            <div class="flex items-center">
            <div class="font-medium">Tampak Kiri</div>
           
            </div>
            </div>
            <div class="w-full mt-3 xl:mt-0 flex-1">
                  
                </div>
                </div>
    </td>
    
    <td>
                
            <div class="form-inline items-start flex-col xl:flex-row mt-10"> 
            <div class=" border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            
            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    
            <img class="rounded-md" alt="Midone - HTML Admin Template" src=" <?= base_url() . '/gambar_kucing/' . $row->gambar4 ?>">
                                    
            </div>
            <div class="form-label w-full xl:w-64 xl:!mr-10">
            <div class="text-left">
            <div class="flex items-center">
            <div class="font-medium">Tampak Kanan</div>
           
            </div>
            </div>
            <div class="w-full mt-3 xl:mt-0 flex-1">
                  
                </div>
                </div>
    </td>
    </tr>
        <?php endforeach; ?>
 </table>
                   
                        <div class="p-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                   <h2 class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Deskripsi Kucing</h2>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">
                            <table class="table">
                                <tr>
                                    <td>Jenis Kucing</td>
                                    <td><strong><?= $row->jenis_kucing ?></strong></td>
                                </tr>
                                
                                <tr>
                                    <td>Jenis Kelamin Kucing</td>
                                    <td><strong><?= $row->jk_kucing ?></strong></td>
                                </tr>
                                
                                <tr>
                                    <td>Usia Kucing</td>
                                    <td><strong><?= $row->usia_kucing ?></strong></td>
                                </tr>
                                
                                <tr>
                                    <td>Deskripsi Kucing</td>
                                    <td><strong><?= $row->deskripsi ?></strong></td>
                                </tr>
                                
                                <tr>
                                    <td>Biaya Adopsi Kucing</td>
                                    <td><strong><?= $row->biaya_adopsi ?></strong></td>
                                </tr>                                
                            </table>
                        </div>    
                        </div> 
                        </div>  
                </div>
            </div>
                </div>
                </div>
                </div>
                    <!-- button Action Detail -->
        <?php foreach ($kucing as $id) : ?>
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center btn btn-sm btn-primary mr-3" href="<?= site_url('dashboard/cart/' . $id->id_kucing) ?>"> <i data-lucide="hand" class="w-4 h-4 mr-1"></i> Adopsi </a> 
                    <a class="flex items-center btn btn-sm btn-primary mr-3" href="<?= site_url('dashboard/index/' . $id->id_kucing) ?>"> <i data-lucide="home" class="w-4 h-4 mr-1"></i> Dashboard </a>
                    </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
    </div>
</div>
</div>
</div>
</div>