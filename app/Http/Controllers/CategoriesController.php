<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __contruct(){

    }
    public  function index(){
        return 'Danh sách chuyên mục';
    }
    public function  getCategory($id){
        return 'Danh muc:' .$id;
    }
    public function  updateCategory($id){

    }
    public function  addCategory(){
        return 'Form thêm danh mục';
    }
    public function  handleAddCategory(){

    }
    public function  deleteCategory($id){

    }

}
