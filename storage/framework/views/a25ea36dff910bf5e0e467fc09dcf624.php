<div class="main-content">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('gallery.form', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2566386861-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.delete-modal', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2566386861-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All galleries</h5>
                        </div>
                        <button
                            @click="$dispatch('galleryModal')"
                            class="btn bg-[#56C596] text-white btn-sm mb-0"
                            type="button">+&nbsp; New gallery</button>
                    </div>
                </div>

                <div x-data="{ openRow: null }" class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num => $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <!-- Row Data -->
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($num + 1); ?></p>
                                    </td>
                               
                                    <td class="text-center align-middle">
                                        <div class="flex justify-center items-center">
                                            <img src="<?php echo e(asset('storage/' . $gallery->image)); ?>" class="w-24 h-24 mb-0" alt="gallery Image" />
                                        </div>
                                    </td>
                                    <td class="text-center">
                                    
                                        <button @click="$dispatch('edit-gallery', { gallery: <?php echo e($gallery->id); ?> })">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button wire:click="$dispatch('openDeleteModal', { itemId: <?php echo e($gallery->id); ?>, model: '<?php echo e(addslashes(App\Models\Gallery::class)); ?>' })">
                                            <i class="fa-solid fa-trash text-red-400"></i>
                                        </button>
                                    </td>
                                </tr>
 


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\Administrator\Desktop\apps\g-dashboard\resources\views/livewire/gallery/gallery-component.blade.php ENDPATH**/ ?>