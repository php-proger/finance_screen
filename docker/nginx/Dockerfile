FROM nginx:latest

# Копируем файлы конфигурации Nginx
COPY docker/nginx/snippets/fastcgi-php.conf /etc/nginx/snippets/fastcgi-php.conf
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Запуск Nginx
CMD ["nginx", "-g", "daemon off;"]
