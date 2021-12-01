
    <?php 
    require "data/infos.php";
    include "template/header.php"; 
    ?>

    <h2>Choisissez un article</h2>

    <ul class="list-group">
        <li class="list-group-item">      
            <a class="btn btn-success" href="detail.php?id=1">Article 1</a>  
        </li>  
        <li class="list-group-item">   
            <a class="btn btn-success" href="detail.php?id=2">Article 2</a>  
        </li>  
        <li class="list-group-item">  
            <a class="btn btn-success" href="detail.php?id=3">Article 3</a> 
        </li>
    </ul>



    <?php include "template/footer.php"; ?>
