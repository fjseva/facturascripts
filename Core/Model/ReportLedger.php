<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2020 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Core\Model;

/**
 * Model for ledger report
 *
 * @author Jose Antonio Cuello <jcuello@artextrading.com>
 */
class ReportLedger extends Base\ReportAccounting
{

    /**
     *
     * @var string
     */
    public $endcodsubaccount;

    /**
     *
     * @var int
     */
    public $endentry;

    /**
     *
     * @var bool
     */
    public $grouped;

    /**
     *
     * @var string
     */
    public $startcodsubaccount;

    /**
     *
     * @var int
     */
    public $startentry;

    /**
     * Reset the values of all model properties.
     */
    public function clear()
    {
        parent::clear();
        $this->grouped = false;
    }

    /**
     * Returns the name of the table that uses this model.
     *
     * @return string
     */
    public static function tableName(): string
    {
        return 'reportsledger';
    }
}
