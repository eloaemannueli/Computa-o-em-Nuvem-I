#usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# copia os arquivos de sua aplicação para o diretório padrão do apache
COPY . /var/www/html/

#Habilita módulos adicionais do Apache (opcional)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Exponha a porta padrão do Apache
EXPOSE 80
