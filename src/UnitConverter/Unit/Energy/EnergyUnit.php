<?php

/**
 * This file is part of the jordanbrauer/unit-converter PHP package.
 *
 * @copyright 2017 Jordan Brauer <jbrauer.inc@gmail.com>
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UnitConverter\Unit\Energy;

use UnitConverter\Measure;
use UnitConverter\Unit\{ AbstractUnit };

/**
 * Energy base data class. Any new energy units should
 * extend this class and implement their name, symbol and units;
 * overriding the $unitOf and $base properties only if necessary.
 *
 * @version 1.0.0
 * @since 1.0.0
 * @author Jordan Brauer <jbrauer.inc@gmail.com>
 */
abstract class EnergyUnit extends AbstractUnit
{
  protected $unitOf = Measure::ENERGY;

  protected $base = Joule::class;
}
