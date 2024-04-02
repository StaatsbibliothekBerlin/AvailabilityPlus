<?php

return array (
  'controllers' => 
  array (
    'factories' => 
    array (
      'AvailabilityPlus\\Controller\\AvailabilityPlusController' => 'VuFind\\Controller\\AbstractBaseFactory',
    ),
    'aliases' => 
    array (
      'AvailabilityPlus' => 'AvailabilityPlus\\Controller\\AvailabilityPlusController',
      'availabilityplus' => 'AvailabilityPlus\\Controller\\AvailabilityPlusController',
    ),
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'availabilityplus-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/AvailabilityPlus/Home',
          'defaults' => 
          array (
            'controller' => 'AvailabilityPlus',
            'action' => 'Home',
          ),
        ),
      ),
      'availabilityplus-testcases' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/AvailabilityPlus/TestCases',
          'defaults' => 
          array (
            'controller' => 'AvailabilityPlus',
            'action' => 'TestCases',
          ),
        ),
      ),
      'availabilityplus-debug' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/AvailabilityPlus/Debug/[:id]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'AvailabilityPlus',
            'action' => 'Debug',
          ),
        ),
      ),
    ),
  ),
  'vufind' => 
  array (
    'plugin_managers' => 
    array (
      'recorddriver' => 
      array (
        'factories' => 
        array (
          'AvailabilityPlus\\RecordDriver\\SolrMarc' => 'AvailabilityPlus\\RecordDriver\\SolrDefaultFactory',
        ),
        'aliases' => 
        array (
          'VuFind\\RecordDriver\\SolrMarc' => 'AvailabilityPlus\\RecordDriver\\SolrMarc',
        ),
        'delegators' => 
        array (
          'AvailabilityPlus\\RecordDriver\\SolrMarc' => 
          array (
            0 => 'VuFind\\RecordDriver\\IlsAwareDelegatorFactory',
          ),
          'VuFind\\RecordDriver\\SolrMarcRemote' => 
          array (
            0 => 'VuFind\\RecordDriver\\IlsAwareDelegatorFactory',
          ),
        ),
      ),
      'ajaxhandler' => 
      array (
        'factories' => 
        array (
          'AvailabilityPlus\\AjaxHandler\\GetItemStatuses' => 'AvailabilityPlus\\AjaxHandler\\GetItemStatusesFactory',
        ),
        'aliases' => 
        array (
          'VuFind\\AjaxHandler\\GetItemStatuses' => 'AvailabilityPlus\\AjaxHandler\\GetItemStatuses',
        ),
      ),
      'resolver_driver' => 
      array (
        'factories' => 
        array (
          'AvailabilityPlus\\Resolver\\Driver\\AvailabilityPlusResolver' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\DAIA' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\DAIAJournal' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\DAIAHsH' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\DAIAKSF' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\DAIAParent' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\FulltextFinder' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\JournalsOnlinePrint' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\JournalsOnlinePrintElectronic' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\JournalsOnlinePrintHsHElectronic' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\JournalsOnlinePrintKSFElectronic' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\JournalsOnlinePrintPrint' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\JournalsOnlinePrintHsHPrint' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\JournalsOnlinePrintKSFPrint' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\Subito' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\SubitoISSN' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\SubitoISBN' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
          'AvailabilityPlus\\Resolver\\Driver\\Unpaywall' => 'AvailabilityPlus\\Resolver\\Driver\\DriverWithHttpClientFactory',
        ),
        'aliases' => 
        array (
          'AvailabilityPlusResolver' => 'AvailabilityPlus\Resolver\Driver\AvailabilityPlusResolver',
          'DAIA' => 'AvailabilityPlus\Resolver\Driver\DAIA',
          'DAIAJournal' => 'AvailabilityPlus\Resolver\Driver\DAIAJournal',
          'DAIAHsH' => 'AvailabilityPlus\Resolver\Driver\DAIAHsH',
          'DAIAKSF' => 'AvailabilityPlus\Resolver\Driver\DAIAKSF',
          'DAIAParent' => 'AvailabilityPlus\Resolver\Driver\DAIAParent',
          'FulltextFinder' => 'AvailabilityPlus\Resolver\Driver\FulltextFinder',
          'JournalsOnlinePrint' => 'AvailabilityPlus\Resolver\Driver\JournalsOnlinePrint',
          'JournalsOnlinePrintElectronic' => 'AvailabilityPlus\Resolver\Driver\JournalsOnlinePrintElectronic',
          'JournalsOnlinePrintHsHElectronic' => 'AvailabilityPlus\Resolver\Driver\JournalsOnlinePrintHsHElectronic',
          'JournalsOnlinePrintKSFElectronic' => 'AvailabilityPlus\Resolver\Driver\JournalsOnlinePrintKSFElectronic',
          'JournalsOnlinePrintPrint' => 'AvailabilityPlus\Resolver\Driver\JournalsOnlinePrintPrint',
          'JournalsOnlinePrintHsHPrint' => 'AvailabilityPlus\Resolver\Driver\JournalsOnlinePrintHsHPrint',
          'JournalsOnlinePrintKSFPrint' => 'AvailabilityPlus\Resolver\Driver\JournalsOnlinePrintKSFPrint',
          'Subito' => 'AvailabilityPlus\Resolver\Driver\Subito',
          'SubitoISSN' => 'AvailabilityPlus\Resolver\Driver\SubitoISSN',
          'SubitoISBN' => 'AvailabilityPlus\Resolver\Driver\SubitoISBN',
          'Unpaywall' => 'AvailabilityPlus\Resolver\Driver\Unpaywall'
        ),
      ),
    ),
  ),
  'service_manager' => 
  array (
    'factories' => 
    array (
      'AvailabilityPlus\\Record\\Loader' => 'VuFind\\Record\\LoaderFactory',
    ),
    'aliases' => 
    array (
      'VuFind\\Record\\Loader' => 'AvailabilityPlus\\Record\\Loader',
    ),
  ),
);