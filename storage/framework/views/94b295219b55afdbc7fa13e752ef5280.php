<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['titre' => 'Faits sur les chats']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['titre' => 'Faits sur les chats']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['titre' => $titre]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titre' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($titre)]); ?>
    <main id="liste">
        <h1>Liste de faits sur les chats</h1>
        <div class="container mt-5">
            <div class="scrollable-list">
                <!-- Affichage de chaque fait sur les chats à l'aide d'une boucle -->
                <?php $__currentLoopData = $faits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fait): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Création d'une carte pour chaque fait -->
                    <?php if (isset($component)) { $__componentOriginalf47d208a86140a5664e2488522b8bed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf47d208a86140a5664e2488522b8bed2 = $attributes; } ?>
<?php $component = App\View\Components\FactCard::resolve(['id' => $fait->id,'fact' => $fait->court_fait] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fact-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FactCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf47d208a86140a5664e2488522b8bed2)): ?>
<?php $attributes = $__attributesOriginalf47d208a86140a5664e2488522b8bed2; ?>
<?php unset($__attributesOriginalf47d208a86140a5664e2488522b8bed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf47d208a86140a5664e2488522b8bed2)): ?>
<?php $component = $__componentOriginalf47d208a86140a5664e2488522b8bed2; ?>
<?php unset($__componentOriginalf47d208a86140a5664e2488522b8bed2); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\clola\Downloads\fait_chats\fait_chats\resources\views/faits/index.blade.php ENDPATH**/ ?>