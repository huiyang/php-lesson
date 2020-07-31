<?php
/* 
Chapter 9： Database
*/

/*

简单来说，每个Eloquent /Model(Eloquent /Model这两个可以说是同样的东西）都是一个table，

所以create了一个table，后 declare相对应的 model就可以 select/update/insert/delete 去那个 table啦。

【准备】：建立一个 database，和 table （也可以直接执行 chapter 9 folder 里的 contacts.sql）

【步骤一】：安装
composer require illuminate/database 


【步骤二】：

安装完后，我们就declare model：

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'my_flights';
	protected $primaryKey = 'id'; // default 是 id，如果my_flights table 的primary key 的column名字是 id，这一行就可以省略（强烈推荐每个table的primary key名字用回id，不必担心join table时撞名的问题）

}

然后就可以用啦！

// Insert data
$flight = Flight::create([
	'name' => 'xxxx',
	'xxx' => 'xxxxx',
]);

// Select data by id
$flight =  Flight::find($id); // my_flights table的 id column 名字default是 "id"

// Update data
$flight->name = 'new name';
$flight->save();

// Delete data
$flight->delete();

参考：
https://laravel.com/docs/7.x/eloquent#eloquent-model-conventions
*/

require __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Contact;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'php-lesson',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->bootEloquent();

// Insert 方法 1：
$contact = Contact::make([
	'name' => 'Hui Yang 1',
	'phone' => '016-1234567',
]);
$contact->save();

// Insert 方法 2 (shortcut):
$contact = Contact::create([
	'name' => 'Hui Yang 2',
	'phone' => '016-1234567',
]);

// Select
$id = $contact->id; // 取得之前 insert 的 record 的 id
$contact = Contact::find($id);
echo $contact->name . "\n"; // Output Hui Yang 2

// Update 方法 1：
$id = $contact->id; // 取得之前 insert 的 record 的 id
$contact = Contact::find($id);
$contact->name = 'User';
$contact->save();

// Update 方法 2 (shortcut):
$contact = Contact::find($id);
$contact->update([
	'name' => 'User 2'
]);

// Delete
$contact->delete(); // Delete User 2