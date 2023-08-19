<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends BP_Controller
{

    public function index()
    {
        $ret            = $this->verify_login();
        if (!$ret->NotLogged) {
            $filters      = $this->input->post("Filters");
            $order_by     = $this->input->post("OrderBy");
            $pg_info      = new PaginationInfo($this->input->post("PaginationInfo"));


            $sql          = new TableSql("SELECT t1.* FROM blog t1 WHERE 1=1  ");


            $sql->addIfNeeded($filters['slug'], '', " AND t1.slug LIKE '%%%s%%' ");


            $sql->addIfNeeded($filters['titlu'], '', " AND t1.titlu LIKE '%%%s%%' ");



            $sql->addIfNeeded("ffff", "", " ORDER BY t1.Id DESC ");


            $sql->addLimitFromPagination($pg_info);


            $result = $sql->getResult();
            $rows   = $result->Rows;

            //
            $pg_info->RowCount = $result->FullRowsCount;
            //
            $ret->Results        = $rows;
            $ret->PaginationInfo = $pg_info;
        }

        echo  json_encode($ret);
    }

    public function get_info()
    {
        $ret            = $this->verify_login();
        if (!$ret->NotLogged) {
        }

        echo json_encode($ret);
    }


    public function get_info_for_dialog()
    {
        $ret            = $this->verify_login();
        if (!$ret->NotLogged) {
        }

        echo json_encode($ret);
    }

    public function get_info_item_dialog()
    {
        $ret            = $this->verify_login();
        if (!$ret->NotLogged) {
            $id                  = $this->input->post("id");
            $ret->Item           = new DbBlogModel($id);


            $ret->Item->uploadPreview_poza = base_url() . './assets/imagini/' . $ret->Item->poza;
        }

        echo json_encode($ret);
    }


    public function save()
    {
        $ret            = $this->verify_login();

        if (!$ret->NotLogged) {
            $mode   = $this->input->post("mode");
            $object = $this->input->post("object");
            $obj    = new DbBlogModel();

            if ($mode == "add") {
                if (array_key_exists('Id', $object)) unset($object['Id']);
                $obj->constructFromArray($object);
                $obj->slug = $this->slugify($obj->titlu);
                $obj->Insert(false, true);
            } else {
                $obj->constructFromArray($object);
                $obj->slug = $this->slugify($obj->titlu);

                $obj->Update();
            }
        }

        echo  json_encode($ret);
    }




    public function upload_poza()
    {
        $this->load->helper('upload_info');
        $uh         = new UploadHelper();
        if (!is_dir('./assets/imagini')) mkdir('./assets/imagini');
        $uh->upload('./assets/imagini', 'file', 'jpg|png|jpeg|gif');
        if ($uh->HasError) {
            die($uh->Error);
        } else {
            echo json_encode($uh);
        }
    }


    public function upload_imagine_wysiwyg_continut()
    {
        $this->load->helper('upload_info');
        $uh         = new UploadHelper();
        if (!is_dir('./assets/imagini')) mkdir('./assets/imagini');
        $uh->upload('./assets/imagini', 'file', 'jpg|png|jpeg|gif');
        if ($uh->HasError) {
            die($uh->Error);
        } else {
            echo json_encode(array('location' => $uh->Url));
        }
    }



    public function delete_item()
    {
        $ret            = $this->verify_login();

        if (!$ret->NotLogged) {
            $id = $this->input->post("id");
            $a  = new DbBlogModel($id);
            $a->Delete();
        }

        echo  json_encode($ret);
    }

    private static function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
