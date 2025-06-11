FROM php:8.3-cli
RUN apt-get update && apt-get install -y libcurl4-openssl-dev && docker-php-ext-install curl
COPY . /app
WORKDIR /app/public
CMD ["php", "-S", "0.0.0.0:3010"]
