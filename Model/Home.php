<?php
    class Home extends  MasterModel {
        public function get_all_product(){
            $listProduct = MasterModel::get_all_table('products');
            return $listProduct;
        }

        public function get_one_product($id){
            $listProduct = MasterModel::get_one_table('products',$id);
            return $listProduct;
        }
    }