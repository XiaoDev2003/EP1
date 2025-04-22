# ĐỒ ÁN 1

---

## 1. Giới thiệu dự án

### 1.1 Thành viên tham gia

### 1.2 Công nghệ sử dụng

### 1.3 Cấu trúc dự án

#### 1.3.1 Frontend

| File              | Folder     | Mô tả                                                                                                                                                                                                     |
| ----------------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
|                   | root       | Chứa thành phần giao diện client , tài nguyên chính của trang web                                                                                                                                   |
| package.json      |            | File quản lý các phụ thuộc và cấu hình của dự án , chứa thông tin về các thư viện được sử 	dụng như React,<br /> React DOM, Axios và các công cụ phát triển như ESLint, Vite. |
| package-lock.json |            | File tự động tạo ra để khóa phiên bản chính xác của các phụ thuộc, đảm bảo môi trường phát triển nhất quán.                                                                        |
| vite.config.js    |            | File cấu hình cho Vite - công cụ build hiện đại và nhanh chóng cho ứng dụng web.                                                                                                                 |
| eslint.config.js  |            | File cấu hình cho ESLint - công cụ kiểm tra và chuẩn hóa mã nguồn JavaScript/React.                                                                                                               |
| .gitignore        |            | Chỉ định các file và thư mục sẽ bị bỏ qua khi commit lên git                                                                                                                                     |
| index.html        |            | File HTML gốc của ứng dụng, chứa thẻ `<div id="root"></div>` nơi ứng dụng React sẽ được render.                                                                                              |
|                   | public /   | Thư mục chứa các tài nguyên tĩnh ( ít thay đổi , duy nhất ) không cần qua xử lý của Vite                                                                                                    |
|                   | main.jsx   | Điểm khởi đầu của ứng dụng React, nơi component App được render vào DOM.                                                                                                                       |
| app.jsx           |            | Component chính của ứng dụng, hiện tại đang trống và cần được phát triển.                                                                                                                    |
| app.css           |            | File CSS cho component App, hiện không có nội dung.                                                                                                                                                     |
|                   | components | Thư mục dành cho các component tái sử dụng.                                                                                                                                                          |
|                   | pages      | Chứa các trang của ứng dụng                                                                                                                                                                            |
| routes            |            |                                                                                                                                                                                                             |

#### 1.3.2 Backend

#### 1.3.3 SQL

#### 1.3.4 Tests
