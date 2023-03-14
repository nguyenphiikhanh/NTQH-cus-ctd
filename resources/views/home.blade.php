<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang hỗ trợ hoạt động đánh giá, xếp loại đoàn viên</title>
</head>
<style>
Nguyễn Đức Thiện
body{
		padding: 10px 20%;
		background-color: #eceef1;
	}
	.wrap-content{
		border-radius: 4px;
		padding: 16px;
		background-color: #fff;
	}
	table, tr, td, th{
		border: 1px solid #c7c7c7;
		border-collapse: collapse;
		padding: 3px;
	}
	td{
		padding: 5px;
	}
	th{
		background-color: #e5e8ec;
	}
	.t-center{
		text-align: center;
	}
	@media screen and (max-width: 768px) {
	  	body{
			padding: 5px;
		}
	}
</style>
<body>
	<div class="wrap-content">
		<h4>Hệ thống hỗ trợ hoạt động đánh giá, xếp loại đoàn viên</h4>

		<p>Liên kết đến trang đăng nhập của hệ thống: <a href="{{route('login')}}">Truy cập</a></p>

		Tài khoản các tác nhân:
		<table width="100%" style="margin-top: 12px;">
			<tr>
				<th>STT</th>
				<th>Tác nhân</th>
				<th>Tài khoản</th>
				<th>Mật khẩu</th>
			</tr>
			<tr>
				<td class="t-center">1</td>
				<td>Bí thư LCĐ khoa</td>
				<td>khoacntt</td>
				<td class="t-center">1</td>
			</tr>
			<tr>
				<td class="t-center">2</td>
				<td>Bí thư CĐ lớp</td>
				<td>695105060</td>
				<td class="t-center">1</td>
			</tr>
			<tr>
				<td class="t-center">3</td>
				<td>Đoàn viên</td>
				<td>695105043</td>
				<td class="t-center">1</td>
			</tr>
		</table>

		<p>Trình tự:</p>
		<ul>
			<li>Bí thư LCĐ Khoa tạo ra hoạt động (Ví dụ hoạt động lớp học Đoàn viên ưu tú…). Các hoạt động này gắn liền với các tiêu chí trong phiếu đánh giá và xếp loại đoàn viên hướng dẫn</li>
			<li>Bí thư LCĐ Khoa: Giao các nhiệm vụ từ hoạt động vừa tạo xuống các chi đoàn thông qua bí thư chi đoàn</li>
			<li>Các nhiệm vụ giao xuống có thể là thông báo (không yêu cầu phản hồi) hoặc lấy danh sách người tham dự, thí sinh (Có yêu cầu phản hồi)</li>
			<li>Bí thư CĐ nhận được nhiệm vụ từ LCĐ Khoa:</li>
			<ul>
				<li>Để hoàn thành nhiệm vụ, Bí thư CĐ phải chuyển tiếp thông báo hoặc gửi danh sách (tùy thuộc vào yê cầu của nhiệm vụ)</li>
				<li>Khi Bí thư CĐ cử danh sách người tham dự sẽ có quyền điểm danh hoặc kiểm duyệt minh chứng của đoàn viên cung cấp</li>
			</ul>
			<li>Đoàn viên:</li>
			<ul>
				<li>Nhận nhiệm vụ từ bí thư chi đoàn</li>
				<li>Được điểm danh khi tham gia nhiệm vụ hoặc gửi minh chứng liên quan tới nhiệm vụ</li>
			</ul>
			<li>Minh chứng được gửi từ đoàn viên ở các trạng thái:</li>
			<ul>
				<li>Chờ duyệt</li>
				<li>Từ chối (Không được duyệt và xác nhận không hoàn thành nhiệm vụ. Đoàn viên có thể gửi lại minh chứng nếu cần thiết)</li>
				<li>Xác nhận (Được duyệt và xác nhận hoàn thành nhiệm vụ)</li>
			</ul>
		</ul>
	</div>
</body>
</html>
