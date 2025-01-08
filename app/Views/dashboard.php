<div class="row px-3">
<?php 
        foreach ($barang as $brg ) {
        ?>
    <div class="col-sm-3 p-3">
        
        <div class="card" style="width: 100%;">
            <img src="<?=$brg['gambar'];?>" class="card-img-top img-fluid" style="height: 250px" alt="">
            <div class="card-body ">
                <span class="text-black-400 line-through">Rp. <?php echo $brg['harga'];?></span>
                <h5 class="card-title"><?php echo $brg['nama_barang'];?></h5>
                <p class="card-text" style="max-height: 100px; overflow:hidden; min-height: 100px"><?php echo $brg['deskripsi'];?></p>
                <div class="text-center">
                    <a href="#" class="btn btn-block text-center btn-dark">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
        
    <?php }?>
      
    
</div>
        