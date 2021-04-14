# (MODX)EvolutionCMS.snippets.ddStartSnippet

Этот репозиторий — стартовый шаблон сниппета. Создавая новый сниппет используем этот, как основу.
Здесь должно быть описание сниппета. Всё, что ниже — лишь примеры, надо заполнить реальной информацией.


## Использует

* PHP >= 5.4
* [(MODX)EvolutionCMS](https://github.com/evolution-cms/evolution) >= 1.1
* [(MODX)EvolutionCMS.libraries.ddTools](https://code.divandesign.biz/modx/ddtools) >= 0.47


## Документация


### Установка


#### Вручную


##### 1. Элементы → Сниппеты: Создайте новый сниппет со следующими параметрами

1. Название сниппета: `ddStartSnippet`.
2. Описание: `<b>1.0</b> Описание сниппета.`.
3. Категория: `Core`.
4. Анализировать DocBlock: `no`.
5. Код сниппета (php): Вставьте содержимое файла `ddStartSnippet_snippet.php` из архива.


##### 2. Элементы → Управление файлами

1. Создайте новую папку `assets/snippets/ddStartSnippet/`.
2. Извлеките содержимое архива в неё (кроме файла `ddStartSnippet_snippet.php`).


#### Используя [(MODX)EvolutionCMS.libraries.ddInstaller](https://github.com/DivanDesign/EvolutionCMS.libraries.ddInstaller)

Просто вызовите следующий код в своих исходинках или модуле [Console](https://github.com/vanchelo/MODX-Evolution-Ajax-Console):

```php
//Подключение (MODX)EvolutionCMS.libraries.ddInstaller
require_once(
	$modx->getConfig('base_path') .
	'assets/libs/ddInstaller/require.php'
);

//Установка (MODX)EvolutionCMS.snippets.ddStartSnippet
\DDInstaller::install([
	'url' => 'https://github.com/DivanDesign/EvolutionCMS.snippets.ddStartSnippet',
	'type' => 'snippet'
]);
```

* Если `ddStartSnippet` отсутствует на вашем сайте, `ddInstaller` просто установит его.
* Если `ddStartSnippet` уже есть на вашем сайте, `ddInstaller` проверит его версию и обновит, если нужно. 


### Описание параметров

* `someParam1`
	* Описание: Описание параметра
	* Допустимые значения:
		* `string`
		* `integer`
	* **Обязателен**
	
* `someParam2`
	* Описание: Parameter description.
	* Допустимые значения:
		* `0`
		* `1`
	* Значение по умолчанию: —
	
* `tpl`
	* Описание: Какой-то шаблон.  
		Доступные плейсхолдеры:
		* `[+somePlaceholder1+]` — описание плейсхолдера 1
		* `[+somePlaceholder2+]` — описание плейсхолдера 2
	* Допустимые значения:
		* `stringChunkName`
		* `string` — передавать код напрямую без чанка можно начиная значение с `@CODE:`
	* **Обязателен**
	
* `tpl_placeholders`
	* Описание:
		Дополнительные данные, которые будут переданы в шаблон `tpl`.  
		Вложенные объекты и массивы также поддерживаются:
		* `{"someOne": "1", "someTwo": "test" }` => `[+someOne+], [+someTwo+]`.
		* `{"some": {"a": "one", "b": "two"} }` => `[+some.a+]`, `[+some.b+]`.
		* `{"some": ["one", "two"] }` => `[+some.0+]`, `[+some.1+]`.
	* Допустимые значения:
		* `stringJsonObject` — в виде [JSON](https://ru.wikipedia.org/wiki/JSON)
		* `stringHjsonObject` — в виде [HJSON](https://hjson.github.io/)
		* `stringQueryFormated` — в виде [Query string](https://en.wikipedia.org/wiki/Query_string)
		* Также может быть задан, как нативный PHP объект или массив (например, для вызовов через `$modx->runSnippet`).
			* `arrayAssociative`
			* `object`
	* Значение по умолчанию: —


### Примеры


#### Заголовок конкретного примера

Описание примера.

```
//Код примера
```


## Ссылки

* [Home page](https://code.divandesign.ru/modx/ddstartsnippet)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-snippets-ddstartsnippet)


<link rel="stylesheet" type="text/css" href="https://DivanDesign.ru/assets/files/ddMarkdown.css" />