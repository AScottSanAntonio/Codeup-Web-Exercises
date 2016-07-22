
<?php  
function pageController () {
        $data = [];
    if (isset($_GET['counter'])) {
        $data['counter'] = $_GET ['counter'];
        
    } else {
        $data['counter'] = 0;
        
    }
    return $data;
}
    extract(pageController());
?>