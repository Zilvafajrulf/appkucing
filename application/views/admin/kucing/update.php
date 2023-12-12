<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Update Kucing
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-12 2xl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Display Data Kucing
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <?php foreach ($kucing as $row) : ?>
                            <div class="flex-1 mt-6 xl:mt-0">
                                <form action="<?= site_url('admin/kucing/insert_update') ?>" method="post" enctype="multipart/form-data">
                                    <div class="grid grid-cols-12 gap-x-5">
                                        <div class="col-span-12 2xl:col-span-6">
                                            <div>
                                                <label for="update-profile-form-1" class="form-label">Jenis Kucing</label>
                                                <input type="hidden" name="id_kucing" value="<?= $row->id_kucing ?>">
                                                <input id="update-profile-form-1" type="text" class="form-control" name="jenis_kucing" value="<?= $row->jenis_kucing ?>">
                                            </div>
                                            <!--<div class="mt-3">
                                                <label for="update-profile-form-2" class="form-label">Categories</label>
                                                <select id="category" name="kategori" class="form-select">
                                                    <option selected hidden value="<?= $row->kategori ?>"><?= $row->kategori ?></option>
                                                    <option value="T-Shirt">T-Shirt</option>
                                                    <option value="Jacket">Jacket</option>
                                                    <option value="Shoes">Shoes</option>
                                                    <option value="Electronic">Electronic</option>
                                                    <option value="Kids &amp; Baby">Kids &amp; Baby</option>
                                                    <option value="Fashion &amp; Make Up">Fashion &amp; Make Up</option>
                                                </select>
                                            </div> -->
                                        </div>
                                        <div class="col-span-12 2xl:col-span-6">
                                            <div class="mt-3 2xl:mt-0">
                                                <label for="update-profile-form-2" class="form-label">Usia Kucing</label>
                                                <input id="update-profile-form-2" type="text" class="form-control" name="usia_kucing" value="<?= $row->usia_kucing ?>">
                                            </div>
                                            <div class="mt-3">
                                                <label for="update-profile-form-3" class="form-label">Jenis Kelamin</label>
                                                <input id="update-profile-form-3" type="text" class="form-control" name="jk_kucing" value="<?= $row->jk_kucing ?>">
                                            </div>
                                            <div class="mt-3">
                                                <label for="update-profile-form-4" class="form-label">Biaya Adopsi</label>
                                                <input id="update-profile-form-4" type="text" class="form-control" name="biaya_adopsi" value="<?= $row->biaya_adopsi ?>">
                                            </div>
                                        </div>
                                        <div class="col-span-12">
                                            <div class="mt-3">
                                                <label for="update-profile-form-5" class="form-label">Deskripsi</label>
                                                <textarea id="update-profile-form-5" class="form-control" name="deskripsi" value="<?= $row->deskripsi ?>"><?= $row->deskripsi ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-20 mt-3">Save</button>
                                </form>
                            </div>
                            
                            <div class="intro-y box p-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Upload Gambar Kucing </div>
                        <div class="mt-5">
                            
                            </div>
                           
                </div>
                     <table>
                        <tr>
                            <td>
                            <!-- Gambar 1 -->
                            <div class="form-inline items-start flex-col xl:flex-row mt-10"> 
                            <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                   
                            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                           
                            <img class="rounded-md" alt="Midone - HTML Admin Template" src=" <?= base_url() . '/uploads/' . $row->gambar1 ?>">
                        
                        </div>
                                <div class="form-label w-full xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Tampak Depan</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="gambar1" name="gambar1" type="file" class="form-control">
                                    <div class="form-help text-right">Required for file types with type jpg, jpeg or png</div>
                                </div>
                            </div>
                            </td>
                            <td>
                            <!-- Gambar 2 
                            <div class="form-inline items-start flex-col xl:flex-row mt-10">
                            <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                        <img class="rounded-md" alt="Midone - HTML Admin Template" src="<?= base_url() . '/uploads/' . $row->gambar2 ?>">
                                        <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                    </div>
                                <div class="form-label w-full xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Tampak Belakang</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="gambar2" name="gambar2" type="file" class="form-control">
                                    <div class="form-help text-right">Required for file types with type jpg, jpeg or png</div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <!-- Gambar 3 
                            <div class="form-inline items-start flex-col xl:flex-row mt-10">
                                <div class="form-label w-full xl:w-64 xl:!mr-10">
                                <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                        <img class="rounded-md" alt="Midone - HTML Admin Template" src="<?= base_url() . '/uploads/' . $row->gambar3 ?>">
                                        <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                    </div>
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Tampak Kiri</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="gambar3" name="gambar3" type="file" class="form-control">
                                    <div class="form-help text-right">Required for file types with type jpg, jpeg or png</div>
                                </div>
                            </div>
                            </td>
                            <td>
                            <!-- Gambar 4 
                            <div class="form-inline items-start flex-col xl:flex-row mt-10">
                                <div class="form-label w-full xl:w-64 xl:!mr-10">
                                <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                        <img class="rounded-md" alt="Midone - HTML Admin Template" src="<?= base_url() . '/uploads/' . $row->gambar4 ?>">
                                        <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                    </div>
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Tampak Kanan</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="gambar4" name="gambar4" type="file" class="form-control" >
                                    <div class="form-help text-right">Required for file types with type jpg, jpeg or png</div>
                                </div>
                             </div> -->
                            </div>

                        </div>
                    </div>
                </div> 
                </td>
                </tr>
                </table>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div> 

        </div>
    </div>
</div>