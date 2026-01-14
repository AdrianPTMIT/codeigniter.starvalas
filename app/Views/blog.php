<style>
    /* CSS will go here */
    :root {
        --primary: #0066cc;
        --secondary: #343A40;
        --light: #F8F9FA;
        --dark: #212529;
        --text: #6C757D;
    }





    .btn-primary {
        background-color: var(--secondary);
        border-color: var(--primary);
        color: var(--light);
    }


    .blog-post {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
        margin-bottom: 30px;
    }

    .blog-post:hover {
        transform: translateY(-5px);
    }

    .post-thumbnail {
        height: 220px;
        overflow: hidden;
    }

    .post-thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .blog-post:hover .post-thumbnail img {
        transform: scale(1.05);
    }

    .post-content {
        padding: 25px;
    }

    .post-meta {
        color: var(--text);
        font-size: 14px;
        margin-bottom: 10px;
    }

    .post-meta i {
        margin-right: 5px;
        color: var(--primary);
    }

    .post-title {
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .post-excerpt {
        color: var(--text);
        margin-bottom: 20px;
    }

    .read-more {
        color: var(--primary);
        font-weight: 600;
        text-decoration: none;
    }

    .sidebar-widget {
        background: white;
        border-radius: 8px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .widget-title {
        font-size: 18px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--primary);
    }

    .search-form .form-control {
        border-radius: 30px;
        padding: 10px 15px;
    }

    .search-form .btn {
        border-radius: 30px;
        padding: 10px 20px;
    }

    .category-list,
    .recent-post-list {
        list-style: none;
        padding: 0;
    }

    .category-list li,
    .recent-post-list li {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
    }

    .category-list li:last-child,
    .recent-post-list li:last-child {
        border-bottom: none;
    }

    .category-list a,
    .recent-post-list a {
        color: var(--dark);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .category-list a:hover,
    .recent-post-list a:hover {
        color: var(--primary);
    }

    .recent-post-thumb {
        width: 60px;
        height: 60px;
        border-radius: 4px;
        overflow: hidden;
        margin-right: 15px;
    }

    .recent-post-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .recent-post-content {
        flex: 1;
    }

    .recent-post-title {
        font-size: 14px;
        margin-bottom: 5px;
    }

    .recent-post-date {
        font-size: 12px;
        color: var(--text);
    }

    .tags a {
        display: inline-block;
        padding: 5px 15px;
        background: #f1f1f1;
        border-radius: 30px;
        margin: 0 5px 10px 0;
        font-size: 13px;
        color: var(--dark);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .tags a:hover {
        background: var(--primary);
        color: white;
    }
</style>

<div class="banner-contact d-flex align-items-center justify-content-center" style="
        min-height: 350px;
        background-image: url('https://images.unsplash.com/photo-1637497578001-63efa6b0acb2?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      ">
    <div class="text-center w-100 p-5" style="background: rgba(24, 51, 106, 0.65); min-height: 350px">
        <h1 class="text-white fw-bold mb-2 py-4 my-5" style="letter-spacing: 1px">
            Blog
        </h1>
        <p class="text-white mb-0 pb-3" style="font-size: 1.2rem">
            Artikel
        </p>
    </div>
</div>


<!-- Blog Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Posts -->
                <div class="row">

                    <?php

                    // print_r($article);
                    
                    // exit; ?>


                    <!-- Post 1 -->
                    <?php foreach ($article as $list): ?>
                        <div class="col-md-6 mb-4">
                            <div class="blog-post">
                                <div class="post-thumbnail">
                                    <img src="<?= $list['featured_image_url'] ?> " alt="Currency Exchange">
                                </div>
                                <div class="post-content">

                                    <div class="post-meta">
                                        <span><i class="far fa-calendar-alt"></i> June 15, 2025</span>
                                        <span class="ml-3"><i class="far fa-user"></i> Admin</span>
                                    </div>
                                    <h3 class="post-title"><a href="#">
                                            <?= $list['title'] ?></a>
                                    </h3>
                                    <p class="post-excerpt"><?= $list['content'] ?></p>
                                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>





                <!-- Pagination -->
                <!-- <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                           
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                               
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="">2</a></li>
                      
                        <li class="page-item">
                            <a class="page-link" href="">Next</a>
                        </li>
                    </ul>
                </nav> -->

                <?php

                $next = $currentPage + 1;
                $previous = $currentPage - 1;

                $total_no_of_pages = min(4, ceil($totalArticles / count($article)));

                ?>


                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">

                        <li class="page-item<?php if ($currentPage == 1)
                            echo ' disabled'; ?>">
                            <a class="page-link" <?php if ($currentPage > 1) {
                                echo "href='$previous'";
                            } else {
                                echo 'tabindex="-1" aria-disabled="true"';
                            } ?>>Previous</a>
                        </li>

                        <?php

                        for ($x = 1; $x <= $total_no_of_pages; $x++) {
                            $active = ($x == $currentPage) ? ' active' : '';
                            ?>
                            <li class="page-item<?= $active ?>">
                                <a class="page-link" href="<?= $x ?>" <?= $active ? ' tabindex="-1" aria-disabled="true"' : '' ?>>
                                    <?= $x; ?></a>
                            </li>

                        <?php } ?>

                        <li class="page-item<?php if ($currentPage >= $total_no_of_pages)
                            echo ' disabled'; ?>">
                            <a class="page-link" <?php if ($currentPage < $total_no_of_pages) {
                                echo "href='$next'";
                            } else {
                                echo 'tabindex="-1" aria-disabled="true"';
                            } ?>>Next</a>
                        </li>

                    </ul>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Widget -->
                <div class="sidebar-widget">
                    <h4 class="widget-title">Search</h4>
                    <form class="search-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Categories Widget -->
                <div class="sidebar-widget">
                    <h4 class="widget-title">Categories</h4>
                    <ul class="category-list">
                        <li><a href="#">Currency Tips <span>(12)</span></a></li>
                        <li><a href="#">Travel Money <span>(8)</span></a></li>
                        <li><a href="#">Forex Market <span>(5)</span></a></li>
                        <li><a href="#">Digital Currency <span>(7)</span></a></li>
                        <li><a href="#">Safety Tips <span>(4)</span></a></li>
                        <li><a href="#">Industry News <span>(9)</span></a></li>
                    </ul>
                </div>

                <!-- Recent Posts Widget -->
                <div class="sidebar-widget">
                    <h4 class="widget-title">Recent Posts</h4>
                    <ul class="recent-post-list">
                        <li>
                            <div class="d-flex">
                                <div class="recent-post-thumb">
                                    <img src="https://images.unsplash.com/photo-1604594849809-dfedbc827105?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                        alt="Recent Post">
                                </div>
                                <div class="recent-post-content">
                                    <h5 class="recent-post-title"><a href="#">Cara Mendapatkan Nilai Tukar Mata Uang
                                            Terbaik</a></h5>
                                    <div class="recent-post-date">June 15, 2025</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="recent-post-thumb">
                                    <img src="https://images.unsplash.com/photo-1502920514313-52581002a659?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                        alt="Recent Post">
                                </div>
                                <div class="recent-post-content">
                                    <h5 class="recent-post-title"><a href="#">Tips Penting Mengenai Uang untuk
                                            Perjalanan Luar Negeri</a></h5>
                                    <div class="recent-post-date">June 10, 2025</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="recent-post-thumb">
                                    <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                        alt="Recent Post">
                                </div>
                                <div class="recent-post-content">
                                    <h5 class="recent-post-title"><a href="#">Waktu Terbaik Menukar USD ke IDR di Tahun
                                            2025</a></h5>
                                    <div class="recent-post-date">June 5, 2025</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Tags Widget -->
                <div class="sidebar-widget">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tags">
                        <a href="#">Currency</a>
                        <a href="#">Exchange</a>
                        <a href="#">Travel</a>
                        <a href="#">Forex</a>
                        <a href="#">Rates</a>
                        <a href="#">Money</a>
                        <a href="#">Tips</a>
                        <a href="#">Digital</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>