@extends('home.home')
@section('style')
<script type="text/javascript" src="{{ URL::asset('public/js/phan_trang.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/search_result_de_tai.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/phan_trang.css') }}">
@endsection


<!-- start content -->
@section('content')
	<div class="row col-md-12 filter-row">
				<div class="filter">
					<ul class="list-search-filter">
						<li>
							<select name="tim_theo">
								@if($tim_theo == '0')
							  		<option value="0" selected="">Tìm theo</option>
							  	@else
							  		<option value="0">Tìm theo</option>
							  	@endif

							  	@if($tim_theo == '1')
							  		<option value="1" selected="">Tên đề tài, đề án</option>
							  	@else
							  		<option value="1">Tên đề tài, đề án</option>
							  	@endif

							  	@if($tim_theo == '2')
							  		<option value="2" selected="">CNĐT tác giả</option>
							  	@else
							  		<option value="2">CNĐT tác giả</option>
							  	@endif

							  	@if($tim_theo == '3')
							  		<option value="3" selected="">Mã số, ký hiệu</option>
							  	@else
							  		<option value="3">Mã số, ký hiệu</option>
							  	@endif

							  	@if($tim_theo == '4')
							  		<option value="4" selected="">Cơ quan chủ trì</option>
							  	@else
							  		<option value="4">Cơ quan chủ trì</option>
							  	@endif

							  	@if($tim_theo == '5')
							  		<option value="5" selected="">Tóm tắt nội dung</option>
							  	@else
							  		<option value="5">Tóm tắt nội dung</option>
							  	@endif
							</select>
						</li>
						<li>
							<select name="chuyen_nganh">
							  <option value="">Chuyên ngành</option>
							  @foreach($chuyen_nganh_khcn as $item)
							  	@if($chuyen_nganh_current == $item->id)
									<option value="{{$item->id}}" selected="">{{$item->ten}}</option>
								@else
									<option value="{{$item->id}}">{{$item->ten}}</option>
								@endif
							  @endforeach
							</select>
						</li>
					</ul>
				</div>
	</div>
	<!-- main content,display result -->

	<div class="row col-md-12 div-content search_result_de_tai_du_an_cac_cap">
			
			<table class="dataTable table-hover table-responsive" id="myTable">
				<thead class="head-dataTable">
					<th class="no">Stt</th>
					<th class="name">Tên đề tài, dự án</th>
					<th class="linh_vuc">Lĩnh vực KH&CN</th>
					<th class="ma_so">Mã số, ký hiệu</th>
					<th class="tac_gia">CNĐT, tác giả</th>
					<th class="thoi_gian">Thời gian kết thúc</th>
				</thead>
				<tbody>
@if($data_mysql == false)
                @if($tim_theo == 1)
					@foreach($datas as $key=>$item)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><a href="{{ URL::asset('de-tai-du-an-cac-cap/'.$item->_source->link ) }}" class="ten_de_tai">{!!$item->highlight->ten_de_tai[0]!!}</a></td>
							<td>{{$item->_source->linh_vuc }}</td>
							<td>{{$item->_source->maso_kyhieu }}</td>
							<td>{{$item->_source->chu_nhiem_detai }}</td>
							<td>{{$item->_source->nam_bat_dau }}-{{$item->_source->nam_ket_thuc }}</td>
						</tr>
					@endforeach
				@elseif($tim_theo == 2)
					@foreach($datas as $key=>$item)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><a href="{{ URL::asset('de-tai-du-an-cac-cap/'.$item->_source->link ) }}" class="ten_de_tai">{{$item->_source->ten_de_tai }}</a></td>
							<td>{{$item->_source->linh_vuc }}</td>
							<td>{{$item->_source->maso_kyhieu }}</td>
							<td>{!!$item->highlight->chu_nhiem_detai[0]!!}</td>
							<td>{{$item->_source->nam_bat_dau }}-{{$item->_source->nam_ket_thuc }}</td>
						</tr>
					@endforeach
				@elseif($tim_theo == 3)
					@foreach($datas as $key=>$item)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><a href="{{ URL::asset('de-tai-du-an-cac-cap/'.$item->_source->link ) }}" class="ten_de_tai">{{$item->_source->ten_de_tai }}</a></td>
							<td>{{$item->_source->linh_vuc }}</td>
							<td>{!!$item->highlight->maso_kyhieu[0]!!}</td>
							<td>{{$item->_source->chu_nhiem_detai }}</td>
							<td>{{$item->_source->nam_bat_dau }}-{{$item->_source->nam_ket_thuc }}</td>
						</tr>
					@endforeach
				@elseif($tim_theo == 4)
					@foreach($datas as $key=>$item)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><a href="{{ URL::asset('de-tai-du-an-cac-cap/'.$item->_source->link ) }}" class="ten_de_tai">{{$item->_source->ten_de_tai }}</a></td>
							<td>{{$item->_source->linh_vuc }}</td>
							<td>{{$item->_source->maso_kyhieu }}</td>
							<td>{{$item->_source->chu_nhiem_detai }}</td>
							<td>{{$item->_source->nam_bat_dau }}-{{$item->_source->nam_ket_thuc }}</td>
						</tr>
					@endforeach
				@elseif($tim_theo == 5)
					@foreach($datas as $key=>$item)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><a href="{{ URL::asset('de-tai-du-an-cac-cap/'.$item->_source->link ) }}" class="ten_de_tai">{{$item->_source->ten_de_tai }}</a></td>
							<td>{{$item->_source->linh_vuc }}</td>
							<td>{{$item->_source->maso_kyhieu }}</td>
							<td>{{$item->_source->chu_nhiem_detai }}</td>
							<td>{{$item->_source->nam_bat_dau }}-{{$item->_source->nam_ket_thuc }}</td>
						</tr>
					@endforeach
				@elseif($tim_theo == 0)
					@foreach($datas as $key=>$item)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><a href="{{ URL::asset('de-tai-du-an-cac-cap/'.$item->_source->link ) }}" class="ten_de_tai">{{$item->_source->ten_de_tai }}</a></td>
							<td>{{$item->_source->linh_vuc }}</td>
							<td>{{$item->_source->maso_kyhieu }}</td>
							<td>{{$item->_source->chu_nhiem_detai }}</td>
							<td>{{$item->_source->nam_bat_dau }}-{{$item->_source->nam_ket_thuc }}</td>
						</tr>
					@endforeach
				@endif
@else
                    @foreach($datas as $key=>$item)
						<tr>
							<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
							<td><a href="{{ URL::asset('de-tai-du-an-cac-cap/'.$item->link) }}" class="ten_de_tai">{{$item->ten_de_tai}}</a></td>
							<td>{{$item->linh_vuc}}</td>
							<td>{{$item->maso_kyhieu}}</td>
							<td>{{$item->chu_nhiem_detai}}</td>
							<td>{{$item->nam_bat_dau}}-{{$item->nam_ket_thuc}}</td>
						</tr>
					@endforeach

@endif
				</tbody>
			</table>
			<div>
				{!! $datas->appends(request()->input())->links() !!}
			</div>
		</div>


	<!-- end main content -->
@endsection
<!-- end content -->
@section('js')
	<script type="text/javascript" src="{{ URL::asset('public/js/cookie.js') }}"></script>
@endsection
