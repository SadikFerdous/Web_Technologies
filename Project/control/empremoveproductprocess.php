<?php
if(isset($_POST["submit"]))
{
    if(empty($_POST["productname"]))
    {
        echo "productname empty";
    }
    elseif(isset($_POST["productname"]))
    {     
    $file = "../data/addproductdata.json";
    $mainjson = file_get_contents($file);
    $data = json_decode($mainjson, true);

        foreach ($data as $key => $d) 
        {
            if ($d['ProductName'] === $_POST["productname"]) 
            {                
                array_splice($data, $key, 1);
            }
        }
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    $save = file_put_contents($file, $jsonfile);
    echo "Check Product List!!!";
    }
}
?>