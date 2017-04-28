<?php $__env->startSection('content'); ?>
    <!-- Static navbar -->
    <nav class="navbar1 navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="/images/logo.png" />
                </a>
                <a class="navbar-brand" href="/">
                    非常有用的家装设计参考网——<?php echo e(config('app.name')); ?>

                </a>
            </div>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/"><i class="icon-about"></i>关于</a></li>
                <li><a href="./"><i class="icon-contact"></i>联系我们</a></li>
                <li><a href=""><i class="icon-submit"></i>投稿</a></li>
            </ul>
        </div><!--/.nav-collapse -->
        </div>
    </nav>

    <link href="<?php echo e(asset('css/index/index.css')); ?>" rel="stylesheet">
    <div class="container menu">
        <div>
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <a href="<?php echo e(getenv('APP_URL')); ?>/type/<?php echo e($menu->id); ?>"><?php echo e($menu->name); ?></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <a href="">更多</a>
            </div>
        </div>
    </div>
    <div class="container">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container">
            <a class="title" href="<?php echo e(getenv('APP_URL')); ?>/show/<?php echo e($item->id); ?>">
                <?php echo e($item->name); ?>

            </a>
            <div class="meta">
                <!-- 如果文章更新时间大于发布时间，那么使用 tooltip 显示更新时间 -->
                <span class="publish-time"><?php echo e($item->created_at); ?></span>
                <span class="views-count">观看： <?php echo e($item->page_view); ?>次</span>
                
                <span class="share">
                    <i class="icon-share"></i> 分享
                </span>
            </div>
            <div class="show-content">
                <a id="js-img-border" href="<?php echo e(getenv('APP_URL')); ?>/show/<?php echo e($item->id); ?>">
                    <img id="main-img-<?php echo e($item->id); ?>" width="100%" src="<?php echo e(config("admin.upload.host")); ?><?php echo e($item->images[0]->url); ?>">
                </a>
            </div>
            <div class="image-package">
                <a id="js-btn-prevPhoto" href="javascript:;" class="js-btn-changePhoto figure-area-arrow arrow-pre" style="top: 45%; display: block;">上一张</a>
                <a id="js-btn-nextPhoto" href="javascript:;" class="js-btn-changePhoto figure-area-arrow arrow-next arrow-next-hover" style="top: 45%; display: block;">下一张</a>
                <div id="js-thumbList-stage" class="photo_mini_img video-list clearfix" style="overflow: hidden; width: 100%;">
                    <ul id="js-thumbList-ctn" style="margin: 0 auto;">
                        <?php $__currentLoopData = $item->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li id="_slideView_minimapimg_li_0" style="width:190px;height:190px;" data-index="<?php echo e($item->id); ?>" data-pickey="NDR01OogMso841idy70LgwEAAAAAAAA!" class="js-thumb-item on" data-total-index="0">
                            <a href="javascript:void(0);" style="overflow:hidden;position:relative;" class="mini_img_link js_fade_in">
                                <img class="js-thumbNail-img" style="position: absolute; width: 190px;height: 190px; left: 0; top: 0;" id="_slideView_minimapimg_0" data-src="<?php echo e(config("admin.upload.host")); ?><?php echo e($image->url); ?>" src="<?php echo e(config("admin.upload.host")); ?><?php echo e($image->url); ?>">
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>