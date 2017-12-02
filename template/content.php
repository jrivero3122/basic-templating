<div class="container-fluid">
    <div class="row">
        <div class="col">
        <?php
        
            $views = array("home","portfolio", "logout", "signup");
            
           
            if( isset($_GET["page"]) && in_array($_GET["page"],$views)){
                require_once(__ROOT__.'/views/'.$_GET["page"].'.php');
                setNavigation($_GET["page"]);
            } else if(!isset($_GET["page"])){
                require_once(__ROOT__.'/views/home.php');
                setNavigation("home");
            } else{
                require_once(__ROOT__.'/views/404.php');
                setNavigation("404");
            }
            
         function setNavigation($page){
              if( !isset($_SESSION['pages_visited']))
                {
                    $_SESSION['pages_visited'] = array($page);
                } else{
                    array_push($_SESSION['pages_visited'], $page);
                }
         }   
            
        ?>
        
        </div>
    </div>
</div>