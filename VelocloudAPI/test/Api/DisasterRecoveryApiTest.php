<?php
/**
 * DisasterRecoveryApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Velocloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * DisasterRecoveryApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisasterRecoveryApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for disasterRecoveryConfigureActiveForReplication
     *
     * Designate a standby VCO for disaster recovery replication.
     *
     */
    public function testDisasterRecoveryConfigureActiveForReplication()
    {
    }

    /**
     * Test case for disasterRecoveryDemoteActive
     *
     * Demote current server from active to zombie.
     *
     */
    public function testDisasterRecoveryDemoteActive()
    {
    }

    /**
     * Test case for disasterRecoveryGetReplicationBlob
     *
     * Get the blob needed to configure VCO replication on the standby.
     *
     */
    public function testDisasterRecoveryGetReplicationBlob()
    {
    }

    /**
     * Test case for disasterRecoveryGetReplicationStatus
     *
     * Get VCO disaster recovery status.
     *
     */
    public function testDisasterRecoveryGetReplicationStatus()
    {
    }

    /**
     * Test case for disasterRecoveryPrepareForStandby
     *
     * Prepare current VCO to be configured as a standby system.
     *
     */
    public function testDisasterRecoveryPrepareForStandby()
    {
    }

    /**
     * Test case for disasterRecoveryPromoteStandbyToActive
     *
     * Promote the current server to take over as the single standalone VCO.
     *
     */
    public function testDisasterRecoveryPromoteStandbyToActive()
    {
    }

    /**
     * Test case for disasterRecoveryRemoveStandby
     *
     * Unconfigure VCO disaster recovery on the current server.
     *
     */
    public function testDisasterRecoveryRemoveStandby()
    {
    }

    /**
     * Test case for disasterRecoveryTransitionToStandby
     *
     * Configure current VCO to transition to standby in disaster recovery active/standby pair..
     *
     */
    public function testDisasterRecoveryTransitionToStandby()
    {
    }
}
