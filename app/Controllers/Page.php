<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        $data = [
            'title' => "About"
        ];
        return view('about', $data);
    }

    public function contact()
    {
        $data = [
            'name' => "Ryuga",
            'title' => "Contact"
        ];
        echo view('contact', $data);
    }

    public function faqs()
    {
        $data = [
            'data_faqs' => [
                [
                    'question' => 'Apa itu Codeigniter?',
                    'answer' => 'Codeigniter adalah framework untuk membuat web'
                ],
                [
                    'question' => 'Siapa yang membuat Codeiginter?',
                    'answer' => 'CI awalnya dibuat oleh Ellislab'
                ],
                [
                    'question' => 'Codeigniter versi berapakah yang digunakan pada tutoril ini?',
                    'answer' => 'Codeigniter versi 4.0.4'
                ]
            ],
            'title' => "FAQs"
        ];
        return view('faqs', $data);
    }
}
