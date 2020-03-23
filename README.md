# (MODX)EvolutionCMS.snippets.ddStartSnippet

Этот репозиторий — стартовый шаблон сниппета. Создавая новый сниппет используем этот, как основу. Здесь должно быть описание сниппета, в идеале — на английском. Всё, что ниже — лишь примеры, надо заполнить реальной информацией.


## Requires
* PHP >= 5.4
* [(MODX)EvolutionCMS](https://github.com/evolution-cms/evolution) >= 1.1
* [(MODX)EvolutionCMS.libraries.ddTools](https://code.divandesign.biz/modx/ddtools) >= 0.30


## Documentation


### Installation


#### 1. Elements → Snippets: Create a new snippet with the following data

1. Snippet name: `ddStartSnippet`.
2. Description: `<b>1.0</b> Описание сниппета.`.
3. Category: `Core`.
4. Parse DocBlock: `no`.
5. Snippet code (php): Insert content of the `ddStartSnippet_snippet.php` file from the archive.


#### 2. Elements → Manage Files:

1. Create a new folder `assets/snippets/ddStartSnippet/`.
2. Extract the archive to the folder (except `ddStartSnippet_snippet.php`).


### Parameters description

* `someParam1`
	* Desctription: Parameter description.
	* Valid values:
		* `string`
		* `integer`
	* **Required**
	
* `someParam2`
	* Desctription: Parameter description.
	* Valid values:
		* `0`
		* `1`
	* Default value: —
	
* `tpl`
	* Desctription: Какой-то шаблон.  
		Available placeholders:
		* `[+somePlaceholder1+]` — Описание плейсхолдера 1.
		* `[+somePlaceholder2+]` — Описание плейсхолдера 2.
	* Valid values:
		* `stringChunkName`
		* `string` — use inline templates starting with `@CODE:`
	* **Required**
	
* `tpl_placeholders`
	* Desctription:
		Additional data has to be passed into the `tpl`.  
		Arrays are supported too: `some[a]=one&some[b]=two` => `[+some.a+]`, `[+some.b+]`; `some[]=one&some[]=two` => `[+some.0+]`, `[some.1]`.
	* Valid values:
		* `stringJsonObject` — as [JSON](https://en.wikipedia.org/wiki/JSON)
		* `stringQueryFormated` — as [Query string](https://en.wikipedia.org/wiki/Query_string)
	* Default value: —


### Examples


#### Example 1 title

Some example description.

```
//Some exmaple code
```


## [Home page →](https://code.divandesign.biz/modx/ddstartsnippet)


<link rel="stylesheet" type="text/css" href="md.css" />