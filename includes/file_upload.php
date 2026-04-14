<?php
require_once __DIR__ . '/../config/env.php';

class FileUpload {
    public static function uploadFile($file, $subfolder = '') {
        $relative_dir = 'uploads/' . ($subfolder ? $subfolder . '/' : '');
        $target_dir = dirname(__DIR__) . '/' . $relative_dir;
        
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        
        $original_name = $file['name'];
        $target_file = $target_dir . $original_name;
        
        if (move_uploaded_file($file['tmp_name'], $target_file)) {
            return $relative_dir . $original_name;
        }
        
        return false;
    }
    
    public static function deleteFile($filepath) {
        $full_path = dirname(__DIR__) . '/' . $filepath;
        if (file_exists($full_path)) {
            unlink($full_path);
            return true;
        }
        return false;
    }
    
    public static function includeFile($filename) {
        $full_path = dirname(__DIR__) . '/' . $filename;
        include $full_path;
    }
}
?>