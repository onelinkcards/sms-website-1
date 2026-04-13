
<!-- BREADCRUMB AREA -->
<section class="rts-breadcrumb <?= htmlspecialchars($class) ?? ''; ?>" style="background-image: url(assets/images/banner/<?= htmlspecialchars($image) ?? ''; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"><?= htmlspecialchars($parent) ?? ''; ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($page) ?? ''; ?></li>
                    </ul>
                    <h2 class="section-title"><?= htmlspecialchars($title) ?? ''; ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BREADCRUMB AREA END -->
