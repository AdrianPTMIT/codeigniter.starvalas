<?php

namespace App\Models;

use CodeIgniter\Model;

class SeoModel extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'article_id';
    protected $allowedFields = []; // Add fields that can be mass-assigned if needed
    
    protected $returnType = 'array';
    
    // If you need to use a different table for some operations
    protected $seoTable = 'seo_metadata';

    public function getSeoMeta($slug)
    {
        // Using the built-in DB connection from Model
        $builder = $this->db->table($this->table);
        
        $builder->select([
            'articles.title', 
            'articles.slug', 
            'articles.article_id', 
            'seo_metadata.page_type', 
            'seo_metadata.meta_title', 
            'seo_metadata.meta_description',
            'seo_metadata.meta_keywords',
            'seo_metadata.og_title',
            'seo_metadata.og_description',
            'seo_metadata.twitter_title',
            'seo_metadata.twitter_description',
            'seo_metadata.robots_meta'
        ]);
        
        $builder->join(
            $this->seoTable, 
            'articles.article_id = seo_metadata.page_id'
        );
        
        // Add condition to filter by slug
        $builder->where('articles.slug', $slug);
        
        // Get single result (assuming slug is unique)
        $query = $builder->get();
        
        return $query->getRowArray();
    }


}