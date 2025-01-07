<?php if (isset($component)) { $__componentOriginalaa758e6a82983efcbf593f765e026bd9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa758e6a82983efcbf593f765e026bd9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => $__env->getContainer()->make(Illuminate\View\Factory::class)->make('mail::message'),'data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('mail::message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
Dear **<?php echo e($nama_customer); ?>**,

Terima kasih atas pembelian Anda! Kami dengan senang hati menginformasikan bahwa pesanan Anda pada
    invoice **<?php echo e($order_id); ?>** telah berhasil dilakukan.
    
**Pesanan Produk** : 

- <?php echo e($nama_produk); ?> (<?php echo e($deskripsi); ?>)


**Total Pembayaran** : 

IDR <?php echo e(number_format($total, 0, ',', '.')); ?>


Terima kasih telah berbelanja di Tokoku. Anda akan selalu menerima pembaruan terkait produk yang telah Anda beli. 
Anda dapat mengunduh pembaruan tersebut kapan saja. Jika ada fitur baru yang tersedia untuk produk Anda, kami akan memberitahukan Anda.

Terima kasih,<br>
Admin, <?php echo e(config('app.name')); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa758e6a82983efcbf593f765e026bd9)): ?>
<?php $attributes = $__attributesOriginalaa758e6a82983efcbf593f765e026bd9; ?>
<?php unset($__attributesOriginalaa758e6a82983efcbf593f765e026bd9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa758e6a82983efcbf593f765e026bd9)): ?>
<?php $component = $__componentOriginalaa758e6a82983efcbf593f765e026bd9; ?>
<?php unset($__componentOriginalaa758e6a82983efcbf593f765e026bd9); ?>
<?php endif; ?><?php /**PATH C:\Users\nurri\Downloads\tokoku-main\tokoku\resources\views/markdown-produk-beli.blade.php ENDPATH**/ ?>