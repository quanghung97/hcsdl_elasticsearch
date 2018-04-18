@extends('layouts.layouts')
@section('banner')
<!-- Banner -->
  <section id="banner">
    <h1>Welcome to ELASTICSEARCH-DEMO</h1>
    <p>Laravel 5 ELASTICSEARCH-Database nosql</p>
  </section>
@endsection
@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- style -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/master.css') }}">
<link rel="stylesheet" type="text/css"
      href="{{ URL::asset('public/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/footer_home.css') }}">

@endsection
@yield('style')
@section('main')
<div class="container">
    <!-- search box -->
    <!-- <div class="search-label">
        NGÂN HÀNG THÔNG TIN KHOA HỌC
    </div> -->
    <form class="search-form" id="search_form" method="GET" action="">
        <div class="search-area col-md-12">

            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm..." name="text_search"
                       value="@if(isset($text_search)){{$text_search}}@endif">
                <div class="input-group-btn">
                    <button type="submit" class="btn submit-button">
                        <span class="glyphicon glyphicon-search">&nbsp;</span>Tìm kiếm dữ liệu
                    </button>
                </div>
            </div>

        </div>
        <div class="row col-md-12 filter-row">
            <hr>
            <div class="filter">
                <ul class="list-search-filter">
                    <li>
                        <a href="{!! url('chuyen-gia') !!}" id="chuyen-gia">Chuyên gia KH&CN</a>
                    </li>
                    <li>
                        <a href="{!! url('de-tai-du-an-cac-cap') !!}" id="de-tai">Đề tài, dự án các cấp</a>
                    </li>
                    <li>
                        <a href="{!! url('phat-minh') !!}" id="bang-phat-minh">Bằng phát minh, sáng chế</a>
                    </li>
                    <li>
                        <a href="{!! url('san-pham') !!}" id="san-pham">Sản phẩm, công nghệ mới</a>
                    </li>
                    <li>
                        <a href="{!! url('doanh-nghiep') !!}" id="doanh-nghiep">Doanh nghiệp KH&CN</a>
                    </li>
                </ul>
            </div>
        </div>
        @yield('content')

</div>
@endsection
@section('footer')
<!-- Footer -->
<div class="row div-footer">
    <div class="container">

        <div class="col-md-8 display-block">
            <ul>
                <li><a href="{!! url('chuyen-gia') !!}"> Dữ liệu chuyên gia KH&CN</a></li>
                <li><a href="{!! url('de-tai-du-an-cac-cap') !!}"> Dữ liệu đề tài, dự án các cấp</a></li>
                <li><a href="{!! url('phat-minh') !!}"> Dữ liệu bằng phát minh, sáng chế</a></li>
                <li><a href="{!! url('san-pham') !!}"> Dữ liệu sản phẩm, công nghệ mới</a></li>
                <li><a href="{!! url('doanh-nghiep') !!}"> Dữ liệu doanh nghiệp KH&CN</a></li>
            </ul>
        </div>
        <div class="col-md-4 display-block">
            <div class="social-icons">


                <ul class="nomargin">

                    <a href="#"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square fa-3x social-fr" id="social"></i></a>
                    <a href="#"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>

                </ul>

            </div>
        </div>
    </div>
</div>



@endsection
@section('js')
<script src="{{ URL::asset('public/js/jquery.cookie.js') }}"></script>
<script src="{{ URL::asset('public/js/my_script.js') }}"></script>
<script src="{{ URL::asset('public/js/printThis.js') }}"></script>
<script type="text/javascript">
    function inbaiviet() {
        $("#contentInvoice").printThis();
    }
</script>
<script>
    function inbaiviet1() {
        window.print();
    }
</script>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@endsection
