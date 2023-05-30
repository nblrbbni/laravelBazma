<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazmaController extends Controller
{
    public function responseFunction()
    {
        return response("Ini adalah bentuk response");
    }

    public function responseHeader()
    {
        $bodyResponse =
        [
            "name" => "Nabil",
            "school" => "SMK TI BAZMA"
        ];
        return response(json_encode($bodyResponse), 200)
            -> header("Content-Type", "Application/Json")
            -> withHeaders([
                "App" => "Nabil Rabbani",
                "Classes" => "XI",
                "Web" => "Laravel"
        ]);
    }

    public function encryptionData()
    {
        $encrypt = encrypt("Ini adalah enkripsi");
        $decrypt = decrypt($encrypt);
        dd($encrypt, $decrypt);
    }

    public function redirectTo()
    {
        return "redirect to";
    }

    public function redirectFrom()
    {
        return redirect("/redirect/to");
    }

    public function redirectToNamedRoute()
    {
        return "redirect to with named route";
    }

    public function redirectFromNamedRoute()
    {
        return redirect(route("redirect.to"));
    }
}