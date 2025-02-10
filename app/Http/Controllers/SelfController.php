<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Response;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Exception;

class SelfController extends Controller
{
    function index() {
        JavaScriptFacade::put([
            'urlBase' => URL::to('/'),
            'currentUrl' => URL::full(),
            'assetUrl' => asset('/')
        ]);

        $data = [
            'title' => 'Your Corner'
        ];

        return view('front', $data);
    }
    function qr_profile($id) {
        JavaScriptFacade::put([
            'urlBase' => URL::to('/'),
            'currentUrl' => URL::full(),
            'assetUrl' => asset('/')
        ]);
    
        $qrCode = QrCode::format('png')
            ->size(300)
            ->errorCorrection('H')
            ->merge('/public/images/mk9_logo_compressed.png', 0.3)
            ->generate('https://hris.manalok9.com/id/' . $id);
    
        $image = imagecreatefromstring($qrCode);
        $width = imagesx($image);
        $height = imagesy($image);
        $borderSize = 10;
    
        $newImage = imagecreatetruecolor($width + 2 * $borderSize, $height + 2 * $borderSize);
        $white = imagecolorallocate($newImage, 255, 255, 255);
        imagefill($newImage, 0, 0, $white);
    
        imagecopy($newImage, $image, $borderSize, $borderSize, 0, 0, $width, $height);
    
        ob_start();
        imagepng($newImage);
        $imageData = ob_get_clean();
    
        imagedestroy($image);
        imagedestroy($newImage);
    
        $base64Image = base64_encode($imageData);
    
        $data = [
            'title' => 'Official Employee',
            'id' => $id,
            'qrcode' => $base64Image
        ];
    
        return view('qr_profile', $data);
    }
    function generate_qr_code($id): \Illuminate\Http\JsonResponse
    {
        try {
            if (empty($id)) {
                return Response::json([
                    'error' => 'Invalid ID provided.'
                ], 400);
            }

            $qrCode = QrCode::format('png')
                ->size(300)
                ->errorCorrection('H')
                ->merge('/public/images/mk9_logo_compressed.png', 0.3)
                ->generate('https://hris.manalok9.com/id/' . $id);

            $image = imagecreatefromstring($qrCode);
            if (!$image) {
                throw new Exception('Failed to create image from QR code.');
            }

            $width = imagesx($image);
            $height = imagesy($image);
            $borderSize = 10;

            $newImage = imagecreatetruecolor($width + 2 * $borderSize, $height + 2 * $borderSize);
            if (!$newImage) {
                throw new Exception('Failed to create new image for QR code.');
            }

            $white = imagecolorallocate($newImage, 255, 255, 255);
            if ($white === false) {
                throw new Exception('Failed to allocate white color for border.');
            }

            imagefill($newImage, 0, 0, $white);
            imagecopy($newImage, $image, $borderSize, $borderSize, 0, 0, $width, $height);

            ob_start();
            if (!imagepng($newImage)) {
                throw new Exception('Failed to generate PNG image.');
            }
            $imageData = ob_get_clean();

            imagedestroy($image);
            imagedestroy($newImage);

            $base64Image = base64_encode($imageData);
            if ($base64Image === false) {
                throw new Exception('Failed to encode image data to Base64.');
            }

            return Response::json([
                'id' => $id,
                'qrcode' => $base64Image
            ]);
        } catch (Exception $e) {
            return Response::json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
