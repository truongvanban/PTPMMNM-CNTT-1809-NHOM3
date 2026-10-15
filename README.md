# Hệ thống tổ chức hoạt động và phân công tình nguyện viên

Đề tài 6 — Bài tập lớn môn Phát triển phần mềm mã nguồn mở.

Dự án phát triển dựa trên chuỗi bài Lab 1 đến Lab 5 của học phần, bổ sung các chức năng quản lý hoạt động, ca làm việc và phân công tình nguyện viên.

## Cấu trúc dự án

- `lab1/Ma_nguon/` — Mã nguồn chính, phát triển liên tục qua các Lab.
- `database/` — Lược đồ và dữ liệu mẫu (Lab 5).
- `src/` — Logic nghiệp vụ, thuật toán phân công (Lab 2).
- `public/` — Giao diện web (Lab 3, 4).
- `tests/` — Kiểm thử tự động (Lab 5).

## Cài đặt và chạy

Yêu cầu: Ubuntu/WSL, PHP >= 8.1, Git, PostgreSQL.

```bash
sudo apt update
sudo apt install php-cli git unzip postgresql
cd lab1/Ma_nguon
bash lab.sh check
bash lab.sh run