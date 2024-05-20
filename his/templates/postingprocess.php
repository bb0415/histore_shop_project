<?php

$app = require __DIR__ . '/app/posting.php';

$container = $app->getContainer();

// change this to your bucket name!
$container->set('bucket_name', getenv('GOOGLE_STORAGE_BUCKET') ?: 'your-bucket-name');
$container->set('project_id', getenv('level-studio-421512'));
$container->set('object_name', 'hello');

if ($container->get('bucket_name') == 'your-bucket-name') {
    die('Replace <code>&lt;your-bucket-name&gt;</code> with the name of your '
        . 'cloud storage bucket in <code>app.yaml</code> or set it as an '
        . 'environment variable for local development.');
}

// Run the app!
// use "gcloud app deploy" or run locally with dev_appserver.py
$app->run();

?>
/*
function download_object_into_memory(
    string $bucketName,
    string $objectName
): void {
    $storage = new StorageClient();
    $bucket = $storage->bucket($bucketName);
    $object = $bucket->object($objectName);
    $contents = $object->downloadAsString();
    printf(
        'Downloaded %s from gs://%s/%s' . PHP_EOL,
        $contents,
        $bucketName,
        $objectName
    );
}
download_object_into_memory("bb0415_bucket", "object2.txt");

/**
 * Upload an object from memory buffer.
 *
 * @param string $bucketName The name of your Cloud Storage bucket.
 *        (e.g. 'my-bucket')
 * @param string $objectName The name of your Cloud Storage object.
 *        (e.g. 'my-object')
 * @param string $contents The contents to upload to the file.
 *        (e.g. 'these are my contents')
 */
/*
function upload_object_from_memory(
    string $bucketName,
    string $objectName,
    string $contents
): void {
    $storage = new StorageClient();
    if (!$stream = fopen('data://text/plain,' . $contents, 'r')) {
        throw new \InvalidArgumentException('Unable to open file for reading');
    }
    $bucket = $storage->bucket($bucketName);
    $bucket->upload($stream, [
        'name' => $objectName,
    ]);
    printf('Uploaded %s to gs://%s/%s' . PHP_EOL, $contents, $bucketName, $objectName);
}
upload_object_from_memory("bb0415_bucket", "img1","/home/llssyy1109/histore_shop_project/his/app/2022120008462_500.jpg");

// Set your own image file path and content type below to upload an
// image to Cloud Storage.
// $imageStream = fopen('/path/to/your_image.jpg', 'r');
$imageContentType = 'image/jpg';
$object = $bucket->upload($imageStream, [
    'metadata' => ['contentType' => $imageContentType],
    'predefinedAcl' => 'publicRead',
]);
$imageUrl = $object->info()['mediaLink'];
*/
?>