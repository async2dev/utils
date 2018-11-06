<?php
declare(strict_types=1);

namespace Async2\Utils;

use function is_dir;
use function is_readable;

/**
 * Class DirectoryUtil
 * @package Async2\Utils
 * @since   1.0
 */
final class FsUtil {
    /**
     * @param string $realpath
     *
     * @return bool
     */
    public static function isDirectory(string $realpath): bool {
        return is_dir($realpath);
    }

    /**
     * @param string $realpath
     *
     * @return bool
     */
    public static function isReadable(string $realpath): bool {
        return is_readable($realpath);
    }

    /**
     * @param string $realpath
     *
     * @return bool
     */
    public static function isReadableDirectory(string $realpath): bool {
        return self::isDirectory($realpath) && self::isReadable($realpath);
    }
}