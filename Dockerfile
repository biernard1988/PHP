FROM php:8.2-apache

# Copia os arquivos do projeto para a pasta padrão do Apache
COPY . /var/www/html/

# Habilita mod_rewrite (útil para rotas amigáveis)
RUN a2enmod rewrite
