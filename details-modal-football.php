<div class="modal fade details-1" id="details-2" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close" > <span aria-hidden="true">&times;</span>
				</button>
				<h4 class="col-12 modal-title text-center">Football</h4>

			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm">
							<img src="images/image-5.jpg" id="images" class="details img-responsive">
						</div>
						<div class="col-sm">
							<h4>Details</h4>
							<p>This is very good Football</p>
							<p>You must buy it.</p>
							<p>Price : Rs. 450</p>
							<p>Hurry up!!!</p>
							<form action="add_cart.php" method="post">
								<div class="form-group">
									<div class="col-xs-3">
										<label for="quantity" id="quantity-label">Quantity: </label>
										<input type="text" class="form-control" id="quantity" name="quantity">

									</div>
									<br>
									<div class="form-group">
										<label for="size">Size : </label>
										<select name="size" id="size" class="form-control">
											<option value=""></option>
											<option value="28">28</option>
											<option value="30">30</option>
											<option value="32">32</option>
										</select>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input class="btn btn-success" data-dismiss="modal" value="Close">
				<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
			</div>
		</div>
		
	</div>
</div>