<?php

/*
 * This file is part of Laravel Picible.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Picible\Filters;

use BrianFaust\Picible\Contracts\FilterInterface;
use Intervention\Image\Image;

class Resize implements FilterInterface
{
    public function __construct($config)
    {
        $this->width = $config['width'];
        $this->height = $config['height'];
        $this->preserve_ratio = $config['preserve_ratio'];
    }

    public function applyFilter(Image $image)
    {
        return $image->resize($this->width, $this->height);
    }
}
