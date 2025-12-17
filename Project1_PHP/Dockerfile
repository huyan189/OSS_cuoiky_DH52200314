# Sử dụng Image PHP kèm Apache
FROM php:8.0-apache

# Cài đặt extension để PHP kết nối được với MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy toàn bộ code trong thư mục src vào thư mục web của container
COPY src/ /var/www/html/

# Mở cổng 80
EXPOSE 80