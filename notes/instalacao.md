# Instalação

## PHP 7

### Windows
1. [Baixar zip para x64 ou x86](https://windows.php.net/download)
1. Descompactar para `C:\`
1. Add path `C:\php` para variáveis de sistema

### Ubuntu
1. É ensinando a usar o [PHPBrew](https://github.com/phpbrew/phpbrew) porém somente com as linhas abaixo já instala a versão 7.2 do php
``apt-get install -y php7.2 php7.2-cli``


## PHPUnit phar
- [Instruções](https://phpunit.readthedocs.io/pt_BR/latest/installation.html)
- obs: *.phar é um pacote executável

### Windows
- [Baixar phpunit.phar](https://phar.phpunit.de/phpunit.phar) e salvar na mesma pasta do path do php com o nome *phpunit.phar*.
- Criar arquivo `phpunit.bat` no path do php com o conteúdo `@php "%~dp0phpunit.phar" %*`


### Linux
```
wget https://phar.phpunit.de/phpunit-6.4.phar
chmod +x phpunit-6.4.phar
sudo mv phpunit-6.4.phar /usr/local/bin/phpunit
phpunit --version
```
