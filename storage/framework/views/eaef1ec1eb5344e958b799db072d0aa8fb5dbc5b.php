<?php $__env->startSection('title'); ?>
    Rekap Permintaan
<?php $__env->stopSection(); ?>





<?php $__env->startSection('content'); ?>

<div class="page-content page-home">
    <div class="container">
        <div class="row">
            <table class="table table-bordered" style="">
                <tbody>
                    <tr>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-left:hidden;border-right-color: white;"></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td colspan="2" class="text-center align-middle">
                            <img src="<?php echo e(asset('images/logo-pdf.png')); ?>" class="card-img-top w-100">
                        </td>
                        <td colspan="8" class="text-center">
                            <p><h3>PERMINTAAN SARANA PENELITIAN</h3></p>
                            <p class="m-0">Nomor : <?php echo e($item->nomor); ?>/LI.00.01/79/FM/2021</p>
                            <p class="m-0">Tanggal : <?php echo e($item->tanggal); ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" height="10px" style="padding-bottom:0px;border-bottom: hidden;border-right:hidden;">
                            Judul Kegiatan
                        </td>
                        <td colspan="8" style="padding-bottom:0px;border-bottom: hidden;">
                            : <?php echo e($item->judul); ?><br>
                               
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" height="10px" style="font-size: 15px;padding-top:0px;padding-bottom:0px;border-bottom: hidden;border-right:hidden;">
                            Waktu Pelaksanaan
                        </td>
                        <td colspan="8" style="padding-top:0px;padding-bottom:0px;border-bottom: hidden;">
                            : <?php echo e($item->awal_pelaksanaan); ?>-<?php echo e($item->akhir_pelaksanaan); ?>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="padding-top:0px;padding-bottom:0px;border-bottom: hidden;border-right:hidden;">
                            Blok
                        </td>
                        <td colspan="8" style="padding-top:0px;padding-bottom:0px;border-bottom: hidden;">
                            : <?php echo e($item->blok); ?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top:0px;padding-bottom:0px;border-bottom: hidden;border-right:hidden;">
                            Varietas
                        </td>
                        <td colspan="8" style="padding-top:0px;padding-bottom:0px;border-bottom: hidden;">
                            : <?php echo e($item->varietas); ?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top:0px;border-right:hidden;">
                            Peneliti
                        </td>
                        <td colspan="8" style="padding-top:0px;padding-bottom:0px;">
                            : <?php echo e($item->user->name); ?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="10">
                            <b>A. TUJUAN</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="10">
                            <?php echo e($item->tujuan); ?>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="10">
                            <b>B. PERLAKUAN</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="10">
                            <?php echo e($item->rancangan); ?>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="10">
                            <b>C. KEBUTUHAN SARANA</b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <p class="m-1" style="padding-left:5px;">A. Areal</p>
                            <?php if($item->areal == "Lahan sawah/lahan basah"): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan sawah , luas <?php echo e($item->keterangan_areal); ?> m<sup>2</sup>
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan sawah , luas ...... m<sup>2</sup>
                                </p>
                            <?php endif; ?>


                            <?php if($item->areal == "Lahan Kering "): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan Kering , luas <?php echo e($item->keterangan_areal); ?> m<sup>2</sup>
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan Kering , luas ...... m<sup>2</sup>
                                </p>
                            <?php endif; ?>


                            <?php if($item->areal == "Rumah Kaca"): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Rumah Kaca , jumlah <?php echo e($item->keterangan_areal); ?> buah
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Rumah Kaca , jumlah ..... buah
                                </p>
                            <?php endif; ?>

                            <?php if($item->areal == "Lahan Paving"): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan paving , luas <?php echo e($item->keterangan_areal); ?> m<sup>2</sup>
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan paving , luas ...... m<sup>2</sup>
                                </p>
                            <?php endif; ?>
                        </td>
                        
                        <td colspan="5">
                             <p class="m-1" style="padding-left:5px;">B. Peralatan</p>

                            <?php if($item->peralatan == "Ember"): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Ember , jumlah <?php echo e($item->jumlah_peralatan); ?>

                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Ember , jumlah ......
                                </p>
                            <?php endif; ?>
                            
                            <?php if($item->peralatan == "Polibag"): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Polibag , jumlah <?php echo e($item->jumlah_peralatan); ?>

                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Polibag, jumlah .......
                                </p>
                            <?php endif; ?>

                            <?php if($item->peralatan == "Pot/drum"): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Pot/drum, jumlah <?php echo e($item->jumlah_peralatan); ?>

                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Pot/drum, jumlah .......
                                </p>
                            <?php endif; ?>

                            <?php if($item->peralatan == "Mulsa"): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Mulsa
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Mulsa
                                </p>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td height="80px" colspan="5">
                            <p class="m-1" style="padding-left:5px;">C. Benih & Pupuk</p>
                            
                            <?php if(isset($item->jumlah_benih)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Benih, (Disediakan peneliti)
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Benih, (Disediakan peneliti)
                                </p>
                            <?php endif; ?>

                            <?php if(isset($item->jumlah_petroganik)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Petroganik, <?php echo e($item->jumlah_phonska); ?> Kg
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Petroganik, ........ Kg
                                </p>
                            <?php endif; ?>

                            <?php if(isset($item->jumlah_phonska)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Phonska, <?php echo e($item->jumlah_phonska); ?> Kg
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Phonska, ........ Kg
                                </p>
                            <?php endif; ?>

                            <?php if(isset($item->jumlah_urea)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Urea, <?php echo e($item->jumlah_urea); ?> Kg
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Urea, ........ Kg
                                </p>
                            <?php endif; ?>
                            
                            
                            
                        </td>
                        <td colspan="5">
                             <?php if(isset($item->jumlah_za)): ?>
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> ZA , <?php echo e($item->jumlah_za); ?> Kg
                                </p>
                            <?php else: ?>
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> ZA , ....... Kg
                                </p>
                            <?php endif; ?>

                             <?php if(isset($item->jumlah_zk)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> ZK , <?php echo e($item->jumlah_zk); ?> Kg
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> ZK , ...... Kg
                                </p>
                            <?php endif; ?>

                            <?php if(isset($item->jumlah_kci)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> KCI , <?php echo e($item->jumlah_kci); ?> Kg
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> KCI , ...... Kg
                                </p>
                            <?php endif; ?>

                            <?php if(isset($item->benih_lain)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , <?php echo e($item->benih_lain); ?>  <?php echo e($item->benih_lain); ?> Kg
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , ...... Kg
                                </p>
                            <?php endif; ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="5">
                            <p class="m-1" style="padding-left:5px;">D. Sarana lain</p>

                            <?php if(isset($item->pestisida)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" checked="true" aria-label="Checkbox for following text input"> Pestisida sesuai kebutuhan
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Pestisida sesuai kebutuhan
                                </p>
                            <?php endif; ?>

                            <?php if(isset($item->herbisida)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" checked="true" aria-label="Checkbox for following text input"> Herbisida sesuai kebutuhan
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Herbisida sesuai kebutuhan
                                </p>
                            <?php endif; ?>

                            <?php if(isset($item->fungisida)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Fungisida sesuai kebutuhan
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Fungisida sesuai kebutuhan
                                </p>
                            <?php endif; ?>
                            
                        </td>
                        <td colspan="5">
                            <?php if(isset($item->plastik_barrier)): ?>
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Plastik Barier
                                </p>
                            <?php else: ?>
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Plastik Barier
                                </p>
                            <?php endif; ?>

                            <?php if(isset($item->jaring_burung)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Jaring Burung
                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Jaring Burung
                                </p>
                            <?php endif; ?>


                            <?php if(isset($item->sarana_lain)): ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , <?php echo e($item->sarana_lain); ?>

                                </p>
                            <?php else: ?>
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , ......
                                </p>
                            <?php endif; ?>
                            
                        </td>
                    </tr>
                    <tr height="130px">
                        <td colspan="3">
                            <p class="text-center">
                                 Peneliti <br/><br/><br/><br/><br/><br/>
                                 <?php echo e($item->user->name); ?>

                            </p>
                        </td>
                        <td colspan="4">
                            <p class="mb-0">
                                 <u>Catatan Pengelola Kebun:</u>
                            </p>
                            <p>
                                 <?php echo e($item->catatan_staf_muda); ?>

                            </p>
                        </td>
                        <td colspan="3">
                            <p class="text-center">
                                 Pengelola Kebun<br/><br/><br/><br/><br/><br/>
                                 Ganep Setiawan
                            </p>
                        </td>
                    </tr>

                    <tr height="130px">
                        <td colspan="5">
                            <p class="mb-0">
                                 <u>Komentar VP Riset :</u>
                            </p>
                            <p>
                                <?php echo e($item->catatan_vp); ?>

                            </p>
                        </td>
                        <td colspan="5">
                            <p class="text-center">
                                 Mengetahui VP Riset *
                                 <br/><br/><br/><br/><br/><br/>
                                 Muammar Ma'arif
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        
        </div>

    </div>

    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pdf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/lahan/resources/views/pages/requestpdf.blade.php ENDPATH**/ ?>