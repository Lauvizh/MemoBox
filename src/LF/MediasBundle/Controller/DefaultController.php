<?php

namespace LF\MediasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LFMediasBundle:Default:index.html.twig');
    }

    public function photoAction($id,$size,$squared)
    {
    	// recuperer les informations du media
    	$em = $this->getDoctrine()->getManager();
    	$media = $em->getRepository('LFMediasBundle:Media')->find($id);
    	// construire le chemin vers le dossier de base des images
    	$basePath = $this->container->getParameter('kernel.root_dir')."/../medias";
    	// si une taille est demandée et si elle est suppérieur à 1 on affiche la miniature demandée
    	// sinon on affiche l'image originale.
    	if (!empty($size) && $size > 1) {

    		$mediaPath = $basePath;
    		$mediaPath .= "/imagesdisplay/".sprintf("%08d",$media->getEvent()->getId())."/".sprintf("%08d",$media->getId())."_".$size;
    		if ($squared > 0) {
    			$mediaPath .= "_sq";
    			}
    		$mediaPath .= ".jpg";
    		if (!file_exists($mediaPath)) {
    			$media->creatThumbnail($size, $basePath, $squared);
    			}
    		}
    	else{
    		$mediaPath = $basePath."/".$media->getFolder()."/PHOTOS/".$media->getName();
    		}

		$response = new BinaryFileResponse($mediaPath);
		$response->setContentDisposition(ResponseHeaderBag::DISPOSITION_INLINE,$media->getFileOldName());

		return $response;
    }

}
