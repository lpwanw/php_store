<?php
/**
 * Product Card Component
 * 
 * @param App\Entity\SanPham $sanPham - Product entity
 * @param string $size - Card size: 'small', 'medium', 'large' (default: 'medium')
 * @param bool $showDescription - Show product description (default: true)
 */

$size = $size ?? 'medium';
$showDescription = $showDescription ?? true;

// Size classes
$sizeClasses = [
    'small' => 'text-sm',
    'medium' => '',
    'large' => 'text-lg'
];

$cardClass = $sizeClasses[$size] ?? $sizeClasses['medium'];
?>

<div class="bg-card border rounded-lg overflow-hidden hover:shadow-lg transition-shadow <?= $cardClass ?>">
    <!-- Product Image -->
    <div class="aspect-square bg-gray-100 flex items-center justify-center">
        <?php 
        $hinhAnhChinh = $sanPham->getHinhAnhChinh();
        if ($hinhAnhChinh): 
        ?>
            <img src="<?= htmlspecialchars($hinhAnhChinh->getFullUrl()) ?>" 
                 alt="<?= htmlspecialchars($sanPham->getTen()) ?>"
                 class="max-w-full max-h-full object-contain">
        <?php else: ?>
            <div class="text-6xl">📱</div>
        <?php endif; ?>
    </div>
    
    <!-- Product Info -->
    <div class="p-4">
        <!-- Product Name -->
        <h3 class="font-semibold text-foreground mb-2" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
            <?= htmlspecialchars($sanPham->getTen()) ?>
        </h3>
        
        <!-- Brand -->
        <p class="text-sm text-muted-foreground mb-2">
            <?= htmlspecialchars($sanPham->getThuongHieu()->getTen()) ?>
        </p>
        
        <!-- Price and Action -->
        <div class="flex items-center justify-between mb-3">
            <div class="flex flex-col">
                <span class="text-lg font-bold text-primary">
                    <?= $sanPham->getGiaFormatted() ?>
                </span>
                <?php if ($sanPham->getGiaSoSanh() && $sanPham->getGiaSoSanh() > $sanPham->getGia()): ?>
                    <span class="text-sm text-muted-foreground line-through">
                        <?= number_format($sanPham->getGiaSoSanh(), 0, ',', '.') ?> ₫
                    </span>
                <?php endif; ?>
            </div>
            <button class="px-4 py-2 bg-primary text-primary-foreground rounded-md text-sm hover:bg-primary/90 transition-colors">
                Xem Chi Tiết
            </button>
        </div>
        
        <!-- Product Description -->
        <?php if ($showDescription && $sanPham->getMoTaNgan()): ?>
            <p class="text-xs text-muted-foreground" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                <?= htmlspecialchars($sanPham->getMoTaNgan()) ?>
            </p>
        <?php endif; ?>
        
        <!-- Product Badges -->
        <div class="flex gap-2 mt-2">
            <?php if ($sanPham->isNoiBat()): ?>
                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full">
                    Nổi bật
                </span>
            <?php endif; ?>
            
            <?php if ($sanPham->getGiaSoSanh() && $sanPham->getGiaSoSanh() > $sanPham->getGia()): ?>
                <?php 
                $discount = round((($sanPham->getGiaSoSanh() - $sanPham->getGia()) / $sanPham->getGiaSoSanh()) * 100);
                ?>
                <span class="px-2 py-1 bg-red-100 text-red-800 text-xs rounded-full">
                    -<?= $discount ?>%
                </span>
            <?php endif; ?>
        </div>
    </div>
</div>