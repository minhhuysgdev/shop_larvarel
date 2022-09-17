@extends('admin.main')

@section('content')
<form action="" method="POST">
	<div class="card-body">
		<div class="form-group">
			<label for="menu">Tên danh mục</label>
			<input type="text" class="form-control" name="name" id="menu" placeholder="">
		</div>

		<div class="form-group">
			<label for="">Danh mục</label>
			<select name="parent_id" id="" class="form-control">
				<option value="0">Danh mục cha</option>
			</select>
		</div>

		<div class="form-group">
			<label for="description">Mô tả</label>
			<textarea class="form-control" name="description"></textarea>
		</div>

	  	<div class="form-group">
			<label for="content">Mô tả chi tiết</label>
			<textarea class="form-control" name="cotent" ></textarea>
	  	</div>
	  
		<div class="form-group">
			<label for="content">Kích hoạt</label>
			<div class="custom-control custom-radio">
				<input class="form-group-input" type="radio" name="active" id="active" value="1" checked="">
				<label for="active">Có</label> 
			</div>

			<div class="custom-control custom-radio">
				<input class="form-group-input" type="radio" name="active" id="nonactive" value="1" >
				<label for="nonactive">Không</label> 
			</div>
			
		</div>
	  </div>
	<div class="card-footer">
	  <button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>
@endsection