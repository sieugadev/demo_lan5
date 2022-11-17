@extends('layout.main')
@section('main_body')

<div class="card-header ">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-info"> THÊM THÔNG TIN NHÂN VIÊN</h1>
                                  </div>
                    
                 
            
            <form action="{!! URL::route('luu_nv')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Mã Số Nhân Viên</label>
                        <input id="txt_ma_nv" name="txt_ma_nv" class="form-control" type="text" value="{!! old('txt_ma_nv') !!}">
                         
                    </div>
                   <div class="col">
                        <label>Họ và Tên Nhân Viên</label>
                        <input id="new-pass-control" name="txt_hoten_nv" class="form-control" type="text" value="{!! old('txt_hoten_nv') !!}">
                      
                    </div>
</div>




<div class="card-header text-white">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu Lại&nbsp&nbsp</button>
                    <a href="{!! URL::route('nhanvien')!!}" class="btn btn-primary"><i class="icon-remove"></i>&nbsp&nbspVề Trang Chủ&nbsp&nbsp</a>
</div>


</div>

    @endsection