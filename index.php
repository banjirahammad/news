  <?php
   require_once('function/frontend.php');
   $page_content->getHeader();
   $page_content->getSection('slider');
   $page_content->getSection('popular');
    echo
    '<!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">';

            $page_content->getSection('feature');
            $page_content->getSection('lifestyle');
            $page_content->getSection('education');
            $page_content->getSection('sports');
            $page_content->getSection('banner');
            $page_content->getSection('youtube');
            $page_content->getSection('tec-fas-other');
    echo '
        </div>
    </div>
    <!-- Post Section End -->';
    $page_content->getFooter();
