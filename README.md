<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Import Students (Laravel Project)
A mini project used to import the 'xlsx' student file built from the Laravel framework and [Excel Laravel](https://docs.laravel-excel.com/3.1/getting-started/) library.

### Require
- Composer 2.3.5
- Laravel 8.x - PHP 7.4 - MySQL 5.7
- Laravel Excel LE 3.1
- Create a database named `ghtk`
- Import file `students` into `ghtk` database or `php artisan migrate`

### Read File
- Read start from `row 6`, column `B` to column `W`...
- `Ngày|Tháng|Năm` => `dob` field (*date*)
- `Giới tính` => `gender` field (*boolean*)
- ...

### Images

- First visit

![First visit](https://i.imgur.com/kDrJAfo.png)

- Choose image

![Choose image](https://i.imgur.com/SRGkTxP.png)

- Import success

![Import success](https://i.imgur.com/ru10Fwi.png)

- Search

![Search](https://i.imgur.com/RHqdGsT.png)

![Search](https://i.imgur.com/eRvMGSn.png)
