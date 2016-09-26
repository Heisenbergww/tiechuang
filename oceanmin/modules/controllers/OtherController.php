<?php

namespace app\modules\controllers;

use yii\web\Controller;
use Yii;
use app\modules\controllers\CommonController;
use app\models\Company;
use yii\web\UploadedFile;

class OtherController extends CommonController
{
    public function actionEdit()
    {
        $this->layout = "layout1";
        $model = Company::find()->where('companyid = :id', [':id' => '1'])->one();
        $image = $model->cover;
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            // 存一张图片开始
            $model->cover = UploadedFile::getInstance($model, 'cover');
            if ($model->cover) {
                if (file_exists($image)) {
                    if (unlink($image)) {
                        $imageName = mt_rand(10000, 99999) . (uniqid() . 'T' . date("ymd", time())) . '.' . $model->cover->extension;
                        $model->cover->saveAs('uploads/company/' . $imageName);
                        $post['Company']['cover'] = 'uploads/company/' . $imageName;
                    }
                } else {
                    $imageName = mt_rand(10000, 99999) . (uniqid() . 'T' . date("ymd", time())) . '.' . $model->cover->extension;
                    $model->cover->saveAs('uploads/company/' . $imageName);
                    $post['Company']['cover'] = 'uploads/company/' . $imageName;
                }
            } else {
                $post['Company']['cover'] = $image;
            }
            // 存一张图片结束
            if ($model->load($post) && $model->save()) {
                Yii::$app->session->setFlash('info', '修改成功');
                return $this->goBack(['admin/other/edit']);
            }
        }
        return $this->render('add', ['model' => $model]);
    }

}