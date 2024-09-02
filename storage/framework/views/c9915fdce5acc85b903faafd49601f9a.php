<div class="fact-card">
    <a href="<?php echo e(route('faits.show', $id)); ?>">
        <p><?php echo e($id); ?> &nbsp; <?php echo e($fact); ?></p>
    </a>
    <div class="actions">
        
        <a href="<?php echo e(route('faits.edit', $id)); ?>" class="text-primary" title="Edit">
            <i class="fas fa-pencil-alt"></i> 
        </a>
       
        <form action="<?php echo e(route('faits.destroy', $id)); ?>" method="POST" style="display: inline;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="text-danger" title="Delete">
                <i class="fas fa-trash"></i>
            </button>
        </form>
    </div>
</div><?php /**PATH C:\Users\clola\Downloads\fait_chats\fait_chats\resources\views/components/fact-card.blade.php ENDPATH**/ ?>