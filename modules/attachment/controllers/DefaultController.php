<?php

namespace app\modules\attachment\controllers;

use app\modules\attachment\models\Attachment;
use app\modules\attachment\models\AttachmentSearchModel;
use yii\web\Controller;
use yii\web\Response;
use yii\widgets\LinkPager;

/**
 * Default controller for the `attachment` module
 */
class DefaultController extends Controller
{

    public function init()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        parent::init();
    }
    /**
     * Renders the index view for the module
     * @return string
     */
//    public function actionIndex()
//    {
////        $attachmentModel = new Attachment();
////
//        if($attachmentModel->load(\Yii::$app->request->post())) {
//            var_dump($attachmentModel->attachmentFile);
//            exit();
//        }
////
////        return $this->render('index', [
////            'attachmentModel' => $attachmentModel,
////        ]);
//        return [
//            'models' => '1',
//        ];
//    }
//
    public function actionIndex()
    {
        $searchModel = new AttachmentSearchModel();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);

        return [
            'models' => $this->getFullModels($dataProvider->getModels()),
            'paginationHtml' => LinkPager::widget([
                'pagination' => $dataProvider->getPagination(),
                'linkOptions' => ["v-on:click.prevent" => "loadAjax"],
            ])
        ];

    }
    protected function getFullModels($models)
    {
        $fullModels = [];
        foreach ($models as $i => $model) {
            $fullModels[] = (object)$model->getPropertiesArray();
        }

        return $fullModels;
    }

    public function actionCreateAndReturn()
    {
//        return $_POST;
        $model = new Attachment();
        $model->link_on_file = 'qwe';
        echo  json_encode($model);
        if($model->load(\Yii::$app->request->post())) {
            var_dump($model->attachmentFile);
            exit();
        }
//        if ($model->load(\Yii::$app->request->post())) {
//            return [
//                'currentModel' => $model->getPropertiesArray(),
//            ];
//        } else {
//            return [
//                'error' => \Yii::t('app', 'Error saving new Attachment'),
//            ];
//        }

    }

    public function actionUpload()
    {
        echo 1;
//        $attach = new Attachment();

//
//        if($attach->save()) {
//            return 1;
//        } else {
//            return 'error';
//        }
    }
}
