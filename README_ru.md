# (MODX)EvolutionCMS.snippets.ddStartSnippet

Этот репозиторий — стартовый шаблон сниппета. Создавая новый сниппет используем этот, как основу. Здесь должно быть описание сниппета, в идеале — на английском. Всё, что ниже — лишь примеры, надо заполнить реальной информацией.


## Использует

* PHP >= 5.4
* [(MODX)EvolutionCMS](https://github.com/evolution-cms/evolution) >= 1.1
* [(MODX)EvolutionCMS.libraries.ddTools](https://code.divandesign.biz/modx/ddtools) >= 0.30


## Документация


### Установка


#### 1. Элементы → Сниппеты: Создайте новый сниппет со следующими параметрами

1. Название сниппета: `ddStartSnippet`.
2. Описание: `<b>1.0</b> Описание сниппета.`.
3. Категория: `Core`.
4. Анализировать DocBlock: `no`.
5. Код сниппета (php): Вставьте содержимое файла `ddStartSnippet_snippet.php` из архива.


#### 2. Элементы → Управление файлами

1. Создайте новую папку `assets/snippets/ddStartSnippet/`.
2. Извлеките содержимое архива в неё (кроме файла `ddStartSnippet_snippet.php`).


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
		Дополнительные данные, которые будут переданы в чанк `tpl`.  
		Вложенные объекты и массивы также поддерживаются: `some[a]=one&some[b]=two` => `[+some.a+]`, `[+some.b+]`; `some[]=one&some[]=two` => `[+some.0+]`, `[some.1]`.
	* Допустимые значения:
		* `stringJsonObject` — as [JSON](https://en.wikipedia.org/wiki/JSON)
		* `stringQueryFormated` — as [Query string](https://en.wikipedia.org/wiki/Query_string)
	* Значение по умолчанию: —


### Примеры


#### Заголовок конкретного примера

Описание примера.

```
//Код примера
```


## [Home page →](https://code.divandesign.biz/modx/ddstartsnippet)


<link rel="stylesheet" type="text/css" href="https://DivanDesign.ru/assets/files/ddMarkdown.css" />