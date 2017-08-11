<p align="center">
<img src="https://laravel.com/assets/img/components/logo-laravel.svg">
</p>

<p align="center">
![Latest Stable Version](https://poser.pugx.org/masterro/laravel-chronos/v/stable)](https://packagist.org/packages/masterro/laravel-chronos)
![Total Downloads](https://poser.pugx.org/masterro/laravel-chronos/downloads)](https://packagist.org/packages/masterro/laravel-chronos)
![Latest Unstable Version](https://poser.pugx.org/masterro/laravel-chronos/v/unstable)](https://packagist.org/packages/masterro/laravel-chronos)
![License](https://poser.pugx.org/masterro/laravel-chronos/license)](https://packagist.org/packages/masterro/laravel-chronos)
![composer.lock](https://poser.pugx.org/masterro/laravel-chronos/composerlock)](https://packagist.org/packages/masterro/laravel-chronos)
</p>

# Laravel Chronos

Laravel Chronos is a little wrapper for [CakePHP/Chronos](https://github.com/cakephp/chronos) package with one difference - it uses Laravel's Macroable trait.
It also has a Trait for replacing Carbon/Carbon with Chronos for Eloquent models.
Chronos is like Carbon but _Immutable_ and _Macroable_.

## Installation

From the command line, run:

```
composer require masterro/laravel-chronos
```

## Replace Carbon with Chronos
Add `ReplaceCarbonWithChronos` trait to your base model, or to models you want to use Chronos instead of Carbon.
Don't forget add `MasterRO\Chronos\ReplaceCarbonWithChronos` to use section.


## Attention 
*Dont't confuse `MasterRO\Chronos\Chronos` with `Cake\Chronos\Chronos` because `MasterRO\Chronos\Chronos` is macroable and `Cake\Chronos\Chronos` is not.*
 `MasterRO\Chronos\Chronos` implements ChronosContract so you can check and typehint inerface insteadof class name.