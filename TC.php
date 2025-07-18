<?php
session_start();
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: DTN.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đoàn Thanh Niên PTIT</title>
  <link rel="stylesheet" href="./bootstrap-3.4.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></button>
            <a class="navbar-brand">
              <img src="Picture_used/logoDTN_PTIT.png" alt="Logo Đoàn">
              <h1>ĐOÀN THANH NIÊN</h1>
            </a>
          </div>
    
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="DTN.php">Trang chủ</a></li>
              <li><a href="TC.php">Cơ cấu tổ chức Đoàn</a></li>
              <li><a href="QLDV.php">Quản lý Đoàn viên</a></li>
              <li class="dropdown">
                <a href="#" class="login-btn dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle"></i> <?php echo isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] ? htmlspecialchars($_SESSION['username']) : 'Đăng nhập'; ?>
                </a>
                <ul class="dropdown-menu">
                  <?php if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']): ?>
                    <li class="user-info">
                      <p><strong>Xin chào, <?php echo htmlspecialchars($_SESSION['username']); ?>!</strong></p>
                    </li>
                    <li><a href="#" id="showProfileInfo"><i class="fa fa-id-card"></i> Thông tin cá nhân</a></li>
                    <li><a href="?logout=1"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                  <?php else: ?>
                    <li class="user-info">
                      <p><strong>Xin chào!</strong></p>
                      <p>Vui lòng đăng nhập để tiếp tục</p>
                    </li>
                    <li><a href="login.php"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
                  <?php endif; ?>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

  <!-- Main Content -->
  <section class="content-section">
    <div class="container">
      <h2 class="section-title">CƠ CẤU TỔ CHỨC ĐOÀN THANH NIÊN</h2>
      
      <!-- Tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#ban-chap-hanh" aria-controls="ban-chap-hanh" role="tab" data-toggle="tab">Ban Chấp Hành Đoàn</a></li>
        <li role="presentation"><a href="#bi-thu" aria-controls="bi-thu" role="tab" data-toggle="tab">Bí Thư Các Liên Chi Đoàn</a></li>
      </ul>

      <!-- Tab Content -->
      <div class="tab-content">
        <!-- Ban Chấp Hành Tab -->
        <div role="tabpanel" class="tab-pane active" id="ban-chap-hanh">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ và tên</th>
                  <th>Chức vụ nhiệm kỳ IX</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Đồng chí Chung Hải Bằng</td>
                  <td>Bí thư Đoàn Học viện</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Đồng chí Trần Thanh Trà</td>
                  <td>Phó Bí thư Đoàn Học viện<br>Chủ nhiệm UBKT<br>Bí thư Đoàn Học viện cơ sở</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Đồng chí Nguyễn Văn Tiến</td>
                  <td>Phó Bí thư Đoàn Học viện<br>Trưởng ban Đào tạo và Khoa học công nghệ Đoàn Học viện</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Đồng chí Nguyễn Đình Sơn</td>
                  <td>Phó Bí thư Đoàn Học viện<br>Trưởng Ban Tuyên giáo Đoàn Học viện</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Đồng chí Vũ Thùy Linh</td>
                  <td>Ủy viên Ban thường vụ<br>Trưởng ban Phong trào Đoàn Học viện<br>Bí thư Liên chi đoàn khoa Đa phương tiện</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Đồng chí Hà Mạnh Dũng</td>
                  <td>Ủy viên Ban thường vụ</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Đồng chí Phạm Thanh Huyền</td>
                  <td>Uỷ viên Ban thường vụ<br>Bí thư Liên chi Đoàn Khoa Kỹ thuật điện tử 1</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Đồng chí Bạch Hồng Vinh</td>
                  <td>Uỷ viên Ban chấp hành<br>Chánh Văn phòng Đoàn Học viện</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Đồng chí Trần Thị Chuyền</td>
                  <td>Ủy viên Ban chấp hành</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Đồng chí Trần Quang Đại</td>
                  <td>Uỷ viên Ban Chấp hành<br>Bí thư Chi đoàn Viện Khoa học kỹ thuật Bưu điện</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Đồng chí Ngô Tiến Đức</td>
                  <td>Ủy viên Ban chấp hành</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Đồng chí Nguyễn Hoàng Giang</td>
                  <td>Uỷ viên Ban Chấp hành<br>Bí thư Liên chi đoàn Viện Kinh tế Bưu điện</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Đồng chí Hứa Thị Minh Hải</td>
                  <td>Uỷ viên Ban Chấp hành<br>Phó bí thư Liên chi đoàn Tài chính kế toán 1</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Đồng chí Nguyễn Xuân Hiệp</td>
                  <td>Uỷ viên Ban Chấp hành<br>Phó bí thư Đoàn Học viện cơ sở</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Đồng chí Trần Duy Hiếu</td>
                  <td>Uỷ viên Ban Chấp hành<br>Bí thư Chi đoàn Viện CDiT</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>Đồng chí Đỗ Quang Huy</td>
                  <td>Uỷ viên Ban Chấp hành</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td>Đồng chí Phùng Hà Châu</td>
                  <td>Ủy viên Ban chấp hành</td>
                </tr>
                <tr>
                  <td>18</td>
                  <td>Đồng chí Vũ Minh Huyền</td>
                  <td>Uỷ viên Ban Chấp hành<br>Bí thư Liên chi đoàn Khoa Quản trị Kinh doanh 1</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td>Đồng chí Vũ Quang Minh</td>
                  <td>Ủy viên Ban chấp hành</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td>Đồng chí Nguyễn Hoàng Nghĩa</td>
                  <td>Uỷ viên Ban Chấp hành<br>Chủ nhiệm CLB Văn hoá nghệ thuật</td>
                </tr>
                <tr>
                  <td>21</td>
                  <td>Đồng chí Nguyễn Thị Kim Nguyên</td>
                  <td>Uỷ viên Ban Chấp hành<br>Đội trưởng Đội Thanh niên vận động hiến máu</td>
                </tr>
                <tr>
                  <td>22</td>
                  <td>Đồng chí Nguyễn Đình Hồng Phúc</td>
                  <td>Uỷ viên Ban Chấp hành</td>
                </tr>
                <tr>
                  <td>23</td>
                  <td>Đồng chí Nguyễn Thị Tâm</td>
                  <td>Uỷ viên Ban Chấp hành<br>Phó chủ nhiệm CLB MC</td>
                </tr>
                <tr>
                  <td>24</td>
                  <td>Đồng chí Nguyễn Danh Toản</td>
                  <td>Uỷ viên Ban Chấp hành<br>Phó chủ nhiệm CLB Sinh viên tình nguyện</td>
                </tr>
                <tr>
                  <td>25</td>
                  <td>Đồng chí Nguyễn Phú Trung</td>
                  <td>Uỷ viên Ban Chấp hành</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <!-- Bí Thư Tab -->
        <div role="tabpanel" class="tab-pane" id="bi-thu">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>TT</th>
                  <th>Liên chi Đoàn</th>
                  <th>Họ và tên</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Khoa Công nghệ thông tin 1</td>
                  <td>Hà Mạnh Dũng</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Khoa Đa phương tiện</td>
                  <td>Vũ Thuỳ Linh</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Khoa Viễn thông 1</td>
                  <td>Đỗ Quang Huy</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Khoa Viện Kinh tế Bưu điện</td>
                  <td>Nguyễn Hoàng Giang</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Khoa Kỹ thuật điện tử 1</td>
                  <td>Phạm Thanh Huyền</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Khoa Quản trị kinh doanh 1</td>
                  <td>Vũ Minh Huyền</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Khoa Tài chính kế toán 1</td>
                  <td>Nguyễn Thị Quỳnh Nhi</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Viện Khoa học Kỹ thuật Bưu điện</td>
                  <td>Trần Quang Đại</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Viện CDiT</td>
                  <td>Trần Duy Hiếu</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4>ĐOÀN THANH NIÊN</h4>
          <p>Đoàn Thanh niên Cộng sản Hồ Chí Minh là tổ chức chính trị - xã hội của thanh niên Việt Nam do Đảng Cộng sản Việt Nam và Chủ tịch Hồ Chí Minh sáng lập, lãnh đạo và rèn luyện.</p>
        </div>
        <div class="col-md-6">
          <h4>THÔNG TIN LIÊN HỆ</h4>
          <div class="footer-contact">
            <p><i class="fa fa-map-marker"></i> Km10, Đường Nguyễn Trãi, Quận Hà Đông, Hà Nội</p>
            <p><i class="fa fa-phone"></i> (024) 3854 5678</p>
            <p><i class="fa fa-envelope"></i> doanthanhnien@ptit.edu.vn</p>
            <p><i class="fa fa-globe"></i> https://ptit.edu.vn/sinh-vien/doan-thanh-nien/</p>
          </div>
        </div>
      </div>
      <div class="text-center" style="margin-top: 20px; padding-top: 10px; border-top: 1px solid rgba(255,255,255,0.2);">
        <p>© 2025 Đoàn Thanh niên PTIT. Tất cả quyền được bảo lưu.</p>
      </div>
    </div>
  </footer>

  <!-- jQuery and Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!-- Popup xem/chỉnh sửa thông tin cá nhân -->
  <div id="profileInfoModal" class="modal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.4);">
    <div style="background:#fff;max-width:480px;margin:60px auto;padding:32px;border-radius:16px;box-shadow:0 4px 24px rgba(30,136,229,0.10);position:relative;">
      <h2 style="color:#1e88e5;text-align:center;margin-bottom:28px;">Thông tin cá nhân</h2>
      <form id="profileInfoForm">
        <div id="profileInfoFields"></div>
        <button type="submit" class="btn btn-success" style="width:100%;border-radius:8px;">Lưu thông tin</button>
        <button type="button" onclick="document.getElementById('profileInfoModal').style.display='none'" class="btn btn-primary" style="margin:18px auto 0 auto;display:block;border-radius:8px;">Đóng</button>
      </form>
    </div>
  </div>
  <script>
    //tạo yêu cầu lấy thông tin cá nhân từ CSDL và gửi đi bằng AJAX
  document.getElementById('showProfileInfo')?.addEventListener('click', async function(e) {
    e.preventDefault();
    const res = await fetch('profile.php?ajax=1');
    if (res.ok) {
      const data = await res.json();
      let html = '';
      html += `<label><b>Tên tài khoản:</b> <input type='text' name='username' value='${data.username}' readonly class='form-control' style='margin-bottom:10px;border-radius:8px;'></label>`;
      html += `<label><b>Lớp:</b> <input type='text' name='class' value='${data.class||''}' class='form-control' style='margin-bottom:10px;border-radius:8px;'></label>`;
      html += `<label><b>Số điện thoại:</b> <input type='text' name='phone' value='${data.phone||''}' class='form-control' style='margin-bottom:10px;border-radius:8px;'></label>`;
      html += `<label><b>Địa chỉ:</b> <input type='text' name='address' value='${data.address||''}' class='form-control' style='margin-bottom:10px;border-radius:8px;'></label>`;
      html += `<label><b>Ngày sinh:</b> <input type='date' name='birthday' value='${data.birthday||''}' class='form-control' style='margin-bottom:10px;border-radius:8px;'></label>`;
      html += `<label><b>Quê quán:</b> <input type='text' name='hometown' value='${data.hometown||''}' class='form-control' style='margin-bottom:10px;border-radius:8px;'></label>`;
      html += `<label><b>Ngày vào đoàn:</b> <input type='date' name='join_date' value='${data.join_date||''}' class='form-control' style='margin-bottom:10px;border-radius:8px;'></label>`;
      document.getElementById('profileInfoFields').innerHTML = html;
      document.getElementById('profileInfoModal').style.display = 'block';
    }
  });
  // ko cho gửi dữ liệu bằng tải lại trang web, xác định dữ liệu và đóng gói để gửi bằng AJAX
  document.getElementById('profileInfoForm').onsubmit = async function(e) {
    e.preventDefault(); 
    const form = e.target;
    const data = new FormData(form);
    const res = await fetch('profile.php', {method:'POST', body:data}); 
      document.getElementById('profileInfoModal').style.display = 'none';
      location.reload();
    }
  };
  </script>
</body>
</html>
