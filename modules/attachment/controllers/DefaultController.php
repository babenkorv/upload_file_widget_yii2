<?php

namespace app\modules\attachment\controllers;

use app\modules\attachment\models\Attachment;
use yii\web\Controller;

/**
 * Default controller for the `attachment` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $attachmentModel = new Attachment();

        if($attachmentModel->load(\Yii::$app->request->post())) {
            var_dump($attachmentModel->attachmentFile);
            exit();
        }

        return $this->render('index', [
            'attachmentModel' => $attachmentModel,
        ]);
    }

    
    
    public function actionUpload()
    {
        echo 1;
        exit();
    }
}
