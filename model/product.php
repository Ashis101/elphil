<?php

class Product extends PDO{
    public function __construct($dbs,$username,$password)
    {
        parent::__construct($dbs,$username,$password);

        try{
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }catch(PDOException $e){ echo $e->getMessage();}
    }

    public function getProducts(){
        $query='select * from product';
        $pdo=$this->query($query);
        $pdo->execute();

        return $pdo->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addData($name,$price,$model,$desc,$image){
        $file_name=basename($image['name']);
        $tmp_name=$image['tmp_name'];
        $to_dir="../view/uploads/".$file_name;
    
        $is_uploaded=move_uploaded_file($tmp_name,$to_dir);

        if(!$is_uploaded){
            return false;

        }
        
        try{
            $path="uploads/".$file_name;
            // $userid=$_SESSION['user']['id'];
            $userid=1;
            $query="insert into product (name,price,image,model,desciption,userid) values (:name,:price,:image,:model,:desc,:userid)";
        
            $statment=$this->prepare($query);
            $statment->bindValue(':name',$name);
            $statment->bindValue(':price',$price);
            $statment->bindValue(':image',$path);
            $statment->bindValue(':model',$model);
            $statment->bindValue(':desc',$desc);
            $statment->bindValue(':userid',$userid);
            $statment->execute();
            return true;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        


        // echo $name."".$price."".$desc;
    }

    public function singleProduct($id){
        $query='select * from product where id=:product_id';

        $pdo=$this->prepare($query);
        $pdo->bindParam(':product_id',$id);
        $pdo->execute();

        return $pdo->fetch(PDO::FETCH_ASSOC);
    }

    public function addtocart($id){
        $pro=$this->singleProduct($id);
        $data=array("name"=>$pro['name'],"price"=>$pro['price'],"quantity"=>1);
        session_start();

        $length=$_SESSION['cart']? count($_SESSION['cart']) : -1;
        $index=0;
        while($index < $length){
                if($_SESSION['cart'][$index]['name'] == $pro['name']){
                    return $_SESSION['cart'][$index]['quantity']+=1;
                            
                }
                $index+=1;
        }
        return $_SESSION['cart'][]=$data;
       
       
                
    }
}


?>