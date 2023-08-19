<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saloane extends BP_Controller
{

    public function index()
    {
        $ret            = $this->verify_login();
        if(!$ret->NotLogged)
        {
            $filters      = $this->input->post("Filters");
            $order_by     = $this->input->post("OrderBy");
            $pg_info      = new PaginationInfo( $this->input->post("PaginationInfo") );


            $sql          = new TableSql( "SELECT t1.* FROM locatii t1 WHERE 1=1  " );

            
            $sql->addIfNeeded( $filters['Denumire'], '', " AND t1.Denumire LIKE '%%%s%%' ");
        

            $sql->addIfNeeded( $filters['Slug'], '', " AND t1.Slug LIKE '%%%s%%' ");
        

            $sql->addIfNeeded( $filters['Adresa'], '', " AND t1.Adresa LIKE '%%%s%%' ");
        

            $sql->addIfNeeded( $filters['Telefon'], '', " AND t1.Telefon LIKE '%%%s%%' ");
        

            $sql->addIfNeeded( $filters['Afiseaza'], '', " AND t1.Afiseaza = '%s' ");
        


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
        if(!$ret->NotLogged)
        {
            





        }

        echo json_encode($ret);
    }


    public function get_info_for_dialog()
    {
        $ret            = $this->verify_login();
        if(!$ret->NotLogged)
        {
            








        }

        echo json_encode($ret);
    }

    public function get_info_item_dialog()
    {
        $ret            = $this->verify_login();
        if(!$ret->NotLogged)
        {
            $id                  = $this->input->post("id");
            $ret->Item           = new DbLocatiiModel($id);
            








        }

        echo json_encode($ret);
    }


    public function save()
    {
        $ret            = $this->verify_login();

        if(!$ret->NotLogged)
        {
            $mode   = $this->input->post( "mode"   );
            $object = $this->input->post( "object" );
            $obj    = new DbLocatiiModel();

            if( $mode == "add" ){
                if( array_key_exists('Id', $object) ) unset( $object['Id'] );
                $obj->constructFromArray($object);
                $obj->Insert(false, true);
            }else{
                $obj->constructFromArray($object);
                $obj->Update();
            }
        }

        echo  json_encode($ret);

    }

    









    public function delete_item()
    {
        $ret            = $this->verify_login();

        if(!$ret->NotLogged)
        {
            $id = $this->input->post( "id" );
            $a  = new DbLocatiiModel($id);
            $a->Delete();
        }

        echo  json_encode($ret);
    }

}
