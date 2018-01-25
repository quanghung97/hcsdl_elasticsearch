Tài liệu bắt buộc phải xem:
<br>
https://github.com/elasticquent/Elasticquent (phần này dùng để đánh chỉ số index và các kiểu tim kiếm cơ bản)
<br>
https://github.com/elastic/elasticsearch-php  (phần này dùng để tìm kiếm nâng cao hơn so với elasticquent, về mặt chung thì có thể coi elasticquent kế thừa từ phần này)
2 đường link trên có liên quan tới nhau
<br>
https://www.elastic.co/guide/en/elasticsearch/client/php-api/current/index.html
đường link này giải thích rõ cơ chế kết hợp giữa elasticsearch trong php và đây là phần quan trọng nhất là nguồn gốc của 2 trang github kia.
<br>
Giới Thiệu:
<br>
Elasticsearch là gì?
<br>
	Elasticsearch là một công cụ tìm kiếm và phân tích mã nguồn mở có khả năng mở rộng rất cao. Nó cho phép chúng tôi lưu trữ, tìm kiếm và phân tích khối lượng lớn dữ liệu một cách nhanh chóng và trong thời gian thực gần.
	Để rõ hơn ngay trên trang chủ đã giới thiệu rất kĩ về elastic.
	https://www.elastic.co/products/elasticsearch
<br>
Cài Đặt:
<br>
Bước 1 : cài đặt jdk java trên máy chủ hệ điều hành centos - linux
<br>
Bước 2 : - Hiện tại trang cơ sở dữ liệu ntbic ver2 đang dùng elastic 5.4.0
<br>
- Dowload file .deb https://www.elastic.co/downloads/past-releases/elasticsearch-5-4-0 và cài đặt file .deb trên centos
- Dowload database ntbic tại https://www.dropbox.com/s/9uj6rzxl8ui1kg7/ntbic_database.sql?dl=0
<br>
Bước 3 : - Clone project https://github.com/quanghung97/database-ntbic-ver2
- trỏ đường thư mục root sang thư mục project sau đó run terminal
composer update
php artisan key:generate
……..
thiết lập kết nối với database …
đây là cac bước cơ bản sau khi pull về project
<br>
Bươc 4 : - Khởi tạo Database trong elastic kết nối với database mysql thuần
gõ terminal
……/name_project/php artisan tinker
	App\ten_model::addAllToIndex();
ten_model:chuyen_gia_khcn,de_tai_du_an_cac_cap,doanh_nghiep_khcn,linh_vuc_san_pham,loai_phat_minh_sang_che,san_pham,tinh_thanh_pho,bang_phat_minh_sang_che
