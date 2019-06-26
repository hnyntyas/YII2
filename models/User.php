
    
<?php
namespace app\models;
class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id_user;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id_user)
    {
        $user = TblMember::findOne($id_user);
        if(!empty($user)){
            return new static($user);
        }
        return null;
    }
    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $user = TblAkun::find()->where(['accessToken'=>$token])->one();
        if(!empty($user)){
            return new static($user);
        }
        return null;
    }
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $user = TblAkun::find()->where(['username'=>$username])->one();
        if(!empty($user)){
            return new static($user);
        }
        return null;
    }
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id_user;
    }
    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }
    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }
}

