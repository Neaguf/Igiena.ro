<?php

namespace App\Controllers;

use stdClass;

class Evenimente extends BaseController
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


        $query = "SELECT * FROM blog WHERE Tip != 'blog' ORDER BY Id DESC LIMIT $limit OFFSET $offset";
        $blogs = $this->db->query($query)->getResult();

        $data['Blogs']         = $blogs;
        $data['Page']        = $page;
        $data['Pages']        = $NumarTotalPagini;



        return view('structure/header') . view('pages/evenimente', $data) . view('structure/footer');
    }


    public function getBlog($slug)
    {
        $ret = new stdClass();
        $blogQuery = "SELECT * FROM blog WHERE Slug = '$slug'";
        $blog = $this->db->query($blogQuery)->result()[0];
        $seo = [];
        $data = [];


        $seo['Seo'] = $this->getSeoData($blog->Id);

        $data['Blog'] = $blog;

        $this->load->view('components/header', $seo);
        $this->load->view('components/navbar');
        $this->load->view('pages/blog/blog-page', $data);
        $this->load->view('components/footer');
    }
}
