<?php

/*

create database m_dotinstall_fb_connect_php;
grant all on m_dotinstall_fb_connect_php.* to matsumura@localhost;
 
use m_dotinstall_fb_connect_php
 
create table users (
id int not null auto_increment primary key,
facebook_user_id varchar(30) unique,
facebook_name varchar(255),
facebook_picture varchar(255),
facebook_access_token varchar(255),
created datetime,
modified datetime
);

*/

define('DSN', 'mysql:host=localhost;dbname=m_dotinstall_fb_connect_php');
define('DB_USER', 'matsumura');
define('DB_PASSWORD', 'matsumura');

define('APP_ID', '474172039322655');
define('APP_SECRET', '554c321ce5684aef8c034ea551e50afd');

define('SITE_URL', 'http://ma.snm.dip.jp/php/fb_connect_php/');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/php/fb_connect_php/');
