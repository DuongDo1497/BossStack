<form role="form" action="{{ route('customers-register') }}" method="post" id="frm">
  {{ csrf_field() }}
  <input type='hidden' name='typereport' value=''>
  <div class="row">
    <div class="col-xl-3 col-md-3 col-12 mb-md-3">
      <div class="card card-price-list">
        <div class="card-header">
          <p class="name"><b>Mở Tài khoản</b></p>
          <p class="percent"><span style="font-size: 35px; color: #089E4D;">Miễn Phí</span></p>
        </div>
        <div class="card-body">
          <ul>
            <li>Tính số tiền nghỉ hưu</li>
            <li>Quản lý chi tiêu hằng ngày</li>
            <li>Quản lý thu nhập hằng ngày</li>
            <li>Theo dõi các khoản nợ</li>
            <li>Quản lý tài sản hiện có</li>
            <li>Hỗ trợ trong giờ hành chính</li>
            <li>Miễn phí cập nhật tính năng mới</li>
          </ul>
        </div>
        <div class="card-footer">
          <a onclick="processReports('frm', '4')" class="btn btn-primary btn-buy"
            style="transform: translate(0, calc(100% - 4px));">Mở tài khoản</a>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-3 col-12 mb-md-3">
      <div class="card card-price-list">
        <div class="card-header">
          <p class="name"><b>Gói Basic</b></p>
          <p class="percent"><span>99.000</span><br>đồng/tháng</p>
        </div>
        <div class="card-body">
          <ul>
            <li>Sử dụng toàn bộ tính năng sản phẩm Miễn phí</li>
            <li>Xây dựng mục tiêu dòng tiền xuyên suốt</li>
            <li>Triển khai việc quản lý tiền và dòng tiền</li>
            <li>Bóc tách dòng tiền cá nhân và đầu tư kinh doanh</li>
            <li>Theo dõi, đánh giá dòng tiền sau bóc tách</li>
            <li>Hỗ trợ trong giờ hành chính</li>
            <li>Miễn phí cập nhật tính năng mới</li>
          </ul>
        </div>
        <div class="card-footer">
          <select class="form-control select2" name="producttypes_1">
            <option value="0">Chọn gói thời gian</option>
            @foreach ($producttypes as $key => $value)
              @if ($key > 0)
                @if ($key == old('producttypes_1'))
                  <option value="{{ $key }}" selected>{{ $value['month'] }} tháng (giảm
                    {{ $value['discount'] }}%)</option>
                @else
                  <option value="{{ $key }}">{{ $value['month'] }} tháng (giảm
                    {{ $value['discount'] }}%)</option>
                @endif
              @endif
            @endforeach
          </select>
          <a onclick="processReports('frm', '1')" class="btn btn-primary btn-buy">Mua ngay</a>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-3 col-12">
      <div class="card card-price-list">
        <div class="card-header">
          <p class="name"><b>Gói Standard</b></p>
          <p class="percent"><span>299.000</span><br>đồng/tháng</p>
          <!-- <p class="discount">
                    <span><small>715.000</small></span>
                    <span><small style="padding-left: 10px;"><font color="red"><b>-30%</b></font></small></span>
                </p> -->
        </div>
        <div class="card-body">
          <ul>
            <li>Sử dụng toàn bộ tính năng sản phẩm Basic</li>
            <li>Quyền admin và tạo các user con cho các thành viên</li>
            <li>Phân bổ các tính năng phần mềm cho các thành viên</li>
            <li>Theo dõi, đánh giá việc quản lý tiền và dòng tiền các thành viên</li>
            <li>Điều chỉnh theo biến động các dòng tiền của các thành viên linh hoạt</li>
            <li>Hỗ trợ trong giờ hành chính</li>
            <li>Miễn phí cập nhật tính năng mới</li>
          </ul>
        </div>
        <div class="card-footer">
          <select class="form-control select2" name="producttypes_2">
            <option value="0">Chọn gói thời gian</option>
            @foreach ($producttypes as $key => $value)
              @if ($key > 0)
                @if ($key == old('producttypes_2'))
                  <option value="{{ $key }}" selected>{{ $value['month'] }} tháng (giảm
                    {{ $value['discount'] }}%)</option>
                @else
                  <option value="{{ $key }}">{{ $value['month'] }} tháng (giảm
                    {{ $value['discount'] }}%)</option>
                @endif
              @endif
            @endforeach
          </select>
          <a onclick="processReports('frm', '2')" class="btn btn-primary btn-buy">Mua ngay</a>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-3 col-12">
      <div class="card card-price-list">
        <div class="card-header">
          <p class="name"><b>Gói Premium</b></p>
          <p class="percent"><span>499.000</span><br>đồng/tháng</p>
          <!-- <p class="discount">
                    <span><small>8.580.000</small></span>
                    <span><small style="padding-left: 10px;"><font color="red"><b>-43%</b></font></small></span>
                </p> -->
        </div>
        <div class="card-body">
          <ul>
            <li>Sử dụng toàn bộ tính năng sản phẩm Basic</li>
            <li>Sử dụng toàn bộ tính năng sản phẩm Standard</li>
            <li>Phân bổ dòng tiền đầu tư hằng tháng theo phần mềm</li>
            <li>Theo dõi khuyến nghị đầu tư chứng khoán Việt Nam</li>
            <li>Giảm 50% khi đăng ký gói thời gian 12 tháng</li>
            <li>Hỗ trợ trong giờ hành chính</li>
            <li>Miễn phí cập nhật tính năng mới</li>
          </ul>
        </div>
        <div class="card-footer">
          <select class="form-control select2" name="producttypes_3">
            <option value="0">Chọn gói thời gian</option>
            @foreach ($producttypes as $key => $value)
              @if ($key > 0)
                @if ($key == old('producttypes_3'))
                  <option value="{{ $key }}" selected>{{ $value['month'] }} tháng (giảm
                    {{ $value['discount'] }}%)</option>
                @else
                  <option value="{{ $key }}">{{ $value['month'] }} tháng (giảm
                    {{ $value['discount'] }}%)</option>
                @endif
              @endif
            @endforeach
          </select>
          <a onclick="processReports('frm', '3')" class="btn btn-primary btn-buy">Mua ngay</a>
        </div>
      </div>
    </div>
  </div>
</form>
