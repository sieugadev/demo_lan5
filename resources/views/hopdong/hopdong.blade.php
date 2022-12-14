@extends('layout.main')
@section('main_body')
      
               <div class="card-header bg-danger">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-light"> DANH SÁCH HỢP ĐỒNG</h1>
                                  </div>
                    
                     </div>
</div>
</br>
<div> <a href="{!! URL::route('them_hd')!!}" class=" btn btn-primary"><i class="btn-icon-only icon-edit">Thêm mới</i></a> <br></div> 
                   <div class="card-body">
                   @if(Session::has('thongbao'))
                      <div class="alert alert-success">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
                                <table class="table table-bordered ">
                                     <thread >
                                         </tr >
                                           <th align="center">STT</th>
                                           <th align="center">MÃ HỢP ĐỒNG</th>
                                           <th align="center">MÃ NHÂN VIÊN</th>
                                           <th align="center">TÊN NHÂN VIÊN</th>
                                           <th align="center">HỆ SỐ LƯƠNG</th>
                                           <th align="center">NGÀY VÀO LÀM</th>
                                           <th align="center">TÙY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     @foreach ($hopdong as $hd)
                                     <tr>
                                        <td>{{$hd->id}}</td>
                                        <td>{{$hd->ma_hd}}</td>
                                        <td>{{$hd->ma_nv}}</td>
                                        <td>{{$hd->hoten_nv}}</td>
                                        <td>{{$hd->heso_luong}}</td>
                                        <td>{{$hd->ngayvao}}</td>
                                        <td class="td-actions">
                        <a href="{!! URL ::Route('sua_hd',$hd->id)!!}" class="  btn btn-primary"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="{!! URL ::Route('xoa_hd',$hd->id)!!}" class="  btn btn-danger">
                            <i class="btn-icon-only icon-remove">Xóa</i>
                        </a>
                    </td>
                                     </tr>
                                       @endforeach 
                                   
                                    </tbody>
                               </table>
                             <!--code gọi phân trang-->
                             {{$hopdong->links("pagination::bootstrap-4")}}
                 
                  
                 
                 </div >   
              </div>
           </div>

       @endsection

