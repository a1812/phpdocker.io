<?php
/**
 * Copyright 2016 Luis Alberto Pabon Flores
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PHPDocker\PhpExtension;

/**
 * Extensions available on PHP 7.1.x.
 *
 * @package PHPDocker\PhpExtension
 * @author  Luis A. Pabon Flores
 */
class Php71AvailableExtensions extends BaseAvailableExtensions
{
    /**
     * Must return an array of all available mandatory extensions, indexed by display name
     * and containing an array of ['packages' => ['deb-package-1', 'deb-package-2' ...]
     *
     * @return array
     */
    protected function getMandatoryExtensionsMap(): array
    {
        return [
            'cURL'     => ['packages' => ['php7.1-curl']],
            'JSON'     => ['packages' => ['php7.1-json']],
            'MBSTRING' => ['packages' => ['php7.1-mbstring']],
            'MCrypt'   => ['packages' => ['php7.1-mcrypt']],
            'OPCache'  => ['packages' => ['php7.1-opcache']],
            'Readline' => ['packages' => ['php7.1-readline']],
            'Sodium'   => ['packages' => ['php7.1-sodium']],
            'XML'      => ['packages' => ['php7.1-xml']],
            'Zip'      => ['packages' => ['php7.1-zip']],
        ];
    }

    /**
     * Must return an array of all available optional extensions, indexed by display name
     * and containing an array of ['packages' => ['deb-package-1', 'deb-package-2' ...]
     *
     * @return array
     */
    protected function getOptionalExtensionsMap(): array
    {
        return [
            'Memcached'           => ['packages' => ['php7.1-memcached']],
            'MySQL'               => ['packages' => ['php7.1-mysql']],
            'PostgreSQL'          => ['packages' => ['php7.1-pgsql']],
            'Redis'               => ['packages' => ['php7.1-redis']],
            'SQLite3'             => ['packages' => ['php7.1-sqlite3']],
            'Bcmath'              => ['packages' => ['php7.1-bcmath']],
            'bz2'                 => ['packages' => ['php7.1-bz2']],
            'DBA'                 => ['packages' => ['php7.1-dba']],
            'Enchant'             => ['packages' => ['php7.1-enchant']],
            'GD'                  => ['packages' => ['php7.1-gd']],
            'Gearman'             => ['packages' => ['php7.1-gearman']],
            'GMP'                 => ['packages' => ['php7.1-gmp']],
            'igbinary'            => ['packages' => ['php7.1-igbinary']],
            'IMAP'                => ['packages' => ['php7.1-imap']],
            'ImageMagick'         => ['packages' => ['php7.1-imagick']],
            'Interbase'           => ['packages' => ['php7.1-interbase']],
            'Intl'                => ['packages' => ['php7.1-intl']],
            'LDAP'                => ['packages' => ['php7.1-ldap']],
            'MongoDB'             => ['packages' => ['php7.1-mongodb']],
            'MessagePack/msgpack' => ['packages' => ['php7.1-msgpack']],
            'ODBC'                => ['packages' => ['php7.1-odbc']],
            'PHPDBG'              => ['packages' => ['php7.1-phpdbg']],
            'PSpell'              => ['packages' => ['php7.1-pspell']],
            'raphf'               => ['packages' => ['php7.1-raphf']],
            'Recode'              => ['packages' => ['php7.1-recode']],
            'SNMP'                => ['packages' => ['php7.1-snmp']],
            'SOAP'                => ['packages' => ['php7.1-soap']],
            'SSH2'                => ['packages' => ['php7.1-ssh2']],
            'Sybase'              => ['packages' => ['php7.1-sybase']],
            'Tidy'                => ['packages' => ['php7.1-tidy']],
            'XMLRPC-EPI'          => ['packages' => ['php7.1-xmlrpc']],
            'XSL'                 => ['packages' => ['php7.1-xsl']],
            'YAML'                => ['packages' => ['php7.1-yaml']],
            'Tideways'            => ['packages' => ['php7.1-tideways']],
            'Xhprof'              => ['packages' => ['php7.1-xhprof']],
            'Xdebug'              => ['packages' => ['php7.1-xdebug']],
            'ZeroMQ'              => ['packages' => ['php7.1-zmq']],
        ];
    }
}
