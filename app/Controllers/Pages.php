<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $Data = [
            'title' => 'Home | WebProgramingUNPAS'
        ];

        return view('Pages/home', $Data);
    }

    public function about()
    {
        $Data = [
            'title' => 'About | WebProgramingUNPAS'
        ];

        return view('Pages/about', $Data);
    }

    public function contact()
    {
        $Data = [
            'title' => 'Contact Us | WebPrograminUNPAS',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jln abc no.123',
                    'kota' => 'Jambi'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jln setiabudi no.123',
                    'kota' => 'Jambi'
                ]
            ]
        ];

        return view('Pages/contact', $Data);
    }
}
