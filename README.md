# CV Online - Và Ngọc Khánh

Dự án CV Online cá nhân được xây dựng bằng **HTML5, CSS3, Bootstrap 5, PHP và JavaScript**, thiết kế giao diện chuẩn phong cách hiện đại bám sát mẫu thực tế, responsive trên mọi thiết bị và hỗ trợ xuất bản in / PDF chuẩn A4.

## 🚀 Công Nghệ Sử Dụng

- **PHP**: Tách biệt dữ liệu và giao diện, dễ dàng chỉnh sửa thông tin.
- **Bootstrap 5**: Hệ thống lưới (Grid system), hỗ trợ hiển thị tối ưu trên Mobile, Tablet, Laptop và Desktop.
- **CSS3 Tùy Chỉnh (`style.css`)**: Màu sắc, tỉ lệ, hiệu ứng và định dạng in ấn (`@media print`).
- **Font Awesome 6**: Hệ thống icon trực quan, sắc nét.
- **JavaScript**: Tiện ích in CV và tương tác trang.

## 📂 Cấu Trúc Thư Mục

```text
cv-online/
│
├── data.php           # Quản lý toàn bộ thông tin cá nhân dạng mảng PHP
├── header.php         # Khai báo cấu trúc đầu trang, nạp CSS & Font
├── footer.php         # Chân trang, nạp Bootstrap 5 script và script.js
├── index.php          # Trang hiển thị giao diện CV chính
├── style.css          # File định dạng giao diện, màu sắc, responsive & in A4
├── script.js          # File kịch bản tiện ích JavaScript
├── README.md          # Tài liệu hướng dẫn sử dụng
│
└── images/
    └── avatar.png     # Ảnh đại diện cá nhân
```

## 🛠 Hướng Dẫn Chạy Trên XAMPP

1. Sao chép thư mục dự án vào thư mục web root của XAMPP:
   - Thư mục đích: `C:\xampp\htdocs\cv-online`
2. Mở **XAMPP Control Panel** và nhấn **Start** dịch vụ **Apache**.
3. Mở trình duyệt web và truy cập:
   ```text
   http://localhost/cv-online/
   ```

## 🖨 Tính Năng In Ấn & Xuất PDF

- Bấm nút **"In CV / Lưu PDF"** ở đầu trang hoặc dùng phím tắt `Ctrl + P`.
- Chọn đích đến là **Save as PDF** (Lưu dưới dạng PDF).
- Giao diện đã được tối ưu chuẩn khổ giấy A4, ẩn các nút bấm không cần thiết và giữ nguyên màu sắc nền.

## ✏️ Hướng Dẫn Chỉnh Sửa Thông Tin

- **Đổi thông tin cá nhân**: Mở file `data.php` và thay đổi các giá trị trong mảng `$cv` (Họ tên, SĐT, Email, kỹ năng, kinh nghiệm, học vấn,...).
- **Đổi ảnh đại diện**: Thay thế file `avatar.png` trong thư mục `images/` bằng ảnh của bạn.
