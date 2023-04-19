<style>
.blog{
padding-top: 40px;
}
</style>
<div class="container blog" itemscope itemtype="http://schema.org/NewsArticle">
    <div class="col-sm-12">
        <div class="blog_card bg-white" style="padding-top:1%;padding-bottom:100px">
        <h1 itemprop="headline"><?=@$query[0]->title?></h1>
            <?php if (@$query[0]->image){
                $img=$query[0]->image
                ?>
            <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
            	<img alt="<?=@$query[0]->title?>" src="<?php echo base_url("assets/uploads/blog/$img")?>" width="100%;" >
            </div>
            <?php }?>
            <br><br>
            <small><b itemprop="author" itemscope itemtype="https://schema.org/Person"> Author: </b><?=@$query[0]->author?> </small>
            <small><b itemprop="dateModified"> Date: </b><?=@$query[0]->date?>  <?=@$query[0]->time?></small>
            <p itemprop="articleBody"><?=@$query[0]->description?></p>


        </div>
    </div>
</div>