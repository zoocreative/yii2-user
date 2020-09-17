<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;

/**
 * @var dektrium\user\models\Token $token
 */
?>
<p>
    <?= Yii::t('user', 'Hello') ?>,
</p>
<p>
    <?= Yii::t(
        'user',
        'We have received a request to change the email address for your account on {0}',
        Yii::$app->name
    ) ?>.
    <?= Yii::t('user', 'In order to complete your request, please click the link below') ?>.
</p>
<p>
    <?= Html::a(Html::encode($token->getUrl()), $token->getUrl()); ?>
</p>
<p>
    <?= Yii::t('user', 'If you cannot click the link, please try pasting the text into your browser') ?>.
</p>
<p>
    <?= Yii::t('user', 'If you did not make this request you can ignore this email') ?>.
</p>
