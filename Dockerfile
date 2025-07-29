# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Copia os arquivos do projeto para a pasta padrão do Apache
COPY . /var/www/html/

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html

# Habilita o mod_rewrite (útil se você quiser URLs amigáveis no futuro)
RUN a2enmod rewrite

# Define o diretório de trabalho
WORKDIR /var/www/html

# Expõe a porta padrão do Apache
EXPOSE 80
