@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/register.css') }}">
@endsection

@section('content')
  <div class="section section-register register">
    <div class="container">
      <div class="wrap">
        <form action="{{ route('customers-addCustomer') }}?continue=true" id="frm" method="post"
          class="register-form">
          {{ csrf_field() }}
          <div class="register-form__info">
            <div class="register-form__header">
              <img class="img-fluid logo" src="{{ asset('img/web/logo.svg') }}" alt="">
              <h6>THÔNG TIN CÁ NHÂN</h6>
            </div>
            <div class="register-form__body">
              <div class="form-group">
                <label class="form-label" for="fullname">Họ và tên <span>*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname"
                  placeholder="Họ và tên *" value="{{ old('fullname') }}" required>
                  @if ($errors->has('fullname'))
                    <span class="text-danger">{{ $errors->first('fullname') }}</span>
                  @endif
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label class="form-label" for="birthday">Ngày sinh <span>*</span></label>
                  <input type="date" class="form-control" id="birthday" name="birthday"
                    placeholder="Ngày sinh *" value="{{ old('birthday') }}" required>
                  @if ($errors->has('birthday'))
                    <span class="text-danger">{{ $errors->first('birthday') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label class="form-label" for="gender">Giới tính <span>*</span></label>
                  <select class="form-select" id="gender" name="gender" required>
                    <option selected>Chọn giới tính</option>
                    @foreach ($gendertype as $key => $value)
                      @if ($key == old('gender'))
                        <option value="{{ $key }}" selected>
                          {{ $value }}</option>
                      @else
                        <option value="{{ $key }}">{{ $value }}
                        </option>
                      @endif
                    @endforeach
                  </select>
                  @if ($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="form-label" for="address">Địa chỉ <span>*</span></label>
                <input type="text" class="form-control" id="address" name="address"
                  placeholder="Địa chỉ *" value="{{ old('address') }}" required>
                  @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                  @endif
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label class="form-label" for="phone">Điện thoại <span>*</span></label>
                  <input type="text" class="form-control" id="phone" name="phone"
                    placeholder="Điện thoại *" value="{{ old('phone') }}" required>
                  @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label class="form-label" for="email">Email <span>*</span></label>
                  <input type="email" class="form-control" id="email" name="email"
                    placeholder="Email *" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label class="form-label" for="contactname">Người liên hệ khi cần</label>
                  <input type="text" class="form-control" id="contactname" name="contactname"
                    value="{{ old('contactname') }}" placeholder="Người liên hệ khi cần">
                </div>
                <div class="form-group">
                  <label class="form-label" for="contactphone">Điện thoại</label>
                  <input type="text" class="form-control" id="contactphone" name="contactphone"
                    value="{{ old('contactphone') }}" placeholder="Điện thoại">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label" for="customertype">Nhóm khách hàng <span>*</span></label>
                <select class="form-select" id="customertype" name="customertype" required>
                  <option selected>Chọn nhóm khách hàng</option>
                  @foreach ($customertype as $key => $value)
                    @if ($key == old('customertype'))
                      <option value="{{ $key }}" selected>{{ $value }}</option>
                    @else
                      <option value="{{ $key }}">{{ $value }}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label class="form-label" for="typereport">Thông tin sản phẩm <span>*</span></label>
                <select class="form-select" id="typereport" name="typereport"
                  onchange='onChangeSelect();' required>
                  @foreach ($service_product as $item)
                    @if ($item->id == old('typereport') or $item->id == $typereport)
                      @if ($item->id == 4)
                        <option value="{{ $item->id }}" selected>
                          {{ $item->name }}</option>
                      @else
                        <option value="{{ $item->id }}" selected>
                          {{ $item->name }}
                          ({{ formatNumber($item->price, 1, 0, 1) }} đồng/tháng)
                        </option>
                      @endif
                    @else
                      @if ($item->id == 4)
                        <option value="{{ $item->id }}">{{ $item->name }}
                        </option>
                      @else
                        <option value="{{ $item->id }}">{{ $item->name }}
                          ({{ formatNumber($item->price, 1, 0, 1) }} đồng/tháng)
                        </option>
                      @endif
                    @endif
                  @endforeach
                </select>
              </div>
              <div id="producttypelabel" class="form-group"  style="">
                <label class="form-label" for="producttype">Thời gian gói <span>*</span></label>
                <select class="form-select" id="producttype" name="producttype"
                  onchange='onChangeSelect();' required>
                  @foreach ($producttypes as $key => $value)
                    @if ($key > 0)
                      @if ($key == old('producttype') or $key == $producttype)
                        <option value="{{ $key }}" selected>
                          {{ $value['month'] }} tháng (giảm
                          {{ $value['discount'] }}%)</option>
                      @else
                        <option value="{{ $key }}">{{ $value['month'] }}
                          tháng (giảm {{ $value['discount'] }}%)</option>
                      @endif
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="form-group">Số tiền thanh toán: <span id="amountlabel"></span> đồng.
              </div>
            </div>
          </div>

          {{-- Tạm ẩn --}}
          {{-- <div class="register-form__service">
            <div class="register-form__header">
              <h6>DỊCH VỤ ĐĂNG KÝ</h6>
            </div>
            <div class="register-form__body">
              <div class="register-service__item">
                <div class="service-radio">
                  <input class="form-check-input" type="radio" name="serviceChecked"
                    id="free">
                  <label class="form-check-label" for="free"></label>
                </div>
                <p class="service-name">Miễn phí</p>
                <div class="service-info">
                  <small class="user-type"></small>
                  <p class="amount">0</p>
                  <small class="unit">đồng/tháng</small>
                </div>
                <select class="form-select service-option" disabled>
                  <option selected>Chọn gói thời gian</option>
                  <option value="">1 tháng</option>
                  <option value="">3 tháng</option>
                  <option value="">6 tháng</option>
                  <option value="">12 tháng</option>
                </select>
              </div>

              <div class="register-service__item">
                <div class="service-radio">
                  <input class="form-check-input" type="radio" name="serviceChecked"
                    id="basic">
                  <label class="form-check-label" for="basic"></label>
                </div>
                <p class="service-name">Basic</p>
                <div class="service-info">
                  <small class="user-type"></small>
                  <p class="amount">99.000</p>
                  <small class="unit">đồng/tháng</small>
                </div>
                <select class="form-select service-option">
                  <option selected>Chọn gói thời gian</option>
                  <option value="">1 tháng</option>
                  <option value="">3 tháng</option>
                  <option value="">6 tháng</option>
                  <option value="">12 tháng</option>
                </select>
              </div>

              <div class="register-service__item">
                <div class="service-radio">
                  <input class="form-check-input" type="radio" name="serviceChecked"
                    id="standard">
                  <label class="form-check-label" for="standard"></label>
                </div>
                <p class="service-name">Standard</p>
                <div class="service-info">
                  <small class="user-type">Admin</small>
                  <p class="amount">299.000</p>
                  <small class="unit">đồng/tháng</small>
                </div>
                <select class="form-select service-option">
                  <option selected>Chọn gói thời gian</option>
                  <option value="">1 tháng</option>
                  <option value="">3 tháng</option>
                  <option value="">6 tháng</option>
                  <option value="">12 tháng</option>
                </select>
              </div>

              <div class="register-service__item">
                <div class="service-radio">
                  <input class="form-check-input" type="radio" name="serviceChecked"
                    id="premium">
                  <label class="form-check-label" for="premium"></label>
                </div>
                <p class="service-name">Premium</p>
                <div class="service-info">
                  <small class="user-type"></small>
                  <p class="amount">499.000</p>
                  <small class="unit">đồng/tháng</small>
                </div>
                <select class="form-select service-option">
                  <option selected>Chọn gói thời gian</option>
                  <option value="">1 tháng</option>
                  <option value="">3 tháng</option>
                  <option value="">6 tháng</option>
                  <option value="">12 tháng</option>
                </select>
              </div>
            </div>
          </div> --}}
          {{-- Tạm ẩn --}}
          <button type="submit" class="btn btn-second btn-size-lg btn-register">Đăng ký</button>
        </form>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
  <script type="text/javascript">
    var dataProduct = [];
    @foreach ($service_product as $item)
      dataProduct[{{ $item['id'] }}] = ['{{ $item['name'] }}', {{ $item['price'] }}];
    @endforeach
    var dataProductType = [];
    @foreach ($producttypes as $key => $value)
      dataProductType[{{ $key }}] = [{{ $value['month'] }}, {{ $value['discount'] }}];
    @endforeach

    function onChangeSelect() {
      if (document.getElementById("typereport").value == 4) {
        document.getElementById("producttypelabel").style.display = 'none';
        document.getElementById("amountlabel").innerHTML = 0;        
      } else {
        document.getElementById("producttypelabel").style.display = 'block';

        typereport_id = document.getElementById("typereport").value;
        producttype_id = document.getElementById("producttype").value;
        price = dataProduct[typereport_id][1];
        month = dataProductType[producttype_id][0];
        discount = dataProductType[producttype_id][1];

        amount = (price - (price * discount / 100)) * month;
        document.getElementById("amountlabel").innerHTML = formatCurrency(amount);
      }
    }

    if (document.getElementById("typereport").value == 4) {
      document.getElementById("producttypelabel").style.display = 'none';
      document.getElementById("amountlabel").innerHTML = 0;
    } else {
      document.getElementById("producttypelabel").style.display = 'block';

      typereport_id = document.getElementById("typereport").value;
      producttype_id = document.getElementById("producttype").value;
      price = dataProduct[typereport_id][1];
      month = dataProductType[producttype_id][0];
      discount = dataProductType[producttype_id][1];

      amount = (price - (price * discount / 100)) * month;
      document.getElementById("amountlabel").innerHTML = formatCurrency(amount);
    }
  </script>
@endsection
