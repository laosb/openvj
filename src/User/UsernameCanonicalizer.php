<?php
/**
 * This file is part of openvj project.
 *
 * Copyright 2013-2015 openvj dev team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace VJ\User;

class UsernameCanonicalizer
{
    /**
     * @param string $username
     * @return string
     */
    public static function canonicalize($username)
    {
        return trim(strtolower($username));
    }
} 