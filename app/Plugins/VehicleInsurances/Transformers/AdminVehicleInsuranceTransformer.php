<?php
/**
 * Plugin
 *
 * PHP version 5
 *
 * @category   PHP
 * @package    RENT&RIDE
 * @subpackage Core
 * @author     Agriya <info@agriya.com>
 * @copyright  2018 Agriya Infoway Private Ltd
 * @license    http://www.agriya.com/ Agriya Infoway Licence
 * @link       http://www.agriya.com
 */
 
namespace Plugins\VehicleInsurances\Transformers;

use League\Fractal;
use Plugins\VehicleInsurances\Model\VehicleInsurance;

/**
 * Class VehicleInsuranceTransformer
 * @package VehicleInsurances\Transformers
 */
class AdminVehicleInsuranceTransformer extends Fractal\TransformerAbstract
{

    /**
     * @param VehicleInsurance $vehicle_insurance
     * @return array
     */
    public function transform(VehicleInsurance $vehicle_insurance)
    {
        $output = array_only($vehicle_insurance->toArray(), ['id', 'created_at', 'name', 'short_description', 'description', 'is_active']);
        $output['is_active'] = ($output['is_active']) ? true : false;
        return $output;
    }

}