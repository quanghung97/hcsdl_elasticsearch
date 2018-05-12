@extends('home.home')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/search_result_chuyen_gia.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/phan_trang.css') }}">
@endsection
@section('content')

  <div class="row col-md-12 filter-row ">
        <div class="filter">
          <ul class="list-search-filter">
            <li>
              <select class="select-style" name = 'tim_theo'>
                @if($tim_theo == '0')
                    <option value="0" selected="">Tìm theo</option>
                  @else
                    <option value="0">Tìm theo</option>
                  @endif

                  @if($tim_theo == '1')
                    <option value="1" selected="">Tên nhà KH</option>
                  @else
                    <option value="1">Tên nhà KH</option>
                  @endif

                  @if($tim_theo == '2')
                    <option value="2" selected="">Lĩnh vực nghiên cứu</option>
                  @else
                    <option value="2">Lĩnh vực nghiên cứu</option>
                  @endif

                  @if($tim_theo == '3')
                    <option value="3" selected="">Hướng nghiên cứu</option>
                  @else
                    <option value="3">Hướng nghiên cứu</option>
                  @endif

                  @if($tim_theo == '4')
                    <option value="4" selected="">Cơ quan công tác</option>
                  @else
                    <option value="4">Cơ quan công tác</option>
                  @endif
              </select>
            </li>

            <li>
              <select class="select-style" name="chuc_danh">
                <option value="">Chức danh</option>
                @foreach($hoc_vi as $hv)
                  @if($hoc_vi_current == $hv->hoc_vi)
                    <option value="{{$hv->hoc_vi}}" selected="">{{$hv->hoc_vi}}</option>
                  @else
                    <option value="{{$hv->hoc_vi}}">{{$hv->hoc_vi}}</option>
                  @endif
                @endforeach
              </select>
            </li>
          </ul>
        </div>
  </div>



	<!-- main content, display result -->

		<div class="row col-md-12 div-content search_result_chuyen_gia">
      <div class="search-info">
				<span class="glyphicon glyphicon-search
				"></span> Kết quả tìm kiếm chuyên gia KH&CN : {!! $datas->total() !!} trong {{ $time_search }} giây
			</div>
			<table class="dataTable table-hover table-responsive" id="myTable">
				<thead class="head-dataTable">
					<th class="no">Stt</th>
					<th class="anh">Ảnh</th>
					<th class="name">Họ và tên</th>
					<th class="co_quan">Cơ quan công tác</th>
					<th class="linh_vuc">Lĩnh vực nghiên cứu</th>
					<th class="tinh_thanh">Tỉnh thành</th>
				</thead>
				<tbody>
@if($data_mysql == false)
				@if ($tim_theo == 1)
					 @foreach($datas as $key => $cg)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><img src="{{ URL::asset($cg->_source->link_anh) }}" alt="ảnh" class="img-circle anh_chuyen_gia"></td>
							<td><a href="{{ URL::asset('chuyen-gia/'.$cg->_source->linkid) }}" class="ten_chuyen_gia">{{$cg->_source->hoc_vi}} {!!$cg->highlight->ho_va_ten[0]!!}</a></td>
							<td>{!!$cg->_source->co_quan!!}</td>
							<td>{!! $cg->_source->chuyen_nganh !!}</td>
							<td>{{$cg->_source->tinh_thanh}}</td>
						</tr>
					@endforeach
				@elseif ($tim_theo == 2)
                     @foreach($datas as $key => $cg)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><img src="{{ URL::asset($cg->_source->link_anh) }}" alt="ảnh" class="img-circle anh_chuyen_gia"></td>
							<td><a href="{{ URL::asset('chuyen-gia/'.$cg->_source->linkid) }}" class="ten_chuyen_gia">{{$cg->_source->hoc_vi}} {{$cg->_source->ho_va_ten}}</a></td>
							<td>{!!$cg->_source->co_quan!!}</td>
							<td>{!! $cg->highlight->chuyen_nganh[0] !!}</td>
							<td>{{$cg->_source->tinh_thanh}}</td>
						</tr>
					@endforeach
				@elseif ($tim_theo == 3)
				     @foreach($datas as $key => $cg)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><img src="{{ URL::asset($cg->_source->link_anh) }}" alt="ảnh" class="img-circle anh_chuyen_gia"></td>
							<td><a href="{{ URL::asset('chuyen-gia/'.$cg->_source->linkid) }}" class="ten_chuyen_gia">{{$cg->_source->hoc_vi}} {{$cg->_source->ho_va_ten}}</a></td>
							<td>{!!$cg->_source->co_quan!!}</td>
							<td>{!! $cg->_source->chuyen_nganh !!}</td>
							<td>{{$cg->_source->tinh_thanh}}</td>
						</tr>
					@endforeach
                @elseif ($tim_theo == 4)
				     @foreach($datas as $key => $cg)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><img src="{{ URL::asset($cg->_source->link_anh) }}" alt="ảnh" class="img-circle anh_chuyen_gia"></td>
							<td><a href="{{ URL::asset('chuyen-gia/'.$cg->_source->linkid) }}" class="ten_chuyen_gia">{{$cg->_source->hoc_vi}} {{$cg->_source->ho_va_ten}}</a></td>
							<td>{!!$cg->highlight->co_quan[0]!!}</td>
							<td>{!! $cg->_source->chuyen_nganh !!}</td>
							<td>{{$cg->_source->tinh_thanh}}</td>
						</tr>
					@endforeach
				@elseif ($tim_theo == 0)
				    @foreach($datas as $key => $cg)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><img src="{{ URL::asset($cg->_source->link_anh) }}" alt="ảnh" class="img-circle anh_chuyen_gia"></td>
							<td><a href="{{ URL::asset('chuyen-gia/'.$cg->_source->linkid) }}" class="ten_chuyen_gia">{{$cg->_source->hoc_vi}} {{$cg->_source->ho_va_ten}}</a></td>
							<td>{!!$cg->_source->co_quan!!}</td>
							<td>{!! $cg->_source->chuyen_nganh !!}</td>
							<td>{{$cg->_source->tinh_thanh}}</td>
						</tr>
					@endforeach
				@endif
@else

				     @foreach($datas as $key => $cg)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><img src="{{ URL::asset($cg->link_anh) }}" alt="ảnh" class="img-circle anh_chuyen_gia"></td>
							<td><a href="{{ URL::asset('chuyen-gia/'.$cg->linkid) }}" class="ten_chuyen_gia">{{$cg->hoc_vi}} {{$cg->ho_va_ten}}</a></td>
							<td>{{$cg->co_quan}}</td>
							<td>{!! $cg->chuyen_nganh !!}</td>
							<td>{{$cg->tinh_thanh}}</td>
						</tr>
					@endforeach
@endif
				</tbody>
			</table>
			<div>
				{!! $datas->appends(request()->input())->links() !!}
			</div>
		</div>

@endsection
@section('js')
	<script type="text/javascript" src="{{ URL::asset('public/js/cookie.js') }}"></script>
@endsection
