@extends('home.home')
@section('style')
<script type="text/javascript" src="{{ URL::asset('public/js/phan_trang.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/search_result_doanh_nghiep.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/phan_trang.css') }}">
@endsection

<!-- start content -->
@section('content')
	<div class="row col-md-12 filter-row">
				<div class="filter">
					<ul class="list-search-filter">
						<li>
							<select name='tim_theo'>
								@if($tim_theo == '0')
							  		<option value="0" selected="">Tìm theo</option>
							  	@else
							  		<option value="0">Tìm theo</option>
							  	@endif

							  	@if($tim_theo == '1')
							  		<option value="1" selected="">Tên doanh nghiệp</option>
							  	@else
							  		<option value="1">Tên doanh nghiệp</option>
							  	@endif

							  	@if($tim_theo == '2')
							  		<option value="2" selected="">Sản phẩm KHCN</option>
							  	@else
							  		<option value="2">Sản phẩm KHCN</option>
							  	@endif

							  	@if($tim_theo == '3')
							  		<option value="3" selected="">Công nghệ nổi bật</option>
							  	@else
							  		<option value="3">Công nghệ nổi bật</option>
							  	@endif

							  	@if($tim_theo == '4')
							  		<option value="4" selected="">Hướng nghiên cứu</option>
							  	@else
							  		<option value="4">Hướng nghiên cứu</option>
							  	@endif
							</select>
						</li>
						<li>
							<select name='linh_vuc_khcn'>
							  <option value="0">Lĩnh vực KH&CN</option>
							  @foreach($linh_vuc as $lv)
							  	@if($linh_vuc_current == $lv->id)
							  		<option value="{{$lv->id}}" selected="">{{$lv->linh_vuc}}</option>
							  	@else
							  		<option value="{{$lv->id}}">{{$lv->linh_vuc}}</option>
							  	@endif
							  @endforeach
							</select>
						</li>
						<li>
							<select name='tinh_thanh_pho'>
							  <option value="0">Tỉnh, thành phố</option>
							  @foreach($tinh_thanh as $tinh)
							  	@if($tinh_thanh_current == $tinh->id)
							  		<option value="{{$tinh->id}}" selected="">{{$tinh->tinh_thanh_pho}}</option>
							  	@else
							  		<option value="{{$tinh->id}}">{{$tinh->tinh_thanh_pho}}</option>
							  	@endif
							  @endforeach
							</select>
						</li>
						
					</ul>
				</div>
	</div>


	<!-- main content, display result -->

	<div class="row col-md-12 div-content search_result_doanh_nghiep">

		<table class="dataTable table-hover table-responsive" id="myTable">
			<thead class="head-dataTable">
				<th class="no">Stt</th>
				<th class="anh_logo">Logo</th>
				<th class="name">Tên doanh nghiệp/ tổ chức</th>
				<th class="linh_vuc">Lĩnh vực KH&CN</th>
				<th class="tru_so">Trụ sở</th>
				<th class="tinh_thanh">Tỉnh, thành phố</th>
				<th class="rank">Xếp hạng</th>
			</thead>
			<tbody>
