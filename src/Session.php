<?php
/**
 * Author: poofe.Huang <poofe.huang@qq.com>
 * Date: 2018/7/20
 */

namespace poofe\yii2casclient\cas;


class Session extends \yii\web\Session
{
    public function regenerateID($deleteOldSession = false)
    {
        //parent::regenerateID($deleteOldSession);
    }
}