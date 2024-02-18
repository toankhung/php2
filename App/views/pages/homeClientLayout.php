<div id="main-content" class="blog-page">

    <div class="row clearfix">
        <div class="col-lg-8 col-md-12 left-box">
            <? if (isset($data['Blog'])) : ?>
                <? foreach ($data['Blog'] as $Blog) : ?>
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="<?= $Blog['image'] ?>" alt="First slide">
                            </div>
                            <h3><a href="/home/detailBlog?id=<?= $Blog['id']?>"><?= $Blog['title'] ?></a></h3>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="/home/detailBlog?id=<?= $Blog['id']?>" class="btn btn-outline-secondary">Đọc</a>
                            </div>
                            <ul class="stats">
                                <li><a href="javascript:void(0);">General</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-comment">128</a></li>
                            </ul>
                        </div>
                    </div>
                <? endforeach ?>
            <? endif ?>


            <ul class="pagination pagination-primary">
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                <? if (isset($data['TotalPage'])) : ?>
                    <? for ($page = 1; $page <= $data['TotalPage']; $page++) : ?>
                        <li class="page-item active ml-2"><a class="page-link" href="/?page=<?= $page ?>"><?= $page ?></a></li>
                    <? endfor ?>
                <? endif ?>

                <li class="page-item ml-2"><a class="page-link" href="javascript:void(0);">Next</a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-12 right-box">
            <div class="card">
                <form action="/">
                    <div class="body search">
                        <div class="input-group m-b-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" name = "SearchKey" class="form-control" placeholder="Tìm kiếm...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card">
                <div class="header">
                    <h2>Danh mục</h2>
                </div>
                <div class="body widget">
                    <ul class="list-unstyled categories-clouds m-b-0">
                        <? if (isset($data['Category'])) : ?>
                            <? foreach ($data['Category'] as $Category) :  ?>
                                <li><a href="/?category_id=<?= $Category['id'] ?>"><?= $Category['name'] ?></a></li>
                            <? endforeach ?>
                        <? endif ?>

                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2>Bài viết gần đây</h2>
                </div>
                <div class="body widget popular-post">
                    <div class="row">
                        <div class="col-lg-12">
                            <? if (isset($data['RecentBlog'])) : ?>
                                <? foreach ($data['RecentBlog'] as $RecentBlog) : ?>
                                    <a href="/home/detailBlog?id=<?= $RecentBlog['id']?>" style="text-decoration: none;; color: inherit">
                                        <div class="single_post">
                                            <p class="m-b-0"><?= $RecentBlog['title'] ?></p>
                                            <span><?= getTimeElapsedString($RecentBlog['created_at']) ?></span>
                                            <div class="img-post">
                                                <img src="<?= $RecentBlog['image'] ?>" alt="Awesome Image" style="width:300px;height:200px">
                                            </div>
                                        </div>
                                    </a>
                                <? endforeach ?>
                            <? endif ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>