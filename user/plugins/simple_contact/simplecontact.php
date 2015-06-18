<?php namespace Grav\Plugin;

use Grav\Common\Page\Page;
use Grav\Common\Plugin;

class SimpleContactPlugin extends Plugin
{
  public static function getSubscribedEvents()
  {
    return [
      'onPluginsInitialized' => ['onPluginsInitialized', 0]
    ];
  }

  public function onPluginsInitialized()
  {
    if ( $this->isAdmin() ) {
      $this->active = false;
      return;
    }

    $this->enable([
      'onTwigTemplatePaths'   => ['onTwigTemplatePaths', 0],
      'onTwigSiteVariables'   => ['onTwigSiteVariables', 0],
      'onPageInitialized'     => ['onPageInitialized', 0]
    ]);
  }

  public function onTwigTemplatePaths()
  {
    $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
  }

  public function onTwigSiteVariables()
  {
    if ( $this->grav['config']->get('plugins.simplecontact.enabled') ) {
      $this->grav['assets']
        ->add('plugin://simplecontact/assets/css/simplecontact.css')
        ->add('plugin://simplecontact/assets/js/simplecontact.js');
    }
  }

  public function onPageInitialized()
  {
    $this->mergeConfig($this->grav['page']);

    if ( $this->grav['config']->get('plugins.simplecontact.enabled') ) {
      $page   = $this->grav['page'];
      $twig   = $this->grav['twig'];
      $uri    = $this->grav['uri'];

      $options = $this->grav['config']->get('plugins.simplecontact');

      $old_content = $page->content();

      if ( false === $uri->param('send') ) {
        if ( $_SERVER['REQUEST_METHOD'] == "POST") {
          if ( false === $this->validateFormData() ) {
            $this->grav->redirect($page->slug() . '/send:error');
          } else {
            if ( false === $this->sendEmail() ) {
              $this->grav->redirect($page->slug() . '/send:fail');
            } else {
              $this->grav->redirect($page->slug() . '/send:success');
            }
          }

        } else {
          $page->content($old_content . $twig->twig()->render('simplecontact/form.html.twig', ['simplecontact' => $options, 'page' => $page]));
        }
      } else {
        switch ( $uri->param('send') ) {
          case 'success':
            $page->content($options['messages']['success']);
          break;

          case 'error':
            $page->content($options['messages']['error']);
          break;

          case 'fail':
            $page->content($options['messages']['fail']);
          break;

          default:
          break;
        }
      }
    }
  }

  protected function validateFormData()
  {
    $form_data = $this->filterFormData($_POST);

    $name     = $form_data['name'];
    $email    = $form_data['email'];
    $message  = $form_data['message'];

    $antispam = $form_data['antispam'];

    if ( empty($name) || empty($message) || ! $email || $antispam ) {
      return false;
    } else {
      return true;
    }
  }

  protected function filterFormData($form)
  {
    $defaults = [
      'name'      => '',
      'email'     => '',
      'message'   => '',
      'antispam'  => ''
    ];

    $data = array_merge($defaults, $form);

    return [
      'name'      => $data['name'],
      'email'     => filter_var($data['email'], FILTER_SANITIZE_EMAIL),
      'message'   => $data['message'],
      'antispam'  => $data['antispam']
    ];
  }

  protected function sendEmail()
  {
    $form   = $this->filterFormData($_POST);
    $options = $this->grav['config']->get('plugins.simplecontact');

    $recipient  = $options['recipient'];
    $subject    = $options['subject'];

    $email_content = "Name: {$form['name']}\n";
    $email_content .= "Email: {$form['email']}\n\n";
    $email_content .= "Message:\n{$form['message']}\n";

    $email_headers = "From: {$form['name']} <{$form['email']}>";

    if ( mail($recipient, $subject, $email_content, $email_headers) ) {
      return true;
    } else {
      return false;
    }
  }

  private function mergeConfig( Page $page )
  {
    $defaults = (array) $this->grav['config']->get('plugins.simplecontact');
    if ( isset($page->header()->simplecontact) ) {
      if ( is_array($page->header()->simplecontact) ) {
        $this->grav['config']->set('plugins.simplecontact', array_replace_recursive($defaults, $page->header()->simplecontact));
      } else {
        $this->grav['config']->set('plugins.simplecontact.enabled', $page->header()->simplecontact);
      }
    } else {
      $this->grav['config']->set('plugins.simplecontact.enabled', false);
    }
  }
}
