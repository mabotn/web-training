<?php 
require '_header.html';
?>
<!-- les catégories -->

<div class="container cat">
	<div class="row">
	<?php foreach ($category as $cat): ?>
	  <div class="col-sm-4 col-md-3 text-center">
	    <div class="thumbnail fadeOut">
	      <?php echo'<img src="data:image;base64,'.$cat->image.'" alt="'.$cat->image.'">';?>
	      <div class="caption">
	        <h3><?= $cat->nom;?></h3>
	        
	        <form action="products.php" method="GET">
	        	<button type="submit" class="btn btn-block b" name="nameOfType" style="width: 100%;margin: auto;background-color: #232F3E;color: white" value="<?= $cat->nom;?>">More ..</button>
	        </form>
	      </div>
	    </div>
	  </div>
	<?php endforeach ?>
	</div>
</div>

<div class="container-fluid" style="width: 80%">
	<!-- carousel -->

<div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        <div class="col-sm-3">
    						<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                    </ul>
              </div><!-- /Slide1 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <div class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                    </ul>
              </div><!-- /Slide2 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <div class="col-sm-3">	
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Praesent commodo</h4>
									<p>Nullam Condimentum Nibh Etiam Sem</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </div>
                    </ul>
              </div><!-- /Slide3 --> 
        </div>
        
       
	   <nav>
			<ul class="control-box pager">
				<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
				<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
			</ul>
		</nav>
	   <!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->
</div>



</body>
</html>