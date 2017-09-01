<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function showProducts()
    {
        $products = Product::all();

        return view('products', [
            'products' => $products
        ]);
    }

    function add(Request $request)
    {
        $match = Product::where('prod_name', $request->prod_name)
              ->get();

        if(count($match)) {
            echo "<script>alert('Product already exists');window.location = 'addNewProduct'</script>";
        } else {
            $target_dir = "images/products/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check == false) {
                echo "<script>alert('File is not an image.');window.location = 'addNewProduct'</script>";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "<script>alert('Sorry, file already exists..');window.location = 'addNewProduct'</script>";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "<script>alert('Sorry, your file is too large.');window.location = 'addNewProduct'</script>";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');window.location = 'addNewProduct'</script>";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "<script>alert('Sorry, your file was not uploaded.');window.location = 'addNewProduct'</script>";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $product = new Product;
                    $image = $target_file;

                    $product->prod_name = $request->prod_name;
                    $product->unit_price = $request->unit_price;
                    $product->stocks = $request->stocks;
                    $product->image_src = $image;
                    $product->description = $request->description;

                    $product->save();
                    return redirect('adminProducts');
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    }
}
