<?php $__env->startSection('title'); ?>
    Permintaan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Permintaan</h2>
            <p class="dashboard-subtitle">
                Edit Permintaan
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo e(route('request.update', $item->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Kegiatan</label>
                                            <input type="text" name="judul" class="form-control" value="<?php echo e($item->judul); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor</label>
                                            <input type="text"  value="<?php echo e($item->nomor); ?>" name="nomor" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-2">
                                            <label>Rancangan Penelitian:</label>
                                            <textarea row="5" required type="text" name="rancangan" class="form-control"><?php echo e($item->rancangan); ?></textarea>
                                        </div>

                                        <div class="form-group form-2">
                                            <label>Tujuan Kegiatan:</label>
                                            <textarea row="5" required type="text" name="tujuan" class="form-control"><?php echo e($item->tujuan); ?></textarea>
                                        </div>
                                    </div>

                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Tanam</label>
                                            <input type="text" name="akhir_pelaksanaan" class="form-control" value="<?php echo e($item->tanggal_tanam); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Awal Pelaksanaan</label>
                                            <input type="text" name="awal_pelaksanaan" class="form-control" value="<?php echo e($item->awal_pelaksanaan); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Akhir Pelaksanaan</label>
                                            <input type="text" name="tanam_date" class="form-control" value="<?php echo e($item->akhir_pelaksanaan); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Blok</label>
                                            <input type="text" name="blok" class="form-control" value="<?php echo e($item->blok); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Peneliti</label>
                                            <input disabled type="text" name="peneliti" class="form-control" value="<?php echo e($item->user->name); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Areal</label>
                                            <input type="text" name="areal" class="form-control" value="<?php echo e($item->areal); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Keterangan Areal</label>
                                            <input type="text" name="keterangan_areal" class="form-control" value="<?php echo e($item->keterangan_areal); ?>">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Komoditas</label>
                                             <select name="komoditas" id="select_komoditas" class="form-control">
                                                <option value="<?php echo e($item->komoditas); ?>" selected> <?php echo e($item->komoditas); ?> </option>
                                                <option value="Padi">Padi</option>
                                                <option value="Cabai Rawit">Cabai Rawit</option>
                                                <option value="Cabai Besar">Cabai Besar</option>
                                                <option value="Cabai Keriting">Cabai Keriting</option>
                                                <option value="Bawang Merah">Bawang Merah</option>
                                                <option value="Tomat">Tomat</option>
                                                <option value="Terong">Terong</option>
                                                <option value="Sawi">Sawi</option>
                                                <option value="Jagung">Jagung</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Varietas</label>
                                            <input type="text" name="varietas" class="form-control" value="<?php echo e($item->varietas); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Peralatan</label>
                                            <select name="peralatan" id="select_peralatan" class="form-control">
                                                <option value="<?php echo e($item->peralatan); ?>" selected> <?php echo e($item->peralatan); ?> </option>
                                                <option value="Ember">Ember</option>
                                                <option value="Polibag">Polibag</option>
                                                <option value="Pot/drum">Pot/drum</option>
                                                <option value="Mulsa">Mulsa</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Peralatan</label>
                                            <input type="text" name="jumlah_peralatan" class="form-control" value="<?php echo e($item->jumlah_peralatan); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Qrcode</label>
                                            <p>
                                                <?php if($item->status == "Disetujui"): ?> 
                                                    <?php echo e($qrcode); ?>

                                                <?php else: ?>
                                                    QRcode akan muncul jika sudah disetujui
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-2">
                                            <label>Benih dan Pupuk :</label>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_benih)): ?> checked="true" <?php endif; ?> id="check_benih">
                                                        <label class="form-check-label" for="check_benih">
                                                            Benih
                                                        </label>
                                                        <input placeholder="Jumlah" type="text" value="<?php echo e($item->jumlah_benih); ?>" name="jumlah_benih" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_petroganik)): ?> checked="true" <?php endif; ?> id="check_petroganik">
                                                        <label class="form-check-label" for="check_petroganik">
                                                            Petroganik
                                                        </label>
                                                        <input placeholder="Jumlah" type="text" name="jumlah_petroganik" value="<?php echo e($item->jumlah_petroganik); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_phonska)): ?> checked="true" <?php endif; ?> id="check_phonska">
                                                        <label class="form-check-label" for="check_phonska">
                                                            Phonska
                                                        </label>
                                                        <input placeholder="Jumlah" type="text" name="jumlah_phonska" value="<?php echo e($item->jumlah_phonska); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_urea)): ?> checked="true" <?php endif; ?> id="check_urea">
                                                        <label class="form-check-label" for="check_urea">
                                                            Urea
                                                        </label>
                                                        <input placeholder="Jumlah" type="text" name="jumlah_urea" value="<?php echo e($item->jumlah_urea); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_za)): ?> checked="true" <?php endif; ?> id="check_za">
                                                        <label class="form-check-label" for="check_za">
                                                            ZA
                                                        </label>
                                                        <input placeholder="Jumlah" type="text" name="jumlah_za" value="<?php echo e($item->jumlah_za); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox"  <?php if(isset($item->jumlah_zk)): ?> checked="true" <?php endif; ?> id="check_zk">
                                                        <label class="form-check-label" for="check_zk">
                                                            ZK
                                                        </label>
                                                        <input placeholder="Jumlah" type="text" name="jumlah_zk" value="<?php echo e($item->jumlah_zk); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_kci)): ?> checked="true" <?php endif; ?> id="check_kci">
                                                        <label class="form-check-label" for="check_kci">
                                                            KCI
                                                        </label>
                                                        <input placeholder="Jumlah" type="text" name="jumlah_kci" value="<?php echo e($item->jumlah_kci); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->benih_lain)): ?> checked="true" <?php endif; ?> id="check_lain">
                                                        <label class="form-check-label" for="check_lain">
                                                            Lainnya
                                                        </label>
                                                        <input type="text" placeholder="Keterangan" name="benih_lain" value="<?php echo e($item->benih_lain); ?>" class="form-control mb-3">
                                                        <input type="text" placeholder="Jumlah" name="jumlah_lain" value="<?php echo e($item->jumlah_lain); ?>" class="form-control mb-3">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-2">
                                            <label>Sarana Lain :</label>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" <?php if(isset($item->pestisida)): ?> checked="true" <?php endif; ?> name="pestisida" id="check_pestisida">
                                                        <label class="form-check-label" for="check_pestisida">
                                                            Pestisida sesuai kebutuhan
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" <?php if(isset($item->herbisida)): ?> checked="true" <?php endif; ?> name="herbisida" id="check_herbisida">
                                                        <label class="form-check-label" for="check_herbisida">
                                                            Herbisida sesuai kebutuhan
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" <?php if(isset($item->fungisida)): ?> checked="true" <?php endif; ?> name="fungisida" id="check_fungisida">
                                                        <label class="form-check-label" for="check_fungisida">
                                                            Fungisida sesuai kebutuhan
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" <?php if(isset($item->plastik_barrier)): ?> checked="true" <?php endif; ?> name="plastik_barrier" id="check_plastik">
                                                        <label class="form-check-label" for="check_plastik">
                                                            Plastik Barier
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" <?php if(isset($item->jaring_burung)): ?> checked="true" <?php endif; ?> name="jaring_burung" id="check_jaring">
                                                        <label class="form-check-label" for="check_jaring">
                                                            Jaring Burung
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->sarana_lain)): ?> checked="true" <?php endif; ?> id="check_sarana_lain">
                                                        <label class="form-check-label" for="check_sarana_lain">
                                                            Lainnya
                                                        </label>
                                            </div>
                                            <div class="form-check mb-3 mr-4">
                                                <input type="text" placeholder="Keterangan" value="<?php echo e($item->sarana_lain); ?>" name="sarana_lain" class="form-control mb-3">
                                            </div>
                                        </div>
                                    </div>


                                    

                                    

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Catatan</label>
                                            <textarea name="description" name="catatan" class="form-control"><?php echo e($item->catatan_staf_muda); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" required class="form-control">
                                                <option value="<?php echo e($item->status); ?>" selected><?php echo e($item->status); ?></option>
                                                <option value="Diajukan">Diajukan</option>
                                                <option value="Disetujui">Disetujui</option>
                                                <option value="Revisi">Revisi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-success px-5">
                                            Save now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/lahan/resources/views/pages/admin/request/edit.blade.php ENDPATH**/ ?>