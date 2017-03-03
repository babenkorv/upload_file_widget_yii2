<?php

namespace app\modules\attachment\models;

use Yii;

/**
 * This is the model class for table "attachment".
 *
 * @property integer $id
 * @property string $link_on_file
 * @property integer $size
 * @property string $mime_type
 */
class Attachment extends \yii\db\ActiveRecord
{
    public $attachmentFile = null;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attachment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_on_file', 'size', 'mime_type'], 'required'],
            [['size'], 'integer'],
            [['link_on_file'], 'string', 'max' => 60],
            [['mime_type'], 'string', 'max' => 20],
            [['attachmentFile'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'link_on_file' => Yii::t('app', 'Link On File'),
            'size' => Yii::t('app', 'Size'),
            'mime_type' => Yii::t('app', 'Mime Type'),
        ];
    }

        
}
