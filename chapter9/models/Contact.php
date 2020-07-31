<?php
namespace App\Models;

class Contact extends \Illuminate\Database\Eloquent\Model {
	//protected $table = 'contacts'; // 因为 laravel 会自动根据 class name 来猜测 table 名字，所以如果 table 名字跟着 class name （ class name 后面需加s），那么这一行可以省略，否则就需要注明 table 名
	
	/* 
	// 这一行设置 fillable 的目的是为了让我们可以用:
	$contact = Contact::make([
		'name' => 'xxx', 
		'phone' => 'xxx'
	])； 
	// 如果没有这一行，我们只好/能这样：
	$contact = Contact::make();
	$contact->name = 'xxx';
	$contact->phone = 'xxx';
	*/
	protected $fillable = ['name', 'phone'];
	
    const CREATED_AT = null; // By default，每个 table 需要有 created_at 的 column，但我们的table没有，所以需要设置 null，否则会有error，可以试试 comment这一行
    const UPDATED_AT = null;
}