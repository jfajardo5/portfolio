<p align="left"><a href="https://jfajardo.us" target="_blank"><img src="https://jfajardo.us/images/applogo.png" width="100"></a></p>


# About this project

#### This is my developer portfolio website. Through this project, I am practicing my skills and expanding my Laravel knowledge. This website does more than meets the eye, feel free to look through the code! :) 
<br/>

# Setting up this website locally




## Fedora 33:
#### Make sure all the Laravel 8 php dependencies are installed on your machine:<br/>


```
sudo dnf install php php-zip php-mysqlnd php-mcrypt php-xml php-mbstring
```
```
sudo dnf install composer unzip
```
```
sudo dnf install npm
```
<br/>

#### Install MySQL (MariaDB in Fedora)

```
sudo dnf install mysql_server
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



