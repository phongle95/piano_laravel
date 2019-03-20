@extends('templates.admin.master')
@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="#" class="current">Quản lý dịch vụ</a> </div>
    <h1>Quản lý dịch vụ</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
      <div class="span12">
        	<a href="{{route('admin.service.add')}}" class="btn btn-success">Thêm</a>
        <div class="widget-box">
          <div class="widget-title text-center"> 
            <h5>Quản lý dịch vụ</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tiêu đề</th>
                  <th>Xem trước</th>
                  <th>Danh mục dịch vụ</th>
                  <th>Hình ảnh</th>
                  <th>Trạng thái</th>
                  <th style="text-align:center;width:150px">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach($services as $service)
                <tr class="even gradeA">
                  <td>{{$service->id}}</td>
                  <td>{{$service->title}}</td>
                  <td>{{$service->description}}</td>
                  <td>{{$service->catpackage->name}}</td>
                  <td><img style="width:300px" src="/upload/{{$service->img}}" /></td>
                  <td id="result-{{ $service->id }}"><a href="javascript:void(0)" onclick="return getActive({{$service->id}})"><img src="/templates/admin/img/icons/{{$service->active == 0?'deactive.png':'active.png'}}" /></a></td>
                  <td class="text-center">
                  	<a href="{{route('admin.service.edit', $service->id)}}" class="btn btn-primary">Sửa</a>
                  	<a onclick="return confirm('Do you want to delete this service?')" href="{{route('admin.service.delete', $service->id)}}" class="btn btn-danger">Xóa</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript">
    function getActive(id){
        $.ajax({
          url: "{{route('ajax.admin.activeService')}}",
          type: 'GET',
          cache: false,
          data: {
                id: id,
            },
          success: function(data){

            $('#result-'+id).html(data);
          }, 
          error: function() {
           alert("Có lỗi");
         }
       }); 
        return false;
      }
</script>
@stop
