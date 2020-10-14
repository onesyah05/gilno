<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OngkirController extends Controller
{
    public function apiOngkir($param,$data =null)
    {
        $url ="https://api.rajaongkir.com/starter/".$param;
        if($data==null){
            $method ="GET";
        }else{
            $method = "POST";
        }
        $ch = curl_init(); 

	    curl_setopt($ch, CURLOPT_URL, $url); 
	    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_ENCODING, ""); 
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10); 
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "content-type: application/x-www-form-urlencoded",
            "key: 61efbe0252cf8ddf530b4c7ce7af0388"
        )); 
	    $output = curl_exec($ch); 
        curl_close($ch);
        // $output =json_decode($output,true);
        // ksort($output);
        // dd($output);
        return json_decode($output,true);

       
        
    }
    public function index()
    {
        $kota = $this->apiOngkir("city");
        return view('dashboard.ongkir',["kota"=>$kota['rajaongkir']]);
    }
    public function result(Request $request)
    {
        $berat = $request->berat * 1000;
        $dataJne ="origin=".$request->from."&destination=".$request->from."&weight=".$berat."&courier=jne";
        $hasilJne = $this->apiOngkir("cost",$dataJne);
        $dataTiki ="origin=".$request->from."&destination=".$request->from."&weight=".$berat."&courier=tiki";
        $hasilTiki = $this->apiOngkir("cost",$dataTiki);
        $dataPos ="origin=".$request->from."&destination=".$request->from."&weight=".$berat."&courier=pos";
        $hasilPos = $this->apiOngkir("cost",$dataPos);

        $data = array();
        array_push($data,$hasilJne['rajaongkir']['results'][0]);
        array_push($data,$hasilTiki['rajaongkir']['results'][0]);
        array_push($data,$hasilPos['rajaongkir']['results'][0]);



        // dd($data);

        $kota = $this->apiOngkir("city");
        
        return view('dashboard.ongkir',
            [
                "kota"=>$kota['rajaongkir'],
                "ongkos"=>$data
            ]
        );
    }
}
