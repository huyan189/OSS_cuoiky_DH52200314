# Dùng môi trường Node.js nhẹ nhất
FROM node:18-alpine

# Tạo thư mục làm việc
WORKDIR /app

# Copy code vào
COPY . .

# Mở cổng 3000
EXPOSE 3000

# Chạy app
CMD ["node", "app.js"]