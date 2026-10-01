<?php
$files = glob("e:/xampp/htdocs/gestev/*.php");
$files = array_merge($files, glob("e:/xampp/htdocs/gestev/includes/*.php"));
$files = array_merge($files, glob("e:/xampp/htdocs/gestev/admin/*.php"));
$files = array_merge($files, glob("e:/xampp/htdocs/gestev/admin/includes/*.php"));

foreach ($files as $file) {
    if (basename($file) == 'config.php' || basename($file) == 'db.php' || basename($file) == 'fix_paths.php') {
        continue;
    }
    $content = file_get_contents($file);
    
    // Replace "<?= BASE_URL ?>" with "<?= BASE_URL ?>"
    $content = str_replace('"<?= BASE_URL ?>', '"<?=' . ' BASE_URL ' . '?' . '>', $content);
    $content = str_replace("'<?= BASE_URL ?>", "'<?=" . ' BASE_URL ' . '?' . '>', $content);
    
    file_put_contents($file, $content);
}

// Update config.php
$configPath = "e:/xampp/htdocs/gestev/config.php";
$configContent = file_get_contents($configPath);
if (strpos($configContent, 'BASE_URL') === false) {
    $baseUrlLogic = "
// Dynamic Base URL for Local vs Live
if (isset(\$_SERVER['HTTP_HOST']) && \$_SERVER['HTTP_HOST'] === 'localhost') {
    define('BASE_URL', '<?= BASE_URL ?>');
} else {
    define('BASE_URL', '/');
}
";
    $configContent = str_replace("<?php", "<?php\n" . $baseUrlLogic, $configContent);
    file_put_contents($configPath, $configContent);
}

// Update admin/config.php or db.php if exists
$adminDbPath = "e:/xampp/htdocs/gestev/admin/db.php";
if (file_exists($adminDbPath)) {
    $adminDbContent = file_get_contents($adminDbPath);
    if (strpos($adminDbContent, 'BASE_URL') === false) {
        $adminDbContent = str_replace("<?php", "<?php\n" . $baseUrlLogic, $adminDbContent);
        file_put_contents($adminDbPath, $adminDbContent);
    }
}

echo "Paths updated to use BASE_URL.\n";
?>
