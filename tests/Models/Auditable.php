<?php
/**
 * This file is part of the Laravel Auditing package.
 *
 * @author     Antério Vieira <anteriovieira@gmail.com>
 * @author     Quetzy Garcia  <quetzyg@altek.org>
 * @author     Raphael França <raphaelfrancabsb@gmail.com>
 * @copyright  2015-2017
 *
 * For the full copyright and license information,
 * please view the LICENSE.md file that was distributed
 * with this source code.
 */

namespace OwenIt\Auditing\Tests\Models;

use Illuminate\Database\Eloquent\Model;

class Auditable extends Model implements \OwenIt\Auditing\Contracts\Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'published' => 'bool',
    ];

    /**
     * {@inheritdoc}
     */
    public function resolveIpAddress()
    {
        return '127.0.0.1';
    }

    /**
     * {@inheritdoc}
     */
    public function resolveUserAgent()
    {
        return 'Mozilla/5.0 (X11; Linux x86_64; rv:53.0) Gecko/20100101 Firefox/53.0';
    }

    /**
     * Uppercase Title accessor.
     *
     * @param string $value
     *
     * @return string
     */
    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }

    /**
     * Custom event handler #1.
     *
     * @param array $old
     * @param array $new
     *
     * @return void
     */
    protected function auditCustomAttributes(array &$old, array &$new)
    {
    }

    /**
     * Custom event handler #2.
     *
     * @param array $old
     * @param array $new
     *
     * @return void
     */
    protected function myAttributesMethod(array &$old, array &$new)
    {
    }
}