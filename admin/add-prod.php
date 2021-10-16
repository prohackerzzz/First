<?php
include "C:\\xampp\htdocs\wes\connect.php";
if(isset($_POST["submit"])){
    $prod_name=$_POST['prod_name'];
    $prod_price=$_POST['price'];
    $prod_mrp=$_POST['mrp'];
    $prod_qty=$_POST['qty'];
    $prod_shortdesc=$_POST['shortdesc'];
    $prod_longdesc=$_POST['longdesc'];
    $prod_title=$_POST['title'];
    $gender = $_POST['gender'];
    $upload="upload/";
    $allowedtype =array("jpg");
    if(!empty(array_filter($_FILES['file']['name']))){
        foreach($_FILES['file']['tmp_name'] as $key => $value){
            $filetmpname = $_FILES['file']['tmp_name'][$key];
            $file_name = $_FILES['file']['name'][$key]; 
            $file_size = $_FILES['file']['size'][$key]; 
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $filepath = $upload.$file_name;
            $cid=2;
                        
            if(in_array(strtolower($file_ext),$allowedtype)){
                if(file_exists($filepath)){
                    $filepath=$upload.time().$file_name;
                    if(move_uploaded_file($filetmpname,$filepath)){
                        echo "success";
                    }
                    else{
                        echo "not uploaded";
                    }
                }
                else{
                    if(move_uploaded_file($filetmpname,$filepath)){
                        echo "success";
                    }
                    else{
                        echo "not uploaded";
                    }
                }
            }

            else{
                    echo "error uploading file type not supported";
                }


            
        }
        
        $query ="INSERT INTO `product` (`id`, `category_name`, `prod_name`, `price`, `mrp`, `qty`, `meta_keywords`, `image`, `short_desc`, `long_desc`, `meta_title`, `meta_desc`, `status`, `Gender`) VALUES (NULL, '$cid', '$prod_name', '$prod_price', '$prod_mrp', '$prod_qty', 'n jnnkjl', '$filepath', '$prod_shortdesc', '$prod_longdesc', '$prod_title', ' mnn kjlnlk', '0', '$gender')";
        if(mysqli_query($con,$query)){
            echo "record inserted";
            echo $file_ext;
        }
        else{
            echo "record no oinserted";
        }


    }


}
?>

<?php 
$sql = "select prod_name,image from product";
$res =mysqli_query($con,$sql);
while($row = mysqli_fetch_array($res)){

    
        ?>
        <img src="<?php echo $row['image']?>" alt="<?php echo $row['prod_name']?>" width=200px height=100px>
        <?php
        
    }

?>