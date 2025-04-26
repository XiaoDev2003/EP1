import DatabaseTest from '../components/DatabaseTest';
import '../components/DatabaseTest.css';

function TestDatabase() {
  return (
    <div className="test-database-page">
      <h1>Trang Test Kết Nối Database</h1>
      <p>Sử dụng công cụ này để kiểm tra kết nối đến MariaDB</p>

      <DatabaseTest />

      <div className="info-section">
        <h2>Flow hoạt động của Axios</h2>
        <ol>
          <li><strong>Khởi tạo request</strong>: Axios tạo HTTP request với các thông số cần thiết</li>
          <li><strong>Gửi request</strong>: Request được gửi đến backend PHP</li>
          <li><strong>Xử lý trên server</strong>: Backend PHP kết nối với MariaDB, thực hiện truy vấn</li>
          <li><strong>Trả về response</strong>: Backend trả về kết quả dưới dạng JSON</li>
          <li><strong>Xử lý response</strong>: Axios nhận response và trả về Promise</li>
          <li><strong>Xử lý dữ liệu</strong>: Frontend xử lý và hiển thị kết quả</li>
        </ol>
      </div>
    </div>
  );
}

export default TestDatabase;