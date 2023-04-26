<p align="left"><a href="https://jfajardo.net" target="_blank"><img src="https://jfajardo.net/images/applogo.png" width="100"></a></p>


# About this project

#### This is my developer portfolio website. Through this project, I am practicing my skills and expanding my Laravel knowledge. Feel free to look through the code!
<br/>

# Setting up this website locally




## Ubuntu 22.04.2 LTS:
#### Make sure all the Laravel 10 php dependencies are installed on your machine:<br/>


```
sudo apt install php php-zip php-xml php-mbstring php-mysql php-sqlite3
```
```
sudo apt install composer unzip
```
```
sudo apt install npm
```
<br/>

#### Install MariaDB

```
sudo apt install mariadb-server
```
```
sudo mysql_secure_installation
```
#### Then
```
git clone https://github.com/jfajardo5/portfolio
```

#### Save '.env-example' as '.env' in the project's root directory. Fill .env in with your credentials.

#### For smtp, I use gmail's smtp server.<br/><br/>

#### Install project dependencies:

```
composer install
```
```
npm install && npm run dev
```

#### Migrate database:

```
php artisan migrate --seed
```
#### And finally:
```
php artisan serve
```



