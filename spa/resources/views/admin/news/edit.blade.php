@extends('templates.admin.master')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.news.index')}}">Quản lý tin tức</a> <a href="" class="current">Sửa tin tức</a> </div>
    <h1>Quản lý tin tức</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span18">
      	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Sửa tin tức</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.news.edit', $news->id)}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Tiêu đề:</label>
	                <div class="controls">
	                  <input type="text" name="title" id="required" value="{{ $news->title }}" style="width: 50%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Mô tả:</label>
	                <div class="controls">
	                  <textarea name="description" style="width:500px" rows="5">{{ $news->description }}</textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Keywords(SEO):</label>
	                <div class="controls">
	                  <textarea name="keywords" style="width:500px" rows="5">{{ $news->keywords }} </textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Nội dung:</label>
	                <div class="controls">
	                  <textarea name="detail" id="editor1" rows="5">{{ $news->detail }}</textarea>
	                </div>
	              </div>

	              <div class="control-group">
		              <label class="control-label">Danh mục</label>
		              <div class="controls">
		                <select name="cat_id">
		            	@foreach($cats as $cat)
		            	  @if($cat->id == $news->category_id)	
		                  	<option selected="selected" value="{{$cat->id}}">{{$cat->name}}</option>
		                  @else
		                  	<option value="{{$cat->id}}">{{$cat->name}}</option>
		                  @endif
		                @endforeach
		                </select>
		              </div>
		           </div>
	              <div class="control-group">
	                <label class="control-label">Hình ảnh vuông:</label>
	                <div class="controls">
	                  <input type="file" name="img" id="required" onchange="readURLvuong(this);" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label"></label>
        				<img id="images" src="/upload/{{$news->img}}" alt="New image" width="500px" />
        			</div>
		              <script type="text/javascript">
				        function readURLvuong(input) {
				            if (input.files && input.files[0]) {
				                var reader = new FileReader();

				                reader.onload = function (e) {
				                    $('#images').attr('src', e.target.result);
				                }

				                reader.readAsDataURL(input.files[0]);
				            }
				        }
				    </script>
	              <div class="control-group">
	                <label class="control-label">Hình ảnh(1200px:500px):</label>
	                <div class="controls">
	                  <input type="file" name="picture" id="required" onchange="readURL(this);" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label"></label>
        				<img id="blah" src="/upload/{{$news->picture}}" width="500px" alt="your image" />
        			</div>
		              <script type="text/javascript">
				        function readURL(input) {
				            if (input.files && input.files[0]) {
				                var reader = new FileReader();

				                reader.onload = function (e) {
				                    $('#blah').attr('src', e.target.result);
				                }

				                reader.readAsDataURL(input.files[0]);
				            }
				        }
				    </script>
	              <div class="form-actions">
	                <input type="submit" value="Sửa" class="btn btn-success">
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
        </div>
      </div>
    </div>
</div>
</div>
@stop