<?php

class Home extends Controller
{
    public function index()
    {
        $this->view("layout_vne", [
            'content' => 'home/index'
        ]);
    }

    public function sayHi()
    {
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();
    }

    public function show($a, $b)
    {
        var_dump($a.$b);
        // Call Models
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b); // 3

        // Call Views
        $this->view("aodep", [
            "Page"=>"news",
            "Number"=>$tong,
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "SV" => $teo->SinhVien()
        ]);
    }
}