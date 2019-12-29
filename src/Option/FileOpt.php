<?php
/**
 * @author Mohammad Amin Chitgarha <machitgarha@outlook.com>
 * @see https://github.com/MAChitgarha/JsonFile
 */

namespace MAChitgarha\JsonFile\Option;

class FileOpt
{
    /** @var int Forces the file to be exist. Otherwise, an exception will be thrown. */
    const MUST_EXIST = 1;

    /**
     * @var int Opens the file as read only (i.e. cannot save changes to the file).
     * This option cannot be changed after instantiation.
     */
    const READ_ONLY = 2;
}
