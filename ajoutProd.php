<?php
include('include/header.php');
?>



<div class="container-fluid">

    <form method="post" action="functions/createProd.php" class="row ">


        <div class="col mt-2">
            <div class="input-group">
                <label for="productName" class="input-group-text">product name</span>
                    <input type="text" id="productName" name="productName" class="form-control">
            </div>
        </div>
        <div class="col mt-2">
            <div class="input-group">

                <label for="productImgURL" class="input-group-text">url d'image</span>
                    <input type="text" id="productImgURL" name="productImgURL" class="form-control">
            </div>
        </div>
        <div class="col mt-2">
            <div class="input-group">
                <label for="productPrix" class="input-group-text">product price</span>
                    <input type="number" id="productPrix" step="0.01" name="productPrix" class="form-control">
            </div>
        </div>
        <button class="btn btn-secondary" type="submit">créer</button>
    </form>

</div>





<?php

require('include/footer.php');
?>