<?php
$conn = new mysqli('localhost','root','','e_commerce');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
if(isset($_POST['category']))
{
  $category = $_POST['category'];
$query = $conn->query("SELECT * FROM produit WHERE description LIKE '%".$category."%' AND contiter > 0");
    $total_row = mysqli_num_rows($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-lg-4 col-md-6" >
        
                                 <div class="product__item" >
                <div class="product__item__pic set-bg"  >
                <img style="border-radius:5px; height:320px; width:320px; " src="categorie/'.$row->image.'"/>
                                    <ul class="product__hover">
                                        <li><a href="#" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">'.$row->libelle.'</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">'.$row->prix.'</div>
                                    <button type="submit" class="site-btn"><a href="product-details.php?id_per='.$row->id.'" class="b" style="color:white;">ajout</a></button>
                                </div>
                            </div>
                        </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>
<?php
$conn = new mysqli('localhost','root','','e_commerce');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
if(isset($_POST['homme']))
{
  $homme = $_POST['homme'];
$query = $conn->query("SELECT * FROM produit WHERE description LIKE '%".$homme."%' AND categorie = 'puleHomme' AND contiter > 0");
    $total_row = mysqli_num_rows($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-lg-4 col-md-6" >
        
                                 <div class="product__item" >
                <div class="product__item__pic set-bg"  >
                <img style="border-radius:5px; height:320px; width:320px; " src="categorie/'.$row->image.'"/>
                                    <ul class="product__hover">
                                        <li><a href="#" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">'.$row->libelle.'</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">'.$row->prix.'</div>
                                    <button type="submit" class="site-btn"><a href="product-details.php?id_per='.$row->id.'" class="b" style="color:white;">ajout</a></button>
                                </div>
                            </div>
                        </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>

<?php
$conn = new mysqli('localhost','root','','e_commerce');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
if(isset($_POST['femme']))
{
  $femme = $_POST['femme'];
$query = $conn->query("SELECT * FROM produit WHERE description LIKE '%".$femme."%' AND categorie = 'puleFemme' AND contiter > 0");
    $total_row = mysqli_num_rows($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-lg-4 col-md-6" >
        
                                 <div class="product__item" >
                <div class="product__item__pic set-bg"  >
                <img style="border-radius:5px; height:320px; width:320px; " src="categorie/'.$row->image.'"/>
                                    <ul class="product__hover">
                                        <li><a href="#" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">'.$row->libelle.'</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">'.$row->prix.'</div>
                                    <button type="submit" class="site-btn"><a href="product-details.php?id_per='.$row->id.'" class="b" style="color:white;">ajout</a></button>
                                </div>
                            </div>
                        </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>
<?php
$conn = new mysqli('localhost','root','','e_commerce');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
if(isset($_POST['objet']))
{
  $objet = $_POST['objet'];
$query = $conn->query("SELECT * FROM produit WHERE description LIKE '%".$objet."%' AND categorie = 'objet' AND contiter > 0");
    $total_row = mysqli_num_rows($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-lg-4 col-md-6" >
        
                                 <div class="product__item" >
                <div class="product__item__pic set-bg"  >
                <img style="border-radius:5px; height:320px; width:320px; " src="categorie/'.$row->image.'"/>
                                    <ul class="product__hover">
                                        <li><a href="#" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">'.$row->libelle.'</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">'.$row->prix.'</div>
                                    <button type="submit" class="site-btn"><a href="product-details.php?id_per='.$row->id.'" class="b" style="color:white;">ajout</a></button>
                                </div>
                            </div>
                        </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>
