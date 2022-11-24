<h1>DANH SÁCH KHÁCH HÀNG ĐĂNG KÝ KHÓA HỌC</h1>
<br>
<table>
	<tbody>
		<tr>
			<th>STT</th>
			<th>Tên Khách hàng</th>
			<th>Email</th>
            <th>Điện thoại</th>
			<th>Ngày đăng ký</th>
            <th>Công ty</th>
            <th>Quy mô</th>
            <th>Chức vụ</th>
            <th>Khóa học</th>
            <th>Giải pháp</th>
		</tr>
        @php
            $i = 1;
        @endphp                        
		@foreach($customers as $customer)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $customer['fullname'] }}</td>
			<td>{{ $customer['email'] }}</td>
            <td>{{ $customer['phone'] }}</td>
			<td>{{ ConvertSQLDate($customer['registerdate']) }}</td>
            <td>{{ $customer['content'] }}</td>
            <td>{{ $customer['companytype'] }}</td>
            <td>{{ $customer['title'] }}</td>
            <td>{{ $customer['course'] }}</td>
            <td>{{ $customer['solution'] }}</td>
		</tr>
		@endforeach
	</tbody>
</table>