<?php $__env->startSection('title'); ?>
    Rekap Permintaan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="page-content page-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                 <br/>
                <div class="dashboard-heading no-print">
                    <h3 class="dashboard-title">Rekap Permintaan</h3>
                    <p class="dashboard-subtitle">
                        Rekap Permintaan yang telah diajukan peneliti
                    </p>
                </div>
                 <br/>
                <div class="card">
                    <div class="card-body">
                        <div class="row no-print">
                            <div class="col-md-4 text-left">
                                <?php if(isset($item->nomor)): ?>
                                    <?php echo e($item->nomor); ?>/LI.00.01/79/FM/2021
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4 text-center">
                                <?php echo e($item->tanggal); ?>

                            </div>

                            <div class="col-md-4 text-right">
                                <a href="<?php echo e(route('request-pdf', $item->id)); ?>" class="btn btn-primary px-5">
                                    Print As document
                                </a>
                            </div>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Judul Kegiatan</label>
                                            <input disabled type="text" name="judul" class="form-control" required value="<?php echo e($item->judul); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-2">
                                            <label>Rancangan Penelitian:</label>
                                            <textarea disabled row="5" required type="text" name="rancangan" class="form-control"><?php echo e($item->rancangan); ?></textarea>
                                        </div>

                                        <div class="form-group form-2">
                                            <label>Tujuan Kegiatan:</label>
                                            <textarea disabled row="5" required type="text" name="tujuan" class="form-control"><?php echo e($item->tujuan); ?></textarea>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Tanam</label>
                                            <input disabled type="email" name="akhir_pelaksanaan" class="form-control" required value="<?php echo e($item->tanggal_tanam); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Awal Pelaksanaan</label>
                                            <input disabled type="email" name="awal_pelaksanaan" class="form-control" required value="<?php echo e($item->awal_pelaksanaan); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Akhir Pelaksanaan</label>
                                            <input disabled type="email" name="akhir_pelaksanaan" class="form-control" required value="<?php echo e($item->akhir_pelaksanaan); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Blok</label>
                                            <input disabled type="email" name="blok" class="form-control" required value="<?php echo e($item->blok); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Peneliti</label>
                                            <input disabled type="email" name="blok" class="form-control" required value="<?php echo e($item->user->name); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Areal</label>
                                            <input disabled type="email" name="areal" class="form-control" required value="<?php echo e($item->areal); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Keterangan Areal</label>
                                            <input disabled type="text" name="areal" class="form-control" required value="<?php echo e($item->keterangan_areal); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Komoditas</label>
                                            <input disabled type="text" name="areal" class="form-control" required value="<?php echo e($item->komoditas); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Varietas</label>
                                            <input disabled type="text" name="areal" class="form-control" required value="<?php echo e($item->varietas); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Peralatan</label>
                                            <input disabled type="text" name="areal" class="form-control" required value="<?php echo e($item->peralatan); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Peralatan</label>
                                            <input disabled type="text" name="areal" class="form-control" required value="<?php echo e($item->jumlah_peralatan); ?>">
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
                                                        <input disabled placeholder="Jumlah" type="number" value="<?php echo e($item->jumlah_benih); ?>" name="jumlah_benih" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_petroganik)): ?> checked="true" <?php endif; ?> id="check_petroganik">
                                                        <label class="form-check-label" for="check_petroganik">
                                                            Petroganik
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_petroganik" value="<?php echo e($item->jumlah_petroganik); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_phonska)): ?> checked="true" <?php endif; ?> id="check_phonska">
                                                        <label class="form-check-label" for="check_phonska">
                                                            Phonska
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_phonska" value="<?php echo e($item->jumlah_phonska); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_urea)): ?> checked="true" <?php endif; ?> id="check_urea">
                                                        <label class="form-check-label" for="check_urea">
                                                            Urea
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_urea" value="<?php echo e($item->jumlah_urea); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_za)): ?> checked="true" <?php endif; ?> id="check_za">
                                                        <label class="form-check-label" for="check_za">
                                                            ZA
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_za" value="<?php echo e($item->jumlah_za); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox"  <?php if(isset($item->jumlah_zk)): ?> checked="true" <?php endif; ?> id="check_zk">
                                                        <label class="form-check-label" for="check_zk">
                                                            ZK
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_zk" value="<?php echo e($item->jumlah_zk); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->jumlah_kci)): ?> checked="true" <?php endif; ?> id="check_kci">
                                                        <label class="form-check-label" for="check_kci">
                                                            KCI
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_kci" value="<?php echo e($item->jumlah_kci); ?>" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" <?php if(isset($item->benih_lain)): ?> checked="true" <?php endif; ?> id="check_lain">
                                                        <label class="form-check-label" for="check_lain">
                                                            Lainnya
                                                        </label>
                                                        <input disabled type="text" placeholder="Keterangan" name="benih_lain" value="<?php echo e($item->benih_lain); ?>" class="form-control mb-3">
                                                        <input disabled type="number" placeholder="Jumlah" name="jumlah_lain" value="<?php echo e($item->jumlah_lain); ?>" class="form-control mb-3">
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
                                            <label>Catatan Staff Muda</label>
                                            <textarea name="description" disabled class="form-control"><?php echo e($item->catatan_staf_muda); ?></textarea>
                                        </div>
                                    </div>

                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Catatan VP</label>
                                            <textarea name="catatan_vp" disabled class="form-control"><?php echo e($item->catatan_vp); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input disabled type="text" name="status" value="<?php echo e($item->status); ?>" class="form-control mb-3">
                                        </div>
                                    </div>
                                </div>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('addon-scripts'); ?>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace('editor');
    </script>
    <script>

        function test_print() {

            $('.no-print').hide();

            window.print();
        }
        
         
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/lahan/resources/views/pages/requestdetails.blade.php ENDPATH**/ ?>