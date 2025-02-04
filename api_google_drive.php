<?php
require 'vendor/autoload.php';

class api_google_drive
{
    private $service;

    public function __construct()
    {
        $credentialsPath = __DIR__ . '/credentials.json';

        // Inicializar Google Client
        $client = new Google_Client();
        $client->setAuthConfig($credentialsPath);
        $client->addScope(Google_Service_Drive::DRIVE_READONLY);

        // Inicializar servicio Google Drive
        $this->service = new Google_Service_Drive($client);
    }

    public function listFilesAndFolders($folderId)
    {
        try {
            $files = $this->service->files->listFiles([
                'q' => "'$folderId' in parents",
                'fields' => 'files(id, name, mimeType)',
                'orderBy' => 'name',
            ]);

            $treeData = [];

            foreach ($files->getFiles() as $file) {
                $isFolder = $file->getMimeType() === 'application/vnd.google-apps.folder';

                $node = [
                    'title'  => $file->getName(),
                    'key'    => $file->getId(),
                    'lazy'   => $isFolder, // Carga diferida solo para carpetas
                    'folder' => $isFolder  // Indica que es una carpeta (FancyTree mostrará icono de carpeta)
                ];

                if (!$isFolder) {
                    $fileUrl = "https://drive.google.com/file/d/{$file->getId()}/preview";
                    $node['data'] = ['url' => $fileUrl];
                }

                $treeData[] = $node;
            }

            return $treeData;
        } catch (Exception $e) {
            return [['title' => 'Error: ' . $e->getMessage(), 'key' => 'error']];
        }
    }
}

// Instanciar la API
$driveApi = new api_google_drive();

// Si se recibe un `folderId`, responder con JSON
if (isset($_GET['busqueda'])) {
    $folderId = $_GET['busqueda'];
    echo json_encode($driveApi->listFilesAndFolders($folderId));
    exit;
}

if (isset($_GET['documentos'])) {
    echo json_encode($driveApi->listFilesAndFolders('1NuFdLkaipA3PO-ZyW9kPrni-AnlCJbtQ'));
    exit;
}

if (isset($_GET['capacitaciones'])) {
    echo json_encode($driveApi->listFilesAndFolders('1pGyjS10BxAZIXTavbW4OGTLlb1xFhJeW'));
    exit;
}

if (isset($_GET['videos'])) {
    echo json_encode($driveApi->listFilesAndFolders('17xB-nMg95dVh1rNfgmuFkXtgG2DoNzhc'));
    exit;
}

// // Definir las carpetas raíz
// $folderId1 = "1NuFdLkaipA3PO-ZyW9kPrni-AnlCJbtQ";
// $folderId2 = "1pGyjS10BxAZIXTavbW4OGTLlb1xFhJeW";

// // Obtener datos de ambas carpetas
// $treeData1 = json_encode($driveApi->listFilesAndFolders($folderId1));
// $treeData2 = json_encode($driveApi->listFilesAndFolders($folderId2));

// Opcional: imprimir datos para depuración
// echo $treeData1;
// echo '<br><br>';
// echo $treeData2;
