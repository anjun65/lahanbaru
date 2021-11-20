<?php $__env->startSection('title'); ?>
    Rekap Permintaan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="page-content page-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <br/>
                <div class="dashboard-heading">
                    <h3 class="dashboard-title">Rekap Permintaan</h3>
                    <p class="dashboard-subtitle">
                        Rekap Permintaan yang telah diajukan peneliti
                    </p>
                </div>
                <br/>

                <div class="dashboard-content">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link active"
                                id="diajukan-tab"
                                data-toggle="tab"
                                href="#diajukan"
                                role="tab"
                                aria-controls="diajukan"
                                aria-selected="true"
                                >Sedang diajukan</a
                            >
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                id="disetujui-tab"
                                data-toggle="tab"
                                href="#disetujui"
                                role="tab"
                                aria-controls="disetujui"
                                aria-selected="false"
                                >Disetujui</a
                            >
                        </li>

                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                id="revisi-tab"
                                data-toggle="tab"
                                href="#revisi"
                                role="tab"
                                aria-controls="revisi"
                                aria-selected="false"
                                >Revisi</a
                            >
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="diajukan"
                            role="tabpanel"
                            aria-labelledby="diajukan-tab"
                        >
                            <div class="row mt-3">
                                <div class="col-12 mt-2">
                                    <?php $__empty_1 = true; $__currentLoopData = $diajukan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diajukan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <a
                                        class="card card-list d-block"
                                        href="<?php echo e(route('request-show', $diajukan->id)); ?>"
                                    >
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <?php echo e($diajukan->blok); ?>

                                                </div>
                                                <div class="col-md-4">
                                                    <?php echo e($diajukan->judul); ?>

                                                </div>
                                                <div class="col-md-3">
                                                    <?php echo e($diajukan->awal_pelaksanaan); ?>

                                                </div>
                                                <div class="col-md-3">
                                                    <?php echo e($diajukan->akhir_pelaksanaan); ?>

                                                </div>
                                                <div class="col-md-1 d-none d-md-block">
                                                    <img
                                                        src="images/dashboard-arrow-right.svg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-12 mt-2 text-center"
                                        data-aos="fade-up"
                                        data-aos-delay="100">
                                        Tidak ada permintaan yang diajukan
                                    </div>
                                    
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div
                        class="tab-pane fade"
                        id="disetujui"
                        role="tabpanel"
                        aria-labelledby="disetujui-tab"
                        >
                            <div class="row mt-3">
                                <div class="col-12 mt-2">
                                    <?php $__empty_1 = true; $__currentLoopData = $disetujui; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disetujui): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <a
                                        class="card card-list d-block"
                                        href="<?php echo e(route('request-show', $disetujui->id)); ?>"
                                    >
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <?php echo e($disetujui->blok); ?>

                                                </div>
                                                <div class="col-md-4">
                                                    <?php echo e($disetujui->judul); ?>

                                                </div>
                                                <div class="col-md-3">
                                                    <?php echo e($disetujui->awal_pelaksanaan); ?>

                                                </div>
                                                <div class="col-md-3">
                                                    <?php echo e($disetujui->akhir_pelaksanaan); ?>

                                                </div>
                                                <div class="col-md-1 d-none d-md-block">
                                                    <img
                                                        src="images/dashboard-arrow-right.svg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </a>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-12 mt-2 text-center"
                                        data-aos="fade-up"
                                        data-aos-delay="100">
                                        Tidak ada permintaan yang disetujui
                                    </div>
                                    
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div
                        class="tab-pane fade"
                        id="revisi"
                        role="tabpanel"
                        aria-labelledby="revisi-tab"
                        >
                            <div class="row mt-3">
                                <div class="col-12 mt-2">
                                    <?php $__empty_1 = true; $__currentLoopData = $revisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $revisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <a
                                        class="card card-list d-block"
                                        href="<?php echo e(route('request-show', $revisi->id)); ?>"
                                    >
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <?php echo e($revisi->blok); ?>

                                                </div>
                                                <div class="col-md-4">
                                                    <?php echo e($revisi->judul); ?>

                                                </div>
                                                <div class="col-md-3">
                                                    <?php echo e($revisi->awal_pelaksanaan); ?>

                                                </div>
                                                <div class="col-md-3">
                                                    <?php echo e($revisi->akhir_pelaksanaan); ?>

                                                </div>
                                                <div class="col-md-1 d-none d-md-block">
                                                    <img
                                                        src="images/dashboard-arrow-right.svg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </a>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-12 mt-2 text-center"
                                        data-aos="fade-up"
                                        data-aos-delay="100">
                                        Tidak ada permintaan yang perlu direvisi
                                    </div>
                                    
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/lahan/resources/views/pages/request.blade.php ENDPATH**/ ?>