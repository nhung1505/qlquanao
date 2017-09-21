@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-md-6 col-md-offset-3">
               <table class="table table-bordered table-striped">
                   <tr>
                       <th class="text-center">Id</th>
                       <th class="text-center">Tên loại</th>
                       <th class="text-center">Sửa</th>
                       <th class="text-center">Xóa</th>
                   </tr>
                   @foreach($categories as $category )
                       <tr>
                           <td class="text-center">{{$category->id}}</td>
                           <td>{{$category->name}}</td>
                           <td class="text-center">
                               <a  href="{{route('show.edit.type',$category->id)}}"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                           </td>
                           <td class="text-center">
                               <a href="{{route('show.delete.type',$category->id)}}"><i class="glyphicon glyphicon-trash"></i> xóa</a>
                           </td>
                       </tr>
                   @endforeach
               </table>
           </div>
        </div>
    </div>

@endsection