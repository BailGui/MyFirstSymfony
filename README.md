# MyFirstSymfony

## Installation

```bash
symfony new MyFirstSymfony
cd MyFirstSymfony
```

### Installation de maker

```bash
composer require --dev symfony/maker-bundle
```

Pour voir ce que l'on peut faire dans la console

```bash
symfony console
php bin/console
```

Pour voir les actions possibles de maker :

```bash
php bin/console make
```

### Création d'un Controller

```bash
php  bin/console make:controller
```

Le nom doit être en Pascal case

Un fichier est créé `src/Controller/FirstController.php`

Pour voir une route depuis la console :

```bash
php bin/console debug:router
```

Pour voir le détail d'une route

```bash
php bin/console debug:router nom_de_la_route
```

### Utilisation de `YAML` comme `routing`

Ceci n'est pas conseillé, mais est parfois utilisé

Voir la documentation :

https://symfony.com/doc/current/routing.html

On commente l'activation par défaut des `attribute` dans

```yaml
#config/routes.yaml
#controllers:
#    resource:
#        path: ../src/Controller/
#        namespace: App\Controller
#    type: attribute
```

Ensuite on crée le lien vers la méthodes de notre controller

```yaml
my_json:
  path: /json
  controller: App\Controller\FirstController::myJson
```

En vérifiant bien que notre controller soit modifié:

```php
#src/Controller/FirstController.php

<?php

namespace App\Controller;

# dépendance devenue inutile
# use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{
    // attributs devenus inutiles #[Route('/json', name: 'app_first')]
    public function myJson(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }
}

```
