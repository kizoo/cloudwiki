<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "WindowsAzureSDK extension\n";
	exit( 1 );
}

$dir = dirname( __FILE__ ) . '/';

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'WindowsAzureSDK',
	'author'         => array( '[https://github.com/WindowsAzure/azure-sdk-for-php Microsoft]', '[https://twitter.com/osnard Robert Vogel]', '[https://twitter.com/thaiphan1990 Thai Phan]' ),
	'url'            => 'https://www.mediawiki.org/wiki/Extension:WindowsAzureSDK',
	'version'        => '0.4.0',
	'descriptionmsg' => 'windowsazuresdk-desc',
);

$wgMessagesDirs['WindowsAzureSDK'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['WindowsAzureSDK'] = $dir . 'WindowsAzureSDK.i18n.php';

require_once( $dir . 'vendor/autoload.php' );
