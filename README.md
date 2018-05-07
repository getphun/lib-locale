# lib-locale

Module translasi. Tambahkan konfigurasi di bawah pada aplikasi untuk 
menentukan default language:

```php
return [
	'_name' => 'Phun',
	'libLocale' => [
		'defult' => 'en-US'
	]
];
```

## Pengunaan

Bisa menggunakan fungsi global atau service seperti di bawah:

```php

// db translasi
// hello_user => 'Hello :name';

// fungsi global
$translation = lang('hello_user', ['name'=>'Phun']);

// service
$translation = $this->locale->translate('hello_user', ['name'=>'Phun']);
```
