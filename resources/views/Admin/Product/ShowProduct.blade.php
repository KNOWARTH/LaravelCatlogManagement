 
	 
	 <html>
			<head>
					@include('Admin/AdminHeader')
			</head>
			<body>
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading" align="center">View Records</div>
						<div class="panel-body">



							<a href="<?php echo 'AddCategory' ?>">Add New Product</a>
							<BR>
								<div id="mydiv"><P style="color:red"><?php echo Session::get('msg'); ?></P></div>

								<div class="container" style="width: 905px;">

									<table class="table" style="width: 93%;
									max-width: 110%;
									margin-bottom: 20px;">


							<thread>

								<th>Product Name</th>
								<th>Product Image</th>
								<th>Product Description</th>
								<th>Product Price</th>
								<th>Product Category Id</th>
								<th>Action</th>

							</thread>
							<tbody>
								<?php 

								foreach ($data as $row) {
									?>
									<tr>

										<td><?php echo $row->p_name?></td>
										<td><?php echo $row->p_image?></td>
										<td><?php echo $row->p_desc?></td>
										<td><?php echo $row->p_price?></td>
										<td><?php echo $row->p_category_id?></td>
										<td>
											<a href="<?php echo 'EditProduct/'.$row->p_id?>">Edit</a>
											<a href="<?php echo 'delete/'.$row->p_id?>">Delete</a>
										</td>
									</tr>
									<?php } ?>
								




								</tbody>
		
						</table>
						 <div align="center">{!! $data->links() !!}</div>
						</div>
					</div>
					</div>
				</div>
				</div>
				</div>
			</body>
	 </html>

 