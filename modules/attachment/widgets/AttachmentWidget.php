<?php

namespace app\modules\attachment\widgets;

use yii\helpers\Html;
use yii\widgets\ActiveForm;

class AttachmentWidget extends \yii\widgets\InputWidget
{
    public $allowUploadType = [];

    public function run()
    {
        echo $this->render();
    }
    private function getUploadAttachmentTemplate()
    {
        return Html::fileInput('Attachment[attachmentFile]', null, [
            'multiple' => "false",
            'id' => 'attachment-file-upload',
//            'data-upload-url' => '/attachment/default/create-and-return',
            'v-on:change' => 'loadAjaxFiles',
        ]);
    }

    public function render()
    {
        ob_start(); ?>
        <div id="attachment">
            <div class="attach-file-block">
                <label for="input-file" class="btn btn-default" > add new attachment </label>
                <input type="file" id="input-file">
                <?= $this->getUploadAttachmentTemplate() ?>
                <div class="btn btn-default" v-on:click="changeStatusExistingAttachments"> select attachment </div>
                <div class="exist-attachment-block" v-if="showExistingAttachments">
                    asd
                </div>
            </div>
        </div>
        <?php
        $this->registerJS();
        return ob_get_clean();

    }

    private function registerJS()
    {
        AttachmentWidgetAssets::register($this->view);
    }
}