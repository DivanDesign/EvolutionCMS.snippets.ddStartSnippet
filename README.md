# (MODX)EvolutionCMS.snippets.ddStartSnippet

This repository is snippet template. Use it when you create a new snippet repository.
Here should be placed a description of the plugin. All texts below are examples, replace them with real information.


## Requires

* PHP >= 5.6
* [(MODX)EvolutionCMS](https://github.com/evolution-cms/evolution) >= 1.1
* [(MODX)EvolutionCMS.libraries.ddTools](https://code.divandesign.biz/modx/ddtools) >= 0.48.2


## Documentation


### Installation


#### Manually


##### 1. Elements → Snippets: Create a new snippet with the following data

1. Snippet name: `ddStartSnippet`.
2. Description: `<b>1.0</b> Snippet description.`.
3. Category: `Core`.
4. Parse DocBlock: `no`.
5. Snippet code (php): Insert content of the `ddStartSnippet_snippet.php` file from the archive.


##### 2. Elements → Manage Files

1. Create a new folder `assets/snippets/ddStartSnippet/`.
2. Extract the archive to the folder (except `ddStartSnippet_snippet.php`).


#### Using [(MODX)EvolutionCMS.libraries.ddInstaller](https://github.com/DivanDesign/EvolutionCMS.libraries.ddInstaller)

Just run the following PHP code in your sources or [Console](https://github.com/vanchelo/MODX-Evolution-Ajax-Console):

```php
//Include (MODX)EvolutionCMS.libraries.ddInstaller
require_once(
	$modx->getConfig('base_path') .
	'assets/libs/ddInstaller/require.php'
);

//Install (MODX)EvolutionCMS.snippets.ddStartSnippet
\DDInstaller::install([
	'url' => 'https://github.com/DivanDesign/EvolutionCMS.snippets.ddStartSnippet',
	'type' => 'snippet'
]);
```

* If `ddStartSnippet` is not exist on your site, `ddInstaller` will just install it.
* If `ddStartSnippet` is already exist on your site, `ddInstaller` will check it version and update it if needed.


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
		Additional data has to be passed into the `tpl`.  
		Nested objects and arrays are supported too:
		* `{"someOne": "1", "someTwo": "test" }` => `[+someOne+], [+someTwo+]`.
		* `{"some": {"a": "one", "b": "two"} }` => `[+some.a+]`, `[+some.b+]`.
		* `{"some": ["one", "two"] }` => `[+some.0+]`, `[+some.1+]`.
	* Valid values:
		* `stringJsonObject` — as [JSON](https://en.wikipedia.org/wiki/JSON)
		* `stringHjsonObject` — as [HJSON](https://hjson.github.io/)
		* `stringQueryFormated` — as [Query string](https://en.wikipedia.org/wiki/Query_string)
		* It can also be set as a native PHP object or array (e. g. for calls through `$modx->runSnippet`):
			* `arrayAssociative`
			* `object`
	* Default value: —


### Examples


#### Example 1 title

Some example description.

```
//Some exmaple code
```


#### Run the snippet through `\DDTools\Snippet::runSnippet` without DB and eval

```php
//Include (MODX)EvolutionCMS.libraries.ddTools
require_once(
	$modx->getConfig('base_path') .
	'assets/libs/ddTools/modx.ddtools.class.php'
);

//Run (MODX)EvolutionCMS.snippets.ddStartSnippet
\DDTools\Snippet::runSnippet([
	'name' => 'ddStartSnippet',
	'params' => [
		'someParam1' => 'Some param value'
	]
]);
```


## Links

* [Home page](https://code.divandesign.biz/modx/ddstartsnippet)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-snippets-ddstartsnippet)


<link rel="stylesheet" type="text/css" href="https://DivanDesign.ru/assets/files/ddMarkdown.css" />