<?php namespace Momo\Profile;

use System\Classes\PluginBase;

class Plugin extends PluginBase {
    public function registerComponents() {
    }
  
    public function registerSettings() {
    }
  
    public function boot() {
  
      UserModel::extend(function ($model) {
        $model->addFillable([
                              'facebook', 'bio'
                            ]);
      });
  
      UsersController::extendFormFields(function ($form, $model, $context) {
        $form->addTabFields([
                              'facebook' => [
                                'label' => 'Facebook',
                                'type'  => 'text',
                                'tab'   => 'Profile'
                              ],
                              'bio'      => [
                                'label' => 'Biography',
                                'type'  => 'textarea',
                                'tab'   => 'Profile'
                              ],
  
                            ]);
      });
  
    }
  }