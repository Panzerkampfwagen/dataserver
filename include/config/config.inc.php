<?php
class Z_CONFIG {
	public static $API_ENABLED = true;
	public static $SYNC_ENABLED = true;
	public static $PROCESSORS_ENABLED = true;
	public static $MAINTENANCE_MESSAGE = 'Server updates in progress. Please try again in a few minutes.';

	public static $TESTING_SITE = true;
	public static $DEV_SITE = true;

	public static $BASE_URI = '';

	public static $AUTH_SALT = '';
	public static $API_SUPER_USERNAME = '';
	public static $API_SUPER_PASSWORD = '';

	public static $API_BASE_URI = '';
	public static $SYNC_DOMAIN = '127.0.0.1:85';

	public static $S3_BUCKET = '';
	public static $S3_ACCESS_KEY = '';
	public static $S3_SECRET_KEY = '';

	public static $MEMCACHED_ENABLED = false;
	public static $MEMCACHED_SERVERS = array(
	'memcached1.localdomain:11211:2', 'memcached2.localdomain:11211:1'
	);

	public static $MONGO_SERVERS = array(
		'localhost:27017', 'localhost:27017'
	);
	public static $MONGO_DB = "zoterotest";
	public static $MONGO_SAFE_NUM = 2;

	public static $TRANSLATE_SERVERS = array(
		"translator1.localdomain:1969"
	);

	public static $CITE_SERVERS = array(
		"citeserver1.localdomain:8080", "citeserver2.localdomain:8080"
	);

	public static $LOG_TO_SCRIBE = false;
	public static $LOG_ADDRESS = '';
	public static $LOG_PORT = 1463;
	public static $LOG_TIMEZONE = 'US/Eastern';
	public static $LOG_TARGET_DEFAULT = 'errors';

	public static $PROCESSOR_PORT_DOWNLOAD = 3455;
	public static $PROCESSOR_PORT_UPLOAD = 3456;
	public static $PROCESSOR_PORT_ERROR = 3457;
	public static $PROCESSOR_PORT_INDEX = 3458;

	public static $PROCESSOR_LOG_TARGET_DOWNLOAD = 'sync-processor-download';
	public static $PROCESSOR_LOG_TARGET_UPLOAD = 'sync-processor-upload';
	public static $PROCESSOR_LOG_TARGET_ERROR = 'sync-processor-error';
	public static $PROCESSOR_LOG_TARGET_INDEX = 'processor-index';

	public static $SYNC_DOWNLOAD_SMALLEST_FIRST = false;
	public static $SYNC_UPLOAD_SMALLEST_FIRST = false;

	// Set some things manually for running via command line
	public static $CLI_PHP_PATH = '/usr/bin/php';
	public static $CLI_DOCUMENT_ROOT = "/srv/http/ZoteroDataServer";

	public static $SYNC_ERROR_PATH = '/var/log/httpd/sync-errors/';
	public static $API_ERROR_PATH = '/var/log/httpd/api-errors/';
}
?>
