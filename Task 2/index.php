<?php

// Меняем размер изображения на заданную велечину, без соблюдения пропорций.
$image = new Thumbs(__DIR__ . '/image.png');
$image->resize(200 100);
$image->output();

// Меняем ширину изображения на заданную велечину С соблюдением пропорций.
function resize_image_to_width($new_width, $image, $width, $height) {
  $resize_ratio = $new_width / $width;
  $new_height = $height * $resize_ratio;
  return resize_image($new_width, $new_height, $image, $width, $height);
}

$imgName = "image.png";
list($width, $height, $type) = getimagesize($imgName);
$old_image = load_image($imgName, $type);
$image_width_fixed = resize_image_to_width(200, $old_image, $width, $height);

// Меняем высоту изображения на заданную велечину С соблюдением пропорций.
function resize_image_to_height($new_height, $image, $width, $height) {
  $ratio = $new_height / $height;
  $new_width = $width * $ratio;
  return resize_image($new_width, $new_height, $image, $width, $height);
}

$imgName = "image.png";
list($width, $height, $type) = getimagesize($imgName);
$old_image = load_image($imgName, $type);
$image_height_fixed = resize_image_to_height(100, $old_image, $width, $height);

?>

<!-- На диске лежит файл image.png, размер 20000 на 20000. Вывести картинку как баннер размером 200 на 100 пикселей.
Обратите внимание на размер и пропорции, и подумайте о времени загрузки.
Пришлите ссылку на репозиторий с решением
Важно: решение требует использования PHP, сжатие картинки средствами HTML/CSS является некорректным решением. -->
