# (MODX)EvolutionCMS.snippets.ddStartSnippet

This repository is snippet template. Use it when you create a new snippet repository.
Here should be placed a description of the plugin. All texts below are examples, replace them with real information.


## Requires

* PHP >= 5.4
* [(MODX)EvolutionCMS](https://github.com/evolution-cms/evolution) >= 1.1
* [(MODX)EvolutionCMS.libraries.ddTools](https://code.divandesign.biz/modx/ddtools) >= 0.30


## Documentation


### Installation


#### 1. Elements → Snippets: Create a new snippet with the following data

1. Snippet name: `ddStartSnippet`.
2. Description: `<b>1.0</b> Snippet description.`.
3. Category: `Core`.
4. Parse DocBlock: `no`.
5. Snippet code (php): Insert content of the `ddStartSnippet_snippet.php` file from the archive.


#### 2. Elements → Manage Files

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
	* Desctription: Some template.  
		Available placeholders:
		* `[+somePlaceholder1+]` — placeholder 1 description
		* `[+somePlaceholder2+]` — placeholder 2 description
	* Valid values:
		* `stringChunkName`
		* `string` — use inline templates starting with `@CODE:`
	* **Required**
	
* `tpl_placeholders`
	* Desctription:
		Additional data has to be passed into the `tools->tplParser->tpl`.  
		Nested objects and arrays are supported too:
		* `{"someOne": "1", "someTwo": "test" }` => `[+someOne+], [+someTwo+]`.
		* `{"some": {"a": "one", "b": "two"} }` => `[+some.a+]`, `[+some.b+]`.
		* `{"some": ["one", "two"] }` => `[+some.0+]`, `[+some.1+]`.
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


## Links

* [Home page](https://code.divandesign.biz/modx/ddstartsnippet)
* [Telegram chat](https://t.me/dd_code)


<link rel="stylesheet" type="text/css" href="https://DivanDesign.ru/assets/files/ddMarkdown.css" />