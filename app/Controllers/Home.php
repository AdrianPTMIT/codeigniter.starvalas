<?php

namespace App\Controllers;

use App\Models\SeoModel;
use App\Models\BlogModel;
use App\Models\KursModel;


class Home extends BaseController
{
    public function index(): string
    {
        $slug = '';
        $data = array();
        $Model = new SeoModel();
        $kursModel = new KursModel();

        $data['seo'] = $Model->getSeoMeta($slug);


        $kursModel->deleteData();
        $result = $kursModel->getKurs();

        if ($result === false) {
            throw new \Exception('Failed to fetch or insert rates');
        }

        $data['rates'] = $kursModel->getAllRates();
        $data['lastUpdate'] = $kursModel->getUpdate();


        // echo '<pre>';
        // print_r($data); 
        // exit(); 

        return view('layout/header', $data)
            . view('homepage', $data)
            . view('layout/footer', $data);
    }

    public function contact(): string
    {

        $slug = 'hubungi-kami';
        $data = array();
        $Model = new SeoModel();
        $data['seo'] = $Model->getSeoMeta($slug);

        return view('layout/header', $data)
            . view('contactus', $data)
            . view('layout/footer', $data);
    }

    public function about(): string
    {
        $slug = 'tentang-kami';
        $data = array();
        $Model = new SeoModel();
        $data['seo'] = $Model->getSeoMeta($slug);


        return view('layout/header', $data)
            . view('aboutus', $data)
            . view('layout/footer', $data);
    }

    public function blog(): string
    {
        $slug = 'blog';
        $data = array();
        $Model = new SeoModel();
        $data['seo'] = $Model->getSeoMeta($slug);


        $ArticleModel = new BlogModel();

        $uri = service('uri');
        $data['currentPage'] = (int) $uri->getSegment(2, 1);
        // var_dump($data['currentPage']);
        $perPage = 4;

        $offset = ($data['currentPage'] - 1) * $perPage;


        // $offset = $initialOffset + $perPage + (($currentpage - 2)) * $perPage;

        // if ($currentpage >= 5) {
        //     $plusoffset = $perPage * $offset; // Ensure current page is at least 1
        //     var_dump($plusoffset);

        // } else {
        //     $offset;
        // }

        // echo '<br>';
        // var_dump($offset);


        $data['article'] = $ArticleModel->getAllArticle($perPage, $offset);



        $data['totalArticles'] = $ArticleModel->countAllResults();

        //  echo '<pre>';
        // var_dump($data['totalArticles']);


        // var_dump($data['article']);




        return view('layout/header', $data)
            . view('blog', $data)
            . view('layout/footer', $data);
    }

    public function cabang(string $location): string
    {
        $validLocations = [
            'jakarta' => 'Jakarta Branch',
            'tangerang' => 'Tangerang Branch',
            'medan' => 'Medan Branch'
        ];

        // Validate the location
        if (!array_key_exists($location, $validLocations)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Create branch-specific slug (e.g. 'cabang-jakarta')
        $slug = 'cabang-' . $location;
        $data = array();

        // Get SEO data for this specific branch
        $Model = new SeoModel();
        $data['seo'] = $Model->getSeoMeta($slug);

        return view('layout/header', $data)
            . view('cabang/' . $location, $data)
            . view('layout/footer', $data);
    }





}


