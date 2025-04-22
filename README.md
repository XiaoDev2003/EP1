> Mỗi khi thêm một thư mục mới hoặc file nào đó cần bổ sung vào cấu trúc và giới thiệu ngắn về nó

---



**EP1**

1. **BACKEND**

   * ...
2. **FRONTEND** : Chứa thành phần giao diện , tài nguyên trang web

   * **package.json** : File quản lý các phụ thuộc và cấu hình của dự án , chứa thông tin về các thư viện được sử 	dụng như React, React DOM, Axios và các công cụ phát triển như ESLint, Vite.
   * **package-lock.json** : File tự động tạo ra để khóa phiên bản chính xác của các phụ thuộc, đảm bảo môi trường phát triển nhất quán.
   * **vite.config.js** : s : File cấu hình cho Vite - công cụ build hiện đại và nhanh chóng cho ứng dụng web. Hiện tại chỉ cấu hình plugin React cơ bản.
   * **eslint.config.js** : File cấu hình cho ESLint - công cụ kiểm tra và chuẩn hóa mã nguồn JavaScript/React.
   * **.gitignore** : Chỉ định các file và thư mục sẽ bị bỏ qua khi commit lên git
   * **index.html** : File HTML gốc của ứng dụng, chứa thẻ `<div id="root"></div>` nơi ứng dụng React sẽ được render.
   * **public /** : Thư mục chứa các tài nguyên tĩnh ( ít thay đổi , duy nhất ) không cần qua xử lý của Vite
   * **main.jsx** : Điểm khởi đầu của ứng dụng React, nơi component App được render vào DOM.
   * **app.jsx** : Component chính của ứng dụng, hiện tại đang trống và cần được phát triển.
   * **app.css** : File CSS cho component App, hiện không có nội dung.
   * **assets** : Chứa các tài nguyên tĩnh được sử dụng trong ứng dụng
   * **components** : Thư mục dành cho các component tái sử dụng.
   * **pages** : Chứa các trang của ứng dụng
   * **routes**

   Trang web cần được tạo dựa trên các yêu cầu sau:

   1. Phần đầu của trang web phải có tiêu đề về thư pháp và cung cấp thông tin ngắn gọn về nguồn gốc của thư pháp, v.v.
   2. Nên có một menu thiết kế tốt với tất cả các phần được liệt kê.
   3. Các phần khác nhau như Thư pháp Truyền thống, Thư pháp Hiện đại, Viết tay & Thiết kế, Thư pháp Hiện đại, v.v. cần được cung cấp.
   4. Phải có phần giải thích về các hình thức và phong cách khác nhau.
   5. Lọc theo kiểu chữ như Ả Rập, Ấn Độ, Hy Lạp, v.v. cần được cung cấp.
   6. Mô tả chính xác về các chữ cái và font chữ phải được thêm vào trang web.
   7. Thêm mục Gallery để xem các phong cách thư pháp khác nhau.
3. **SQL**
4. **TESTS**

   * ...
