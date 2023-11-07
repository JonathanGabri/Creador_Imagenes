<?php

function load_image($file)
{
    return Intervention\Image\ImageManager::make($file);
}

function resize_image($image, $width, $height)
{
    return $image->resize($width, $height);
}

function crop_image($image, $x, $y, $width, $height)
{
    return $image->crop($x, $y, $width, $height);
}

function rotate_image($image, $angle)
{
    return $image->rotate($angle);
}

function watermark_image($image, $watermark, $position)
{
    return $image->watermark($watermark, $position);
}

function save_image($image, $filename)
{
    return $image->save($filename);
}
