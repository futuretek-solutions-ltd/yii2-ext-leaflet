<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace futuretek\leaflet\layers;

use futuretek\leaflet\types\LatLng;

trait LatLngTrait
{
    /**
     * @var \futuretek\leaflet\types\LatLng holds the latitude and longitude values.
     */
    private $_latLon;

    /**
     * @param \futuretek\leaflet\types\LatLng $latLon the position to render the marker
     */
    public function setLatLng(LatLng $latLon)
    {
        $this->_latLon = $latLon;
    }

    /**
     * @return \futuretek\leaflet\types\LatLng
     */
    public function getLatLng()
    {
        return $this->_latLon;
    }
}
