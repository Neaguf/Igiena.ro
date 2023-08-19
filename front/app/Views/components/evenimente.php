<?php foreach ($Blogs as $blog) { ?>
    <div class="blog-parinte">
        <div class="continut">
            <p><?= $blog->continut ?></p>
        </div>

        <h2 class="titlu-blog">
            <a href="<?= base_url("blog-page/" . $blog->slug) ?>"> <?= $blog->titlu ?></a>
            <div class="bara"></div>
        </h2>

        <hr>
        <div class="imagine">
            <a href="<?= base_url("blog-page/" . $blog->slug) ?>"> <img src="<?= base_url('/admin/api/assets/imagini/') . $blog->poza ?>" alt=""></a>

        </div>
    </div>
<?php } ?>
<br>
<div class="pagination">
    <button class="prev" onclick="prevPage()">Inapoi</button>
    <button class="next" onclick="nextPage()">Inainte</button>

    pagina <?= $Page ?> / <?= $Pages ?>
</div>
</div>
<style>
    .titlu-blog {
        display: flex;
        align-items: flex-start;
        flex-direction: column;



    }

    .titlu-blog a {
        text-decoration: none;
        color: #D9C1A3;
    }

    .titlu-blog:hover .bara {
        -webkit-transition: width .7s ease-in-out;
        -moz-transition: width .7s ease-in-out;
        -o-transition: width .7s ease-in-out;
        transition: width .7s ease-in-out;
        text-align: left;
        width: 100%;
    }

    .bara {
        border-bottom: 1px solid #D9C1A3;
        /* background:#c3c; */
        white-space: nowrap;
        display: inline-block;
        width: 0%;
    }
</style>


<script>
    let page = <?= $Page ?>;
    let pages = <?= $Pages ?>;



    function nextPage() {
        let nextPage = page + 1;
        if (nextPage > pages) return;
        let url = '<?= base_url("evenimente") ?>/' + nextPage;
        window.location.href = url;
    }

    function prevPage() {
        let prevPage = page - 1;
        if (prevPage <= 0) return;
        let url = '<?= base_url("evenimente") ?>/' + prevPage;
        window.location.href = url;
    }
</script>