@if($data_mysql == false)
    @if($tim_theo == 1)
				@foreach($datas as $key=>$dn)
					<tr>
						<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
						<td><img src="{{ URL::asset($dn->_source->logo ) }}" alt="logo" class="logo_doanh_nghiep"></td>
						<td><a href="{{ URL::asset('doanh-nghiep/'.$dn->_source->link ) }}" class="ten_doanh_nghiep">{!!$dn->highlight->ten_doanh_nghiep[0]!!}</a></td>
						<td>{{$dn->_source->linh_vuc }}</td>
						<td>{{$dn->_source->dia_chi }}</td>
						<td>{{$dn->_source->tinh_thanh_pho }}</td>
						<td>{{$dn->_source->xep_hang_trinh_do_khcn }}</td>
					</tr>
				@endforeach
    @elseif($tim_theo == 2)
                @foreach($datas as $key=>$dn)
					<tr>
						<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
						<td><img src="{{ URL::asset($dn->_source->logo ) }}" alt="logo" class="logo_doanh_nghiep"></td>
						<td><a href="{{ URL::asset('doanh-nghiep/'.$dn->_source->link ) }}" class="ten_doanh_nghiep">{{$dn->_source->ten_doanh_nghiep }}</a></td>
						<td>{{$dn->_source->linh_vuc }}</td>
						<td>{{$dn->_source->dia_chi }}</td>
						<td>{{$dn->_source->tinh_thanh_pho }}</td>
						<td>{{$dn->_source->xep_hang_trinh_do_khcn }}</td>
					</tr>
				@endforeach
    @elseif($tim_theo == 3)
                @foreach($datas as $key=>$dn)
					<tr>
						<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
						<td><img src="{{ URL::asset($dn->_source->logo ) }}" alt="logo" class="logo_doanh_nghiep"></td>
						<td><a href="{{ URL::asset('doanh-nghiep/'.$dn->_source->link ) }}" class="ten_doanh_nghiep">{{$dn->_source->ten_doanh_nghiep }}</a></td>
						<td>{{$dn->_source->linh_vuc }}</td>
						<td>{{$dn->_source->dia_chi }}</td>
						<td>{{$dn->_source->tinh_thanh_pho }}</td>
						<td>{{$dn->_source->xep_hang_trinh_do_khcn }}</td>
					</tr>
				@endforeach
    @elseif($tim_theo == 4)
                @foreach($datas as $key=>$dn)
					<tr>
						<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
						<td><img src="{{ URL::asset($dn->_source->logo ) }}" alt="logo" class="logo_doanh_nghiep"></td>
						<td><a href="{{ URL::asset('doanh-nghiep/'.$dn->_source->link ) }}" class="ten_doanh_nghiep">{{$dn->_source->ten_doanh_nghiep }}</a></td>
						<td>{{$dn->_source->linh_vuc }}</td>
						<td>{{$dn->_source->dia_chi }}</td>
						<td>{{$dn->_source->tinh_thanh_pho }}</td>
						<td>{{$dn->_source->xep_hang_trinh_do_khcn }}</td>
					</tr>
				@endforeach
    @else
                @foreach($datas as $key=>$dn)
					<tr>
						<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
						<td><img src="{{ URL::asset($dn->_source->logo ) }}" alt="logo" class="logo_doanh_nghiep"></td>
						<td><a href="{{ URL::asset('doanh-nghiep/'.$dn->_source->link ) }}" class="ten_doanh_nghiep">{{$dn->_source->ten_doanh_nghiep }}</a></td>
						<td>{{$dn->_source->linh_vuc }}</td>
						<td>{{$dn->_source->dia_chi }}</td>
						<td>{{$dn->_source->tinh_thanh_pho }}</td>
						<td>{{$dn->_source->xep_hang_trinh_do_khcn }}</td>
					</tr>
				@endforeach
    @endif

@else
                @foreach($datas as $key=>$dn)
					<tr>
						<td>{!! ($datas->currentPage() - 1)*10 + $key +1 !!}</td>
						<td><img src="{{ URL::asset($dn->logo) }}" alt="logo" class="logo_doanh_nghiep"></td>
						<td><a href="{{ URL::asset('doanh-nghiep/'.$dn->link) }}" class="ten_doanh_nghiep">{{$dn->ten_doanh_nghiep}}</a></td>
						<td>{{$dn->linh_vuc}}</td>
						<td>{{$dn->dia_chi}}</td>
						<td>{{$dn->tinh_thanh_pho}}</td>
						<td>{{$dn->xep_hang_trinh_do_khcn}}</td>
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
@section('script')
	<script type="text/javascript" src="{{ URL::asset('public/js/cookie.js') }}"></script>
@endsection
