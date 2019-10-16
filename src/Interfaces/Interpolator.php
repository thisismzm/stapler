<?php

namespace Codesleeve\Stapler\Interfaces;

use Codesleeve\Stapler\Interfaces\Attachment as AttachmentInterface;

interface Interpolator
{
    /**
     * Interpolate a string.
     *
     * @param string              $string
     * @param AttachmentInterface $attachment
     * @param string              $styleName
     * @param bool                $shouldUrlencode
     *
     * @return string
     */
    public function interpolate($string, AttachmentInterface $attachment, $styleName = '', $shouldUrlencode = false);
}