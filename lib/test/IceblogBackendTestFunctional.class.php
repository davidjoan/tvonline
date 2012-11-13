<?php

/**
 * cusasiteBackendTestFunctional.
 *
 * @package    cusasite
 * @subpackage test
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 */
class cusasiteBackendTestFunctional extends cusasiteTestFunctional
{
  /**
   * Logs in the user.
   * 
   * @param string $email    The email to log in
   * @param strgin $password The password to log in
   * 
   * @return cusasiteBackendTestFunctional The current test instance
   */
  public function login($email = 'jonathan.nieto@koechcorp.com', $password = 'symfony')
  {
    $this->get('/')->
    click('Save', array('login_backend' => array
    (
      'email'    => $email,
      'password' => $password,
    )));
    
    return $this;
  }
  /**
   * Logs out the user.
   * 
   * @return cusasiteBackendTestFunctional The current test instance
   */
  public function logout()
  {
    $this->get('/logout');
    
    return $this;
  }
}
