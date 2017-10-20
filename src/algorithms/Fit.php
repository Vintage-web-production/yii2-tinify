<?php
/**
 * @link https://github.com/Vintage-web-production/yii2-tinify
 * @copyright Copyright (c) 2017 Vintage Web Production
 * @license BSD 3-Clause License
 */

namespace vintage\tinify\algorithms;

use yii\base\InvalidConfigException;

/**
 * Fit image algorithm.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 2.0
 */
class Fit extends AbstractAlgorithm
{
    /**
     * @inheritdoc
     */
    public function getConfig()
    {
        if (empty($this->width) && empty($this->height)) {
            throw new InvalidConfigException(
                'For "' . self::className() . '" algorithm you should to set a "width" and "height"'
            );
        }
        return [
            'width' => $this->width,
            'height' => $this->height,
        ];
    }
}
