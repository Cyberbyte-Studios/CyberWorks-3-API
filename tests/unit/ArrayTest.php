<?php

use App\Modules\ArmaLife\Services\ArrayParser;
use App\Modules\ArmaLife\Models\Player;


class ArrayTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testAliases()
    {
        $this->assertEquals([
            'Nolo'
        ], ArrayParser::aliases("\"[`Nolo`]\""));
    } 
    
    public function testLicences() 
    {
        $this->assertEquals([
            [
                'id' => 'license_civ_driver',
                'name' => 'license.license_civ_driver',
                'status' => 1
            ],
            [
                'id' => 'license_civ_boat',
                'name' => 'license.license_civ_boat',
                'status' => 0              
            ],
            [
                'id' => 'license_civ_pilot',
                'name' => 'license.license_civ_pilot',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_trucking',
                'name' => 'license.license_civ_trucking',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_gun',
                'name' => 'license.license_civ_gun',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_dive',
                'name' => 'license.license_civ_dive',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_home',
                'name' => 'license.license_civ_home',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_oil',
                'name' => 'license.license_civ_oil',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_diamond',
                'name' => 'license.license_civ_diamond',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_salt',
                'name' => 'license.license_civ_salt',
                'status' => 0                
            ],
            [
                'id' => 'license_civ_sand',
                'name' => 'license.license_civ_sand',
                'status' => 0                
            ],
            [
                'id' => 'license_civ_iron',
                'name' => 'license.license_civ_iron',
                'status' => 0                
            ],
            [
                'id' => 'license_civ_copper',
                'name' => 'license.license_civ_copper',
                'status' => 0                
            ],
            [
                'id' => 'license_civ_cement',
                'name' => 'license.license_civ_cement',
                'status' => 0                
            ],
            [
                'id' => 'license_civ_medmarijuana',
                'name' => 'license.license_civ_medmarijuana',
                'status' => 0                
            ],
            [
                'id' => 'license_civ_cocaine',
                'name' => 'license.license_civ_cocaine',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_heroin',
                'name' => 'license.license_civ_heroin',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_marijuana',
                'name' => 'license.license_civ_marijuana',
                'status' => 0                
            ],
            [
                'id' => 'license_civ_rebel',
                'name' => 'license.license_civ_rebel',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_rebel1',
                'name' => 'license.license_civ_rebel1',
                'status' => 1                
            ],
            [
                'id' => 'license_civ_rebel2',
                'name' => 'license.license_civ_rebel2',
                'status' => 1                
            ],
            [
                'id' => 'license_cop_cAir',
                'name' => 'license.license_cop_cAir',
                'status' => 1                
            ],
            [
                'id' => 'license_cop_cg',
                'name' => 'license.license_cop_cg',
                'status' => 0                
            ]                 
        ], ArrayParser::licences("\"[[`license_civ_driver`,1],[`license_civ_boat`,0],[`license_civ_pilot`,1],[`license_civ_trucking`,1],[`license_civ_gun`,1],[`license_civ_dive`,1],[`license_civ_home`,1],[`license_civ_oil`,1],[`license_civ_diamond`,1],[`license_civ_salt`,0],[`license_civ_sand`,0],[`license_civ_iron`,0],[`license_civ_copper`,0],[`license_civ_cement`,0],[`license_civ_medmarijuana`,0],[`license_civ_cocaine`,1],[`license_civ_heroin`,1],[`license_civ_marijuana`,0],[`license_civ_rebel`,1],[`license_civ_rebel1`,1],[`license_civ_rebel2`,1]]\"','\"[[`license_cop_cAir`,1],[`license_cop_cg`,0]]\""));
        
    }
    
    public function testInventory()
    {
        $this->assertEquals([
            'item.U_B_Wetsuit' => 1,
            'item.V_RebreatherB' => 1,
            'item.B_Carryall_mcamo' => 1,
            'item.G_Diving' => 1,
            'item.ItemMap' => 1,
            'item.ItemCompass' => 1,
            'item.ItemWatch' => 1,
            'item.ItemGPS' => 1,
            'item.NVGoggles_INDEP' => 1,
            'item.Binocular' => 1,
            'item.arifle_SDAR_F' => 1,
            'item.30Rnd_556x45_Stanag' => 1,
            'item.lockpick' => 1,
            'item.waterBottle' => 1,
            'item.tbacon' => 1,
            'item.toolkit' => 1
        ], ArrayParser::inventory("\"[`U_B_Wetsuit`,`V_RebreatherB`,`B_Carryall_mcamo`,`G_Diving`,``,[`ItemMap`,`ItemCompass`,`ItemWatch`,`ItemGPS`,`NVGoggles_INDEP`,`Binocular`],`arifle_SDAR_F`,``,[],[`30Rnd_556x45_Stanag`],[],[],[],[],[``,``,``,``],[``,``,``,``],[[`lockpick`,3],[`waterBottle`,1],[`tbacon`,1],[`toolkit`,1]]]\"")); 
        
        $this->assertEquals([
            'item.U_Rangemaster' => 1,
            'item.V_Rangemaster_belt' => 1,
            'item.ItemMap' => 1,
            'item.ItemCompass' => 1,
            'item.ItemWatch' => 1,
            'item.ItemGPS' => 1,
            'item.hgun_P07_snds_F' => 1,
            'item.16Rnd_9x21_Mag' => 6,
            'item.muzzle_snds_L' => 1
        ], ArrayParser::inventory("\"[`U_Rangemaster`,`V_Rangemaster_belt`,``,``,``,[`ItemMap`,`ItemCompass`,`ItemWatch`,`ItemGPS`],``,`hgun_P07_snds_F`,[],[`16Rnd_9x21_Mag`,`16Rnd_9x21_Mag`,`16Rnd_9x21_Mag`],[],[],[],[`16Rnd_9x21_Mag`,`16Rnd_9x21_Mag`,`16Rnd_9x21_Mag`],[``,``,``,``],[`muzzle_snds_L`,``,``,``],[]]\"")); 

        $this->assertEquals(false, ArrayParser::inventory("\"[]\""));        
    }
    
    public function testPostion()
    {
        $this->assertEquals([
            'x' => '14264.3',
            'y' => '16295.1',
            'z' => '0.00125313'
        ], ArrayParser::position("\"[14264.3,16295.1,0.00125313]\""));
    }
    
    public function testTime()
    {
        $this->assertEquals([
            'cop' => '1021',
            'med' => '0',
            'civ' => '2620'
        ], ArrayParser::time("\"[1021,0,2620]\""));        
    }
    
    public function testStats()
    {
        $this->assertEquals([
            'health' => '45',
            'water' => '45',
            'stamina' => '0.0306493'
        ], ArrayParser::stats("\"[45,45,0.0306493]\""));
        $this->assertEquals([
            'health' => '90',
            'water' => '100',
            'stamina' => '0'
        ], ArrayParser::stats("\"[90,100,0]\""));
        $this->assertEquals([
            'health' => '100',
            'water' => '100',
            'stamina' => '0'
        ], ArrayParser::stats("\"[100,100,0]\""));        
    }
}