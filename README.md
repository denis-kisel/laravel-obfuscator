# laravel-obfuscator
Obfuscator class for laravel. Basics on https://github.com/pH-7/Obfuscator-Class

# Installation

1. Run `composer require denis-kisel/obfuscator`  
2. Register a service provider in the `app.php` configuration file  
`DenisKisel\Obfuscator\ServiceProvider::class,`  
3. Add facade in the same file  
`'Obfuscator' => DenisKisel\Obfuscator\Facade\Obfuscator::class`  

# Usage

<b>Example 1</b>
```php
Obfuscator::obfuscateFileFromTo($originalFile, $obfuscatedFile);
```

<b>Example 2</b>
```php
$data = File::get($originalFile);
File::put($obfuscatedFile, Obfuscator::obfuscateData($data));
```
