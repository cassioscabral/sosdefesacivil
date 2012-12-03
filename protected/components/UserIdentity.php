<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {

        // nome de usuário em mininusculo, pos ele é salvo da mesma  forma
        $usuario = strtolower($this->username);

        // associa o email
        $record = Usuario::model()->find("LOWER(email) = '{$usuario}'");

        if ($record === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else {
            // se o status do usuário for diferente de ativo
            if ($record->status != 1) {
                // identificação desconhecida
                $this->errorCode = self::ERROR_UNKNOWN_IDENTITY;

                // caso a senha seja diferente do salt com mds e a senha correta
            } else if ($record->senha !== md5(SALT_MD5 . $this->password)) {
                // senha inválida
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
                // caso contrário
            } else {
                // armazena as os estados repassando-as para a classe CWebUser
                // que pos usa vez salva na sessão de forma persistente.
                $this->setState('idUsuario', $record->id);
                $this->setState('perfil', strtolower($record->perfil->descricao));
                $this->setState('objeto', $record);
                $this->errorCode = self::ERROR_NONE;
            }
        }
        return !$this->errorCode;
    }

}