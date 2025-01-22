<section class="main_content dashboard_part large_header_bg">
    <!-- header  -->
    @include( 'admin.layout.header')
    <!--/ header  -->
    <div class="main_content_iner overly_inner">
        <div class="container-fluid p-0">
            <!-- page title  -->
            <div class="row">
                <div class="col-12">
                    <div
                        class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">Trang chủ </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Sales</li>
                            </ol>
                        </div>
                        <a href="#" class="white_btn3">Tạo bài báo cáo</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 card_height_100">
                    <div class="white_card mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Doanh thu </h3>
                                </div>
                                <div
                                    class="float-lg-right float-none sales_renew_btns justify-content-end">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Tuần này</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tuần trước</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tháng trước</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body" style="height: 286px">
                            <canvas id="bar"></canvas>
                        </div>
                    </div>
                    <div class="white_card mb_20">
                        <div
                            class="white_card_body renew_report_card d-flex align-items-center justify-content-between flex-wrap">
                            <div class="renew_report_left">
                                <h4 class="f_s_19 f_w_600 color_theme2 mb-0">
                                    Download your earnings report
                                </h4>
                                <p class="color_gray2 f_s_12 f_w_600">
                                    There are many variations of passages.
                                </p>
                            </div>
                            <div class="create_report_btn">
                                <a href="#" class="btn_1 mt-1 mb-1">Tạo bài báo cáo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 card_height_100 mb_20">
                    <div class="white_card">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Tổng số cửa hàng</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span
                                            class="dropdown-toggle"
                                            id="dropdownMenuButton"
                                            data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div
                                            class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-eye"></i>Tính năng</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-trash"></i> Xóa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i> Sửa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-printer"></i> In ra</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-download"></i>Tải về</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body p-0">
                            <div class="card_container">
                                <div
                                    id="platform_type_dates_donut"
                                    style="height: 280px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="sales_unit_footer d-flex justify-content-between">
                        <div class="single_sales">
                            <p>Doanh thu của tháng này</p>
                            <h3>$57k</h3>
                            <p class="d-flex align-items-center">
                                <i class="ti-arrow-up"></i> <span> 14.5%</span> so với tháng trước
                            </p>
                        </div>
                        <div class="single_sales disable_sales">
                            <p>Doanh thu của tháng này</p>
                            <h3>$14k</h3>
                            <p class="d-flex align-items-center">
                                <i class="ti-arrow-up"></i> <span> 14.5%</span> so với tháng trước
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Bán hàng hàng ngày</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span
                                            class="dropdown-toggle"
                                            id="dropdownMenuButton"
                                            data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div
                                            class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-eye"></i> Tính năng</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-trash"></i> Xóa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i> Sửa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-printer"></i> In ra</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-download"></i>Tải về</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div id="chart-currently"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Bản tóm tắt</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span
                                            class="dropdown-toggle"
                                            id="dropdownMenuButton"
                                            data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div
                                            class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-eye"></i> Tính năng</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-trash"></i> Xóa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i> Sửa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-printer"></i> In ra</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-download"></i>Tải về</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body mt_30">
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="25"></span>
                            </div>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="75"></span>
                            </div>
                            <div id="bar3" class="barfiller mb-0">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="34"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Tổng số đơn hàng</h3>
                                </div>
                                <div
                                    class="float-lg-right float-none sales_renew_btns justify-content-end">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Hôm nay</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tuần này</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="white_card_body d-flex align-items-center"
                            style="height: 140px">
                            <h4 class="f_w_900 f_s_60 mb-0 me-2">356</h4>
                            <div class="w-100" style="height: 100px">
                                <canvas width="100%" id="page_views"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Giao dịch</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span
                                            class="dropdown-toggle"
                                            id="dropdownMenuButton"
                                            data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div
                                            class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-eye"></i> Tính năng</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-trash"></i> Xóa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i> Sửa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-printer"></i> In ra</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-download"></i>Tải về</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="table-responsive">
                                <table class="table bayer_table m-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img
                                                    class="byder_thumb wh_56"
                                                    src="img/Payment/1.png"
                                                    alt="" />
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name f_s_16 f_w_700 color_theme">
                                                        Hóa đơn tiền điện
                                                    </h5>
                                                    <p class="color_gray f_s_12 f_w_700">
                                                        10 Aug 03:00PM
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name f_s_16 f_w_700 text_color_4">
                                                        - $ 1254.00
                                                    </h5>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    class="byder_thumb wh_56"
                                                    src="img/Payment/1.png"
                                                    alt="" />
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name f_s_16 f_w_700 color_theme">
                                                        Thuê mặt bằng bán hàng
                                                    </h5>
                                                    <p class="color_gray f_s_12 f_w_700">
                                                        10 Aug 03:00PM
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name f_s_16 f_w_700 text_color_5">
                                                        + $ 1254.00
                                                    </h5>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    class="byder_thumb wh_56"
                                                    src="img/Payment/1.png"
                                                    alt="" />
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name f_s_16 f_w_700 color_theme">
                                                        Tính giá sản phẩm
                                                    </h5>
                                                    <p class="color_gray f_s_12 f_w_700">
                                                        10 Aug 03:00PM
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name f_s_16 f_w_700 text_color_5">
                                                        + $ 1254.00
                                                    </h5>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    class="byder_thumb wh_56"
                                                    src="img/Payment/1.png"
                                                    alt="" />
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name f_s_16 f_w_700 color_theme">
                                                        Chi phí đóng gói
                                                    </h5>
                                                    <p class="color_gray f_s_12 f_w_700">
                                                        10 Aug 03:00PM
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name f_s_16 f_w_700 text_color_5">
                                                        + $ 1254.00
                                                    </h5>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Mới nhất & cập nhật</h3>
                                </div>
                                <div class="single_wrap_input">
                                    <select class="nice_Select2 wide" name="" id="">
                                        <option value="1">Hôm nay</option>
                                        <option value="1">Ngày mai</option>
                                        <option value="1">Hôm qua</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="single_update_news">
                                <h5 class="byer_name f_s_16 f_w_600 color_theme2">
                                    Giảm giá 36% cho các loại giày adidas.
                                </h5>
                                <p class="color_gray f_s_12 f_w_700">
                                    Sorem Kpsum is simply of the printing..
                                </p>
                            </div>
                            <div class="single_update_news">
                                <h5 class="byer_name f_s_16 f_w_600 color_theme2">
                                    Chúng tôi đang sản xuất sản phẩm mới này
                                </h5>
                                <p class="color_gray f_s_12 f_w_700">
                                    Gorem Rpsum is simply text of the printing...
                                </p>
                            </div>
                            <div class="single_update_news">
                                <h5 class="byer_name f_s_16 f_w_600 color_theme2">
                                    Giảm 50% cho các loại khớp nối COVID.
                                </h5>
                                <p class="color_gray f_s_12 f_w_700">
                                    EoremHpsum is simply dummy...
                                </p>
                            </div>
                            <div class="load_more_button text-center mt_30">
                                <a
                                    class="theme_text_btn d-flex align-items-center justify-content-center"
                                    href="#">Tìm hiểu thêm <i class="ti-angle-down f_s_12 ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Thông tin tài khoản</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span
                                            class="dropdown-toggle"
                                            id="dropdownMenuButton"
                                            data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div
                                            class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-eye"></i> Tính năng</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-trash"></i> Xóa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i> Sửa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-printer"></i> In ra</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-download"></i>Tải về</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="monthly_plan_wraper">
                                <div
                                    class="single_plan d-flex align-items-center justify-content-between">
                                    <h5 class="color_theme2 f_s_14 f_w_700 mb-0">
                                        Kế hoạch trong tháng
                                    </h5>
                                    <span class="color_gray2 f_s_16 f_w_700">$25</span>
                                </div>
                                <div
                                    class="single_plan d-flex align-items-center justify-content-between">
                                    <h5 class="color_theme2 f_s_14 f_w_700 mb-0">Thuế VAT</h5>
                                    <span class="color_gray2 f_s_16 f_w_700">$14</span>
                                </div>
                                <div
                                    class="single_plan d-flex align-items-start justify-content-between">
                                    <div>
                                        <h5 class="color_theme2 f_s_14 f_w_700 mb-0">Khác</h5>
                                        <p class="f_s_13 f_w_700">
                                            Netflix và các hóa đơn khác trong tháng này.
                                        </p>
                                    </div>
                                    <span class="color_gray2 f_s_16 f_w_700">$25</span>
                                </div>
                                <div class="total_blance mt_20 mb_10">
                                    <span class="f_s_13 f_w_700 color_gray">Tổng doanh thu</span>
                                    <div
                                        class="total_blance_inner d-flex align-items-center flex-wrap justify-content-between">
                                        <div>
                                            <span class="f_s_40 f_w_700 color_text_3 d-block">$3650</span>
                                            <a class="badge_btn_5" href="#">+1235</a>
                                        </div>
                                        <div>
                                            <div>
                                                <a class="badge_btn_6 mb_15" href="#">Hôm nay</a>
                                            </div>
                                            <div>
                                                <a class="badge_btn_7" href="#">Tuần này</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_20">
                        <div class="date_picker_wrapper">
                            <div class="default-datepicker">
                                <div class="datepicker-here" data-language="en"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Doanh thu toàn cầu hàng đầu
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body pb-0">
                            <div id="world-map-markers" class="dashboard_w_map"></div>
                            <div class="row justify-content-center mt_30">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single_progressbar">
                                                <h6 class="f_s_14 f_w_400">Vietnam</h6>
                                                <div id="bar4" class="barfiller">
                                                    <div class="tipWrap">
                                                        <span class="tip"></span>
                                                    </div>
                                                    <span class="fill" data-percentage="81"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single_progressbar">
                                                <h6>China</h6>
                                                <div id="bar5" class="barfiller">
                                                    <div class="tipWrap">
                                                        <span class="tip"></span>
                                                    </div>
                                                    <span class="fill" data-percentage="58"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single_progressbar">
                                                <h6>Korean</h6>
                                                <div id="bar6" class="barfiller">
                                                    <div class="tipWrap">
                                                        <span class="tip"></span>
                                                    </div>
                                                    <span class="fill" data-percentage="42"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single_progressbar">
                                                <h6>Japan</h6>
                                                <div id="bar7" class="barfiller">
                                                    <div class="tipWrap">
                                                        <span class="tip"></span>
                                                    </div>
                                                    <span class="fill" data-percentage="55"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Hóa đơn hàng tháng
                                    </h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span
                                            class="dropdown-toggle"
                                            id="dropdownMenuButton"
                                            data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div
                                            class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-eye"></i> Tính năng</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-trash"></i> Xóa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i> Sửa</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-printer"></i> In ra</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-download"></i>Tải về</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body QA_section">
                            <div class="QA_table">
                                <!-- table-responsive -->
                                <table class="table lms_table_active2 p-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Khách hàng</th>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Hóa đơn</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/1.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Khách hàng</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">Adidas sport shoes</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="badge_btn_1">chờ xử lí </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/2.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Customer 2</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="badge_btn_2">Hoãn</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/3.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Customer</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="badge_btn_3">Đã giao </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/4.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Customer</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="badge_btn_3">Đã giao </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/5.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Customer</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="badge_btn_2">Hoãn</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/6.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Customer</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="badge_btn_4">Đang xử lí</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Sản phẩm bán chạy</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span
                                            class="dropdown-toggle"
                                            id="dropdownMenuButton"
                                            data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div
                                            class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body QA_section">
                            <div class="QA_table">
                                <!-- table-responsive -->
                                <table class="table lms_table_active2 p-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product 1</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Discount</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Source</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/pro_1.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Product 1</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">$564</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">60</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="text_color_1">Google</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/pro_2.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Product 1</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">$564</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">60</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="text_color_2">Direct</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/pro_3.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Product 1</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">$564</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">60</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="text_color_1">Email</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/pro_4.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Product 1</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">$564</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">60</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="text_color_3">Refferal</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/pro_5.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Product 1</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">$564</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">60</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="text_color_2">Direct</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/customers/pro_6.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_14 f_w_400 color_text_1">Product 1</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_2">$564</td>
                                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_4">60</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="text_color_3">Refferal</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Sản phẩm bán chạy</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span
                                            class="dropdown-toggle"
                                            id="dropdownMenuButton"
                                            data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div
                                            class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body QA_section">
                            <div class="QA_table">
                                <!-- table-responsive -->
                                <table class="table lms_table_active2 p-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Mã của sản phẩm</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Trạng thái  </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_62 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/adidas_sport.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_20 f_w_400 color_text_3">Giày thể thao adidas</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_4">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_3">999.000 Vnd</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="badge_btn_1">354 đã bán</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_62 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/nike_sport.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_20 f_w_400 color_text_3">Giày thể thao nike</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_4">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_3">999.000 Vnd</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="badge_btn_1">354 đã bán</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_62 mr_15 mt-0">
                                                        <img
                                                            class="img-fluid radius_50"
                                                            src="img/adidas_sport.png"
                                                            alt="" />
                                                    </div>
                                                    <span class="f_s_20 f_w_400 color_text_3">Giày sneaker adidas</span>
                                                </div>
                                            </td>
                                            <td class="f_s_14 f_w_400 color_text_4">#DE2548</td>
                                            <td class="f_s_14 f_w_400 color_text_3">999.000 Vnd</td>
                                            <td class="f_s_14 f_w_400 text-end">
                                                <a href="#" class="badge_btn_1">354 đã bán</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="badge_btn_semi mt_30 ml_15">Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Giá trên thị trường</h3>
                                </div>
                                <div class="single_wrap_input">
                                    <select class="nice_Select2 wide" name="" id="">
                                        <option value="1">năm</option>
                                        <option value="1">tháng</option>
                                        <option value="1">ngày</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body QA_section">
                            <div class="radar-chart">
                                <div id="marketchart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer  -->
    @include( 'admin.layout.footer')
    <!--/ footer  -->

    <div id="back-top" style="display: none">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>
</section>
