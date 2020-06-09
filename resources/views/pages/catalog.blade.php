<x-header/>

<style>
    .pagination {
        justify-content: center;
    }
</style>
<body>
<div class="container">
    <h1>Страница каталог - список категорий</h1>
</div>

<div class="container">
    <p>
        Всего категорий: <?= $categories->total(); ?>
    </p>
    <div class="row">
        <?php foreach ($categories as $key => $category): ?>
        <div class="col-lg-3 col-12">
            <a href="category/<?= $category->friendly_url_name ?>">
                <div id="category_<?= $category->id ?>" class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?= $category->name ?></h5>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
    <p>
        Число страниц: <?= $categories->lastPage(); ?>
    </p>
    <div class="row">
        <div class="col">
            <?php echo $categories->links(); ?>
        </div>
    </div>
</div>
</body>

<x-footer/>
