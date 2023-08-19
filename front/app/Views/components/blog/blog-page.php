<div class="blog-parinte">
    <div class="continut">
        <p><?= $Blog->continut ?></p>
    </div>
    <div class="wrapper">
        <div class="titlu ">
            <h2 class="titlu-blog">
                <?= $Blog->titlu ?>
            </h2>
        </div>
    </div>
    <hr>
    <div class="imagine-blog">
        <img src="<?= base_url('/admin/api/assets/imagini/' . $Blog->poza) ?>" alt="">
    </div>
</div>

<style>
    .imagine-blog img {
        width: 100%;
        height: 100%;
        overflow: hidden;
        margin: 0 auto;
        object-fit: cover;
        white-space: nowrap;

    }
</style>