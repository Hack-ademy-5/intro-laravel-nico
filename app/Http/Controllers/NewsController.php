<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $noticias = [
        [
            "title"=>'Messi se va del Barca',
            "description"=>'El FC Barcelona sigue trabajando con la idea de hacer oficial la renovación de Leo Messi antes de la disputa del Trofeu Joan Gamper,...',
            "img"=>'https://imagenes.heraldo.es/files/image_990_v1/files/fp/uploads/imagenes/2020/08/26/leo-messi-el-pasado-18-de-agosto-en-el-nou-camp-en-barcelona.r_d.1039-670-5535.jpeg'
        ],
        [
            "title"=>'Messi se va del Barca',
            "description"=>'El FC Barcelona sigue trabajando con la idea de hacer oficial la renovación de Leo Messi antes de la disputa del Trofeu Joan Gamper,...',
            "img"=>'https://imagenes.heraldo.es/files/image_990_v1/files/fp/uploads/imagenes/2020/08/26/leo-messi-el-pasado-18-de-agosto-en-el-nou-camp-en-barcelona.r_d.1039-670-5535.jpeg'
        ],
        [
            "title"=>'Messi se va del Barca',
            "description"=>'El FC Barcelona sigue trabajando con la idea de hacer oficial la renovación de Leo Messi antes de la disputa del Trofeu Joan Gamper,...',
            "img"=>'https://imagenes.heraldo.es/files/image_990_v1/files/fp/uploads/imagenes/2020/08/26/leo-messi-el-pasado-18-de-agosto-en-el-nou-camp-en-barcelona.r_d.1039-670-5535.jpeg'
        ],
        [
            "title"=>'El green pass ya serà obligatorio para ir al baño',
            "description"=>'The personal data of the certificate holder does not pass through the gateway, ... Proposal for a Regulation on Digital Green Certificates for third-country ...',
            "img"=>'https://static.euronews.com/articles/stories/05/45/85/64/1440x810_cmsv2_7ea3b8d2-563a-5f4f-9ce2-ef85005acaf9-5458564.jpg'
        ],
        [
            "title"=>'A partir del 2022 dejaran de circular los coches diesel',
            "description"=>'',
            "img"=>''
        ],
        [
            "title"=>'En el 2023 habrá la apocalipsis',
            "description"=>'',
            "img"=>''
        ]
    ];
    public function all()
    {
        
        $noticias = $this->noticias;

        return view('news.all',['noticias'=>$noticias]);
    }

    public function detail($id)
    {
        $noticia = $this->noticias[$id];
       
        return view('news.detail',['noticia'=>$noticia]);

    }
}
