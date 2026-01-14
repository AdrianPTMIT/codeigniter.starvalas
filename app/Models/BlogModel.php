<?php

namespace App\Models;

use CodeIgniter\Model;
use Predis\Command\Traits\Limit\Limit;
use CodeIgniter\RESTful\ResourceController;


class BlogModel extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'article_id';
    protected $allowedFields = []; // Add fields that can be mass-assigned if needed

    protected $returnType = 'array';

    protected $format = 'json';


    public function getAllArticle($perPage = 4, $offset = 0)
    {
        // Using the built-in DB connection from Model
        $builder = $this->db->table($this->table);

        $builder->select([
            'articles.title',
            'articles.slug',
            'articles.article_id',
            'articles.featured_image_url',
            'articles.content',
            'articles.created_at',

        ]);

        $builder->limit($perPage, $offset);


        $query = $builder->get();
        return $query->getResultArray();
        // echo '<pre>';
        // var_dump($query->getResultArray()); ;


    }


    //    page:blogModel
    // - detailByID
    // - listPaginated
    // // - getBlogCount




}

class Article extends ResourceController
{
    protected $modelName = 'App\Models\BlogModel';
    protected $format = 'json';

     public function create()
    {
        $data = $this->request->getPost();
        if (!$this->model->save($data)) {

            return $this->fail($this->model->errors());
        }

        return $this->respondCreated($data, 'post created');
    }


    public function view() {
        return $this->respond($this->model->findAll());
    }

}