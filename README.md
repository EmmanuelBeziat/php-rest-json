# php-rest-json

Please note that this tool is just an example of usecase, you should edit the files (views, route, etc.) to match your needs.

It’s still lacking an authentication module and CORS advanced management. I strongly discourage to use it in production.

## Setup

### 1. Get the work folder

You can either download it or clone it with `git clone`.


### 2. Install

The installation require [Composer](https://getcomposer.org/) for PHP. Go to your work folder with your favorite CLI and type this command:

```
composer install
```

### 3. Host

Make sure that your server (localhost or DNS) point on the `/public` folder.

### 4. Database

Create a database to fit your needs, and be sure to edit the `/views` and `/routes/web.php` accordingly.

These example views are set to work with a MySQL database with this data type:

```sql
--
-- Base de données :  `rest`
--
CREATE DATABASE IF NOT EXISTS `rest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rest`;

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` smallint(8) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `datetime`, `name`) VALUES
(1, '2019-08-21 22:23:01', 'Value 1'),
(2, '2019-08-21 22:23:01', 'Value 2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` smallint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

```

### 5. Environment config

Make sure to either copy or rename `.env.example` to `.env` and fill it with your very own configuration informations.

You can check more about this configuration file on the [Lumen documentation](https://lumen.laravel.com/docs/5.8/configuration).

## How to use

By going on your virtual host or website, you should see the basic page.

### View data

You can either chose to get a web view for the data, or directly raw JSON data. This is chosen by the uri type: `view` or `api`.

**Web view**

All items
```http://mywebsite.localhost/view/items```

Specific item by ID (1 for example)
```http://mywebsite.localhost/view/items/1```

**Raw data**

All items
```http://mywebsite.localhost/api/items```

Specific item by ID (1 for example)
```http://mywebsite.localhost/api/items/1```

### Post data

You need to send a `POST` header request to add a new data. In order to do so, your data should be sent to `http://mywebsite.localhost/add`.

Of course, change the `routes/web.php` content to match the data you need to receive, and make sure it matches your database.

As for this example, the data waited are simply these:

```json
{
	"name": "value"
}
```

MySQL database in this example is set to automatically add and increment and ID, and a timestamp to the current time. So the name parameter is the only one to be expected.

If you need to test it, you can use any REST client, such as [Insomnia](https://insomnia.rest/).

## Documentation

### Lumen
Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).


## License

Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
