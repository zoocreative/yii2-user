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
 * @var dektrium\user\models\User $user
 * @var dektrium\user\models\Token $token
 */
?>
<p>
    <?= Yii::t('user', 'Hello') ?>,
</p>
<p>
    <?= Yii::t('user', 'We have received a request to reset the password for your account on {0}', Yii::$app->name) ?>.
    <?= Yii::t('user', 'Please click the link below to complete your password reset') ?>.
</p>
<p>
    <?= Html::a(Html::encode($token->url), $token->url); ?>
</p>
<p>
    <?= Yii::t('user', 'If you cannot click the link, please try pasting the text into your browser') ?>.
</p>
<p>
    <?= Yii::t('user', 'If you did not make this request you can ignore this email') ?>.
</p>
