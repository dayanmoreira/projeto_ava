# Usa imagem PHP 8.2 com Apache
FROM php:8.2-apache

# Instala extensões necessárias
RUN apt-get update && apt-get install -y libzip-dev unzip && docker-php-ext-install pdo pdo_mysql zip

# Copia os arquivos do projeto para dentro do container
COPY . /var/www/html/

# Define o diretório de trabalho
WORKDIR /var/www/html/

# Dá permissão para o Laravel funcionar
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Ativa mod_rewrite do Apache
RUN a2enmod rewrite

# Configura o Apache para aceitar .htaccess
RUN echo "<Directory /var/www/html/>\\n\
    AllowOverride All\\n\
</Directory>" >> /etc/apache2/apache2.conf

# Expõe a porta 80
EXPOSE 80
