<div class="box-search">
<form role="form" action="{{ route('invests-manage') }}?continue=true" method="post" name="frms" id="frms">
{{ csrf_field() }}
    <div class="filter-timeline">
      <div class="form-row">
        <div class="form-group">
          <label for="searchprefix">Loại blog:</label>
          <select class="form-control select2" name="searchField" id="searchprefix">
            <option value=''>Chọn loại blog</option>
            @foreach ($newstypes as $key => $value)
              @if ($searchField != '' and $key == $searchField)
                <option value="{{ $key }}" selected>{{ $value }}</option>
              @else
                <option value="{{ $key }}">{{ $value }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="searchValue">Nội dung tìm kiếm:</label>
          <input type="text" class="form-control" name="searchValue" id="searchValue" value="{{ $searchValue }}"
            placeholder="Nhập nội dung tìm kiếm">
        </div>
      </div>
    </div>
    <div class="control">
      <button type="submit" class="btn btn-primary btn-search">
        <img class="icon" src="{{ asset('img/icon-search.svg') }}" alt="">
        Tìm kiếm
      </button>
    </div>
</form>
</div>


