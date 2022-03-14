# laravel-vite-components
A [Vite](https://github.com/vitejs/vite) companion library for [Laravel](https://laravel.com/) to be used together with [@apility/vite-plugin-dev-manifest](https://www.npmjs.com/package/@apility/vite-plugin-dev-manifest).

## Installation
`$ composer require apility/laravel-vite-components`

## Usage
Insert the `<x-vite-head />` and `<x-vite-body />` blade components at the end of your `<head>` and `<body>`.
```html
<!DOCTYPE html>
<html>
  <head>
    ...
    
    <x-vite-head entry="main.js" />
  </head>
  <body>
    ...
    
    <x-vite-body entry="main.js" />
  </body>
</html>
```
