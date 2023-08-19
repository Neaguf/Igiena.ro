<?php

namespace App\Controllers;

use stdClass;

class Blog extends BaseController
{
    public function index($page = 1)
    {
        $data = [];
        $limit = 4;
        $offset = ($page - 1) * $limit;
        $pagesQuery = "SELECT COUNT(*) as NumarTotal FROM blog WHERE 1 = 1";
        $NumarTotalPagini = $this->db->query($pagesQuery)->getResult()[0]->NumarTotal;

        if ($NumarTotalPagini == null) $NumarTotalPagini = 1;
        else $NumarTotalPagini = ceil($NumarTotalPagini / 4);

        $data = [];


        $query = "SELECT * FROM blog ORDER BY Id DESC LIMIT $limit OFFSET $offset";
        $blogs = $this->db->query($query)->getResult();

        $data['Blogs']         = $blogs;
        $data['Page']        = $page;
        $data['Pages']        = $NumarTotalPagini;



        return view('structure/header') . view('pages/blog', $data) . view('structure/footer');
    }



    public function getBlog($slug)
    {
        $ret = new stdClass();
        $blogQuery = "SELECT * FROM blog WHERE slug = '$slug'";
        $blog = $this->db->query($blogQuery)->getResult();
        $seo = [];
        $data = [];


        if (isset($blog[0])) {
            $data['Blog'] = $blog[0];
        } else {
            redirect(base_url('blog'));
        }
        // $seo['Seo'] = $this->getSeoData($blog->Id);


        return view('structure/header') . view('components/blog/blog-page', $data) . view('structure/footer');
    }
}
