<?php

namespace miradnan\assets;

/**
 * Description of Compressor
 *
 * @author miradnan
 */
class Compressor {

    protected $jsCompressorJar = __DIR__ . '/yuicompressor-2.4.8.jar';

    public static function push($app_name) {
        $compressor = new self;
        
        $folders = $compressor->listFolders();
        
        $compressor->readAssetFiles();
    }

    public function readAssetFiles() {
        
    }
    
    
    public function listFolders() {
        
    }

}